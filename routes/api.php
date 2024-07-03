<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\API\Controllers\AuthController;

Route::middleware('cors')->group(function () {
    Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
        return $request->user();
    });
    /*
    Route::middleware(['auth:api'])->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('user', [UserController::class, 'update']);
    });
    Route::middleware(['auth:api', 'role:user'])->group(function () {
        Route::post('wishlist', [WhishlistController::class, 'set']);
        Route::get('book-view/{id}', [BookController::class, 'getView']);
    });
    Route::middleware(['auth:api', 'role:admin'])->group(function () {
        Route::get('users', [UserController::class, 'all']);
        Route::get('user/{id}', [UserController::class, 'get']);
        Route::put('book', [BookController::class, 'create']);
        Route::post('book', [BookController::class, 'update']);
        Route::delete('book/{id}', [BookController::class, 'delete']);
        Route::get('book/{id}', [BookController::class, 'get']);
    });
    */
});