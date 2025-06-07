<?php

namespace App\Http\Controllers;

use App\Services\GumroadApi;
use App\Services\GumroadService;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Auth;
use JsonException;

class GumroadLicenseInformationController extends Controller
{
    /**
     * @throws GuzzleException | ClientException | JsonException
     */
    public function __invoke(GumroadService $gumroadService)
    {
        return $gumroadService->licenseInfo();
    }
}
