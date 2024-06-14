<?php

use App\Http\Controllers\Test;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// routes/web.php




Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','localize' ]], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/about', function () {
        return view('about');
    });
    require base_path('vendor/laravel/jetstream/routes/livewire.php');
    require base_path('vendor/laravel/fortify/routes/routes.php');

    
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    
});
Route::get('/anas', [TestController::class, 'index']);

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/


// Route::prefix('en')->group(function () {
//     // English routes
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });

// Route::prefix('ar')->group(function () {
//     // Arabic routes
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
