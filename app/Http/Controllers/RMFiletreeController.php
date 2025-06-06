<?php

namespace App\Http\Controllers;

use App\Models\Sync;
use App\Services\RMapi;
use Eloquent\Pathogen\AbsolutePath;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RMFiletreeController extends Controller
{

    public function index(Request $request, RMapi $rmapi): JsonResponse
    {
        $path = $request->get('path') ?? '/';

        $filesAndFolders = $rmapi->list($path);
        if ($path !== "/") {
            $parent = AbsolutePath::fromString($path)->parent()->normalize()->string();
            if (!Str::endsWith($parent, "/")) {
                $parent .= "/";
            }
            $filesAndFolders->prepend(['type' => 'd', 'name' => '..', 'path' => $parent]);
        }

        $files = $filesAndFolders->filter(fn($item) => $item['type'] === "f")->map(fn($item) => $item['path']);

        $syncs = Sync::fromSub(function ($query) use ($files) {
            return $query->select('*')
                ->selectRaw('ROW_NUMBER() OVER (PARTITION BY filename ORDER BY created_at DESC) as rowNumber')
                ->from('sync')
                ->whereIn('filename', $files);
        }, 'ranked_sync')
            ->where('rowNumber', 1)
            ->get()
            ->map(Sync::formatForResponse(...))
            ->keyBy('path');

        $filesAndFolders = $filesAndFolders->map(fn($fileOrFolder) => [
            ...$fileOrFolder,
            "sync" => $fileOrFolder['type'] === "f" ? ($syncs[$fileOrFolder['path']] ?? null) : null
        ]);

        return response()->json([
            "items" => $filesAndFolders,
            "cwd" => $path
        ]);
    }
}
