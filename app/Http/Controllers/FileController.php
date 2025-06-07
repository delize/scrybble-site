<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\DataClasses\SyncContext;
use App\Jobs\DownloadRemarkableFileJob;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\UnauthorizedException;

/**
 *
 */
class FileController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function show(Request $request): JsonResponse
    {
        $user = Auth::user();
        if (!$user) {
            throw new UnauthorizedException();
        }
        $input_filename = $request->get('file');
        $sync_context = new SyncContext($input_filename, $user);
        Log::info("user=`$user` requested file file=`$input_filename`; Dispatching `DownloadRemarkableFileJob`");
        DownloadRemarkableFileJob::dispatch($sync_context);

        return response()->json([
            'sync_id' => $sync_context->sync->id,
            'filename' => $sync_context->input_filename
        ]);
    }
}
