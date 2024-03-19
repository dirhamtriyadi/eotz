<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TernakController;
use App\Http\Controllers\Auth\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard', DashboardController::class);

    Route::resource('ternak', TernakController::class);
});
