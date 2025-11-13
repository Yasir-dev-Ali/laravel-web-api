<?php

use App\Http\Controllers\Api\V1\PostController as V1Controller;
use App\Http\Controllers\Api\V2\PostController as V2Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('/post', V1Controller::class);
});

Route::prefix('v2')->group(function () {
    Route::apiResource('/post', V2Controller::class);
});
