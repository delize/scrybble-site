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
    public function search(Request $request, RMapi $rmapi): JsonResponse
    {
        $request->validate([
            'query' => 'nullable|string',
            'starred' => 'nullable|boolean',
            'tags' => 'nullable|array',
            'tags.*' => 'string',
        ]);

        $query = $request->input('query');
        $starred = $request->input('starred');
        $tags = $request->input('tags', []);

        if ($query === null && $starred === null && empty($tags)) {
            return response()->json([
                'message' => 'At least one filter (query, starred, or tags) must be provided.',
                'errors' => ['filters' => ['At least one filter (query, starred, or tags) must be provided.']],
            ], 422);
        }

        $files = $rmapi->find($query, $starred, $tags);
        $syncs = Sync::syncMetadataForFiles($files->pluck('path'));

        $filesWithSync = $files->map(fn($file) => [
            ...$file,
            'sync' => $syncs[$file['path']] ?? null,
        ]);

        return response()->json([
            'items' => $filesWithSync,
        ]);
    }

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

        $filePaths = $filesAndFolders->filter(fn($item) => $item['type'] === "f")->pluck('path');
        $syncs = Sync::syncMetadataForFiles($filePaths);

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
