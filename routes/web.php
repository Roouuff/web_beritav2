<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProfileController; // 1. IMPORT PROFILE CONTROLLER DI SINI

/*
|--------------------------------------------------------------------------
| 1. Rute Umum / Frontend (Non-Autentikasi)
|--------------------------------------------------------------------------
*/

// Tetap gunakan HomeController bawaan awal untuk halaman root '/'
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute tambahan halaman statis dari modul
Route::get('/beranda', function () {
    return view('user.beranda');
});
Route::get('/tentang', function () {
    return view('user.tentang');
});

// TAMBAHKAN RUTE INI UNTUK DETAIL BERITA
Route::get('/berita/{slug}', [HomeController::class, 'showArticle'])->name('berita.show');

/*
|--------------------------------------------------------------------------
| 2. Rute Group Admin (Hanya Bisa Diakses Setelah Login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Menjaga rute dashboard bawaan awal project kamu agar tidak error
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // Halaman Utama Dashboard Baru (SB Admin 2) sesuai modul
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD Resource dari modul untuk Pengguna, Kategori, Berita, & Tag
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/categories', CategoryController::class);
    Route::resource('/admin/articles', ArticleController::class);
    Route::resource('/admin/tags', TagController::class);

    // 2. TAMBAHKAN RUTE PROFIL DI SINI
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
});


/*
|--------------------------------------------------------------------------
| 3. Sistem Autentikasi Utama Project Kamu
|--------------------------------------------------------------------------
| PENTING: Baris ini wajib dipertahankan untuk menggantikan 'Auth::routes()' 
| milik modul agar fitur login dan register sistem kamu tetap bekerja.
*/
require __DIR__ . '/auth.php';