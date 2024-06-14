<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TernakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PeternakController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/artikel/{id}', [HomeController::class, 'show_artikel'])->name('show_artikel');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/store', [AuthController::class, 'store'])->name('store')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard', DashboardController::class);

    Route::resource('ternak', TernakController::class);
    Route::get('ternak/{id}/print', [TernakController::class, 'print'])->name('ternak.print');

    Route::resource('artikel', ArtikelController::class);
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::resource('peternak', PeternakController::class);
    Route::resource('user', UserController::class);
});
