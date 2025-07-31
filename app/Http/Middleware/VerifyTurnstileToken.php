<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\CloudflareTurnstileService;
use Symfony\Component\HttpFoundation\Response;

class VerifyTurnstileToken
{
    protected CloudflareTurnstileService $turnstileService;

    public function __construct(CloudflareTurnstileService $turnstileService)
    {
        $this->turnstileService = $turnstileService;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response) $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->input('cf-turnstile-response');
        $ip = $request->ip();

        $result = $this->turnstileService->verifyTurnstileToken($token, $ip);

        if (!$result['success']) {
            return response()->json([
                'errors' => [
                    'turnstile' => 'Invalid or expired Turnstile token, try again.'
                ]
            ], 400);
        }

        return $next($request);
    }
}
