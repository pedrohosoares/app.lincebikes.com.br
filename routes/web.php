<?php

use App\Http\Controllers\Api\LogController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::post('/api/logs',[LogController::class,'insert'])->name('api.logs');
Route::put('/api/logs',[LogController::class,'update'])->name('api.logs');
Route::get('/api/logs',[LogController::class,'get'])->name('api.logs');
