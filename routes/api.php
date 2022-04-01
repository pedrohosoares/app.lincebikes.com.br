<?php

use App\Http\Controllers\Api\LogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logs',[LogController::class,'insert'])->name('api.logs');
Route::put('/logs',[LogController::class,'update'])->name('api.logs');
Route::get('/logs',[LogController::class,'get'])->name('api.logs');
