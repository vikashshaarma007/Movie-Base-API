<?php

use App\Http\Controllers\API\MovieController;
use App\Http\Controllers\API\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json(['message' => 'API is working!']);
});
Route::get('/reviews', [ReviewController::class, 'index']);
Route::get('/reviews/{id}', [ReviewController::class, 'show']);

Route::apiResource('movies', MovieController::class);
Route::apiResource('movies.reviews', ReviewController::class);
