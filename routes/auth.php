<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes — Praktikum 11
|--------------------------------------------------------------------------
| Menggunakan Controller tradisional (bukan Livewire).
| Middleware 'guest' memastikan halaman login/register tidak bisa
| diakses oleh pengguna yang sudah login.
*/

// ── Login ────────────────────────────────────────────────────────────────────
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    // ── Register ──────────────────────────────────────────────────────────────
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    // ── Forgot Password ───────────────────────────────────────────────────────
    Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
        ->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
        ->name('password.email');

    // ── Reset Password ────────────────────────────────────────────────────────
    Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
        ->name('password.reset');
    Route::post('reset-password', [ResetPasswordController::class, 'reset'])
        ->name('password.update');
});

// ── Logout (hanya bisa di-POST oleh user yang sudah login) ──────────────────
Route::post('logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
