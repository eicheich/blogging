<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('login', function () {
        return view('index');
    })->name('login');

//     Route::get('register', function () {
//         return view('auth.register');
//     })->name('register');
});
