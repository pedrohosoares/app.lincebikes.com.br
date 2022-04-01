<?php

use App\Http\Controllers\Api\LogController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

