<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Log;

readonly class CloudflareTurnstileService
{
    private string $url;

    public function __construct()
    {
        $this->url = "https://challenges.cloudflare.com/turnstile/v0/siteverify";
    }

    public function verifyTurnstileToken(string $token, string $remoteip)
    {
        try {
            $response = Http::asForm()->post($this->url, [
                'secret' => config('scrybble.cloudflare.secret_key'),
                'response' => $token,
                'remoteip' => $remoteip
            ]);

            return $response->json();
        } catch(Exception $e) {
            Log::error('Cloudflare Turnstile verification failed', [
                'error' => $e->getMessage(),
                'token' => substr($token, 0, 10) . '...',
            ]);

            return [
                'success' => false,
                'error_codes' => ['internal-error']
            ];
        }
    }
}
