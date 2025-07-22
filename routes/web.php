<?php

use App\Http\Controllers\CustomHostInformationController;
use App\Http\Controllers\ConnectedGumroadLicenseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SharedDocumentsController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GumroadLicenseInformationController;
use App\Http\Controllers\GumroadSaleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InspectSyncController;
use App\Http\Controllers\OnboardingStateController;
use App\Http\Controllers\OnetimecodeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReMarkableDocumentFeedbackController;
use App\Http\Controllers\RMFiletreeController;
use App\Http\Controllers\SentryTunnelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/support', fn () => view('pages.support'));
Route::get('/about', fn () => view('pages.about'));
Route::get('/roadmap', fn () => view('pages.roadmap'));

Route::get('/dashboard', fn () => view('pages.dashboard-replaced'));

/**
 * Legal
 */
Route::get('/privacy-policy', fn () => view('pages.legal.privacy-policy'));

Route::middleware(['middleware' => 'deployment.self-hosted'])->get('/self-host-setup', [CustomHostInformationController::class, "show"]);
Route::middleware(['middleware' => 'auth:sanctum'])->get('/sanctum/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth']], static function () {
    Route::get('/app/', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/connect-license', [ConnectedGumroadLicenseController::class, 'store'])->name('connect-license');
});

// required by sentry:
// https://docs.sentry.io/platforms/javascript/guides/react/troubleshooting/#dealing-with-ad-blockers
Route::post("/tunnel", [SentryTunnelController::class, "index"]);

Route::get('prmdownload/{path}', [DownloadController::class, "download"])->where('path', '.*')->name('prmdownload');

Route::group(['middleware' => 'auth'], static function () {
    Route::get('profile', ProfileController::class);
});

Route::get('shared_documents', [SharedDocumentsController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
