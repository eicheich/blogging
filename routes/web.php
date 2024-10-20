<?php

use App\Http\Controllers\V1\Web\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\Web\AuthController;
use App\Http\Controllers\V1\Web\EmailVerificationController;
use App\Http\Controllers\V1\Web\IndexController;
use App\Http\Controllers\V1\Web\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');
    Route::get('register', [AuthController::class, 'register'])->name('register.page');
    Route::post('register', [AuthController::class, 'registerPost'])->name('register.post');
    Route::middleware('auth')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout.post');
        Route::get('me', [AuthController::class, 'me']);
        Route::post('update-profile', [AuthController::class, 'updateProfile']);
    });
});
// prefix middleware
Route::middleware('auth')->group(function () {
    Route::get('index', [IndexController::class, 'index'])->name('index');
});

Route::prefix('post')->middleware('auth')->group(function () {
    Route::post('store', [PostController::class, 'store'])->name('post.store');
    Route::get('edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('update/{id}', [PostController::class, 'update'])->name('post.update');
    Route::post('delete/{id}', [PostController::class, 'delete'])->name('post.delete');
    Route::get('show/{id}', [PostController::class, 'show'])->name('post.show');
    Route::get('index', [PostController::class, 'index'])->name('post.index');
});


Route::get('/email/verify', [EmailVerificationController::class, 'show'])
    ->middleware('auth')
    ->name('verification.notice');

// Route for verifying the email with signed URL
Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');

// Route to resend the verification email
Route::post('/email/verification-notification', [EmailVerificationController::class, 'resend'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

// Define the route named 'verifyEmail'
Route::get('/email/verify-email', [EmailVerificationController::class, 'verifyEmail'])
    ->name('verifyEmail');
