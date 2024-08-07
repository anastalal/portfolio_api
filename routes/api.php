<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioImageController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/portfolio-images', [PortfolioImageController::class, 'index']);
Route::get('/portfolio-images/{id}', [PortfolioImageController::class, 'show']);
Route::get('/active', [PortfolioImageController::class, 'active']);

// Route::post('/portfolio-images', [PortfolioImageController::class, 'store']);
// Route::put('/portfolio-images/{id}', [PortfolioImageController::class, 'update']);
// Route::delete('/portfolio-images/{id}', [PortfolioImageController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
