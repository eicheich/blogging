<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\Web\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login.page');
    Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');
    Route::post('register', [AuthController::class, 'register']);
    Route::middleware('auth')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout.post');
        Route::get('me', [AuthController::class, 'me']);
        Route::post('update-profile', [AuthController::class, 'updateProfile']);
    });
});
