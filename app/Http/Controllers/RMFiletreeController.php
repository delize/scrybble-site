<?php

namespace App\Http\Controllers;

use App\Models\Sync;
use App\Services\RMapi;
use Eloquent\Pathogen\AbsolutePath;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RMFiletreeController extends Controller {

    public function index(Request $request, RMapi $rmapi): JsonResponse {
        $user = Auth::user();
        $path = $request->get('path') ?? '/';

        $items = $rmapi->list($path);
        if ($path !== "/") {
            $parent = AbsolutePath::fromString($path)->parent()->normalize()->string();
            if (!Str::endsWith($parent, "/")) {
                $parent .= "/";
            }
            $items->prepend(['type' => 'd', 'name' => '..', 'path' => $parent]);
        }

        $files = $items->filter(fn ($item) => $item['type'] === "f")->map(fn ($item) => $item['path']);

        $syncs = Sync::fromSub(function ($query) use ($files) {
            $query->select('*')
                ->selectRaw('ROW_NUMBER() OVER (PARTITION BY filename ORDER BY created_at DESC) as rn')
                ->from('sync')
                ->whereIn('filename', $files);
        }, 'ranked_sync')
            ->where('rn', 1)
            ->get()
            ->map(Sync::formatForResponse(...))
            ->keyBy('filename');

        $items = $items->map(function ($item) use ($syncs) {
            return [
                ...$item,
                "sync" => $item['type'] === "f" ? ($syncs[$item['path']] ?? null) : null
            ];
        });

        return response()->json([
            "items" => $items,
            "cwd" => $path
        ]);
    }
}
