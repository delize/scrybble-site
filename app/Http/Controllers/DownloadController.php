<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DownloadController extends Controller
{
    public function index()
    {

    }

    public function download(Request $request, string $path)
    {
        $normalizedPath = $this->normalizePath($path);

        if (!$this->isValidPath($normalizedPath)) {
            throw new NotFoundHttpException('Invalid path');
        }

        $storage = Storage::disk('efs');
        if (!$storage->exists($normalizedPath)) {
            throw new NotFoundHttpException('File not found');
        }

        return $storage->download($normalizedPath);
    }

    private function normalizePath(string $path): string
    {
        $parts = array_filter(explode('/', $path), fn($p) => $p !== '' && $p !== '.' && $p !== '..');
        return implode('/', $parts);
    }

    private function isValidPath(string $path): bool
    {
        // sync_id is generated via Str::random() which produces alphanumeric strings
        $patterns = [
            '/^user-\d+\/input_documents\/[a-zA-Z0-9]+\.rmn$/',
            '/^user-\d+\/processed\/[a-zA-Z0-9]+\.zip$/',
        ];
        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $path)) {
                return true;
            }
        }
        return false;
    }
}
