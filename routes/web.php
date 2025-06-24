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
Route::get('/contact', fn () => view('pages.support'));

Route::middleware(['middleware' => 'deployment.self-hosted'])->get('/self-host-setup', [CustomHostInformationController::class, "show"]);
Route::middleware(['middleware' => 'auth:sanctum'])->get('/sanctum/user', function (Request $request) {
    return $request->user();
});

//Route::get('login', function () {
//    if (session()->has('url.intended')) {
//        $redirect = urlencode(session()->get('url.intended'));
//        return redirect("/auth/login?redirect={$redirect}");
//    }
//    return redirect("/auth/login");
//});

Route::group(['middleware' => ['auth']], static function () {
    Route::get('/app/', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/connect-license', [ConnectedGumroadLicenseController::class, 'store'])->name('connect-license');
});

// required by Fortify: https://github.com/laravel/fortify/issues/155#issuecomment-732531717
Route::get('/base/reset-password/{token}', [HomeController::class, 'index'])->name('password.reset');

// required by sentry:
// https://docs.sentry.io/platforms/javascript/guides/react/troubleshooting/#dealing-with-ad-blockers
Route::post("/tunnel", [SentryTunnelController::class, "index"]);

Route::get('prmdownload/{path}', [DownloadController::class, "download"])->where('path', '.*')->name('prmdownload');

Route::group(['middleware' => 'auth'], static function () {
    Route::get('profile', ProfileController::class);
});

Route::group(['middleware' => ['auth'], 'prefix' => "api"], static function () {
    Route::get('onboardingState', OnboardingStateController::class);
    Route::get('licenseInformation', GumroadLicenseInformationController::class);

    Route::post('gumroadLicense', [ConnectedGumroadLicenseController::class, "store"]);

    Route::post('/onetimecode', [OnetimecodeController::class, 'create']);

    Route::post('/file', [FileController::class, 'show'])->name('download');

    Route::get('inspect-sync', [InspectSyncController::class, "index"]);

    Route::post('RMFileTree', [RMFiletreeController::class, 'index']);

    Route::post('remarkable-document-share', [ReMarkableDocumentFeedbackController::class, 'store']);
});

Route::group(['prefix' => 'api'], static function () {
    Route::get('gumroadSale/{sale_id}', [GumroadSaleController::class, "show"]);

    Route::get("posts", [PostController::class, "list"]);
    Route::get("posts/{slug}", [PostController::class, "show"]);
});


Route::get('shared_documents', [SharedDocumentsController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
