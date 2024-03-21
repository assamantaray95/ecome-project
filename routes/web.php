<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class, 'showLoginForm'])->middleware(['guest']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login-page')->middleware(['guest']);
Route::post('/login', [AuthController::class, 'loginSubmitForm'])->name('login'); // Add POST method here
Route::get('/login/register', [AuthController::class, 'showRegisterForm'])->name('register-page')->middleware(['guest']);
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Change to POST method

Route::middleware(['auth'])->group(function () {
    // Routes for admin users
    Route::prefix('admin')->group(function () {
        Route::view('/admin-dashboard', 'admin-user.admin-dashboard')->name('admin-user.home');
        // Add more routes for admin users here
    });

    // Routes for normal users
    Route::prefix('user')->group(function () {
        Route::view('/user-dashboard', 'normal-user.user-dashboard')->name('normal-user.home');
        // Add more routes for normal users here
    });
});
