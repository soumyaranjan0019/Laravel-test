<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\userController;
use App\Http\Middleware\ValidUser;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register', 'register')->name('register');
Route::post('registerSave', [AuthController::class, 'register'])->name('registerSave');
Route::view('login', 'login')->name('login');
Route::post('loginMatch', [AuthController::class, 'login'])->name('loginMatch');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/user', userController::class)->middleware(ValidUser::class);
