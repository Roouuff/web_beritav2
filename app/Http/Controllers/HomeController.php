<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // 1. Tambahkan baris ini untuk memanggil Model Article

class HomeController extends Controller
{
    /**
     * Tampilkan halaman home publik.
     */
    public function index()
    {
        return view('public.home');
    }

    /**
     * Tampilkan halaman dashboard admin (butuh login).
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Tampilkan halaman detail berita (publik).
     */
    public function showArticle($slug)
    {
        // Cari berita berdasarkan slug. 
        // Eager load data relasinya: kategori, penulis, profil penulis, dan tag.
        // firstOrFail() akan otomatis memunculkan error 404 jika berita tidak ditemukan.
        $article = Article::with(['category', 'user.profile', 'tags'])
                          ->where('slug', $slug)
                          ->firstOrFail();

        // Lempar data ke view publik
        return view('user.berita.show', compact('article'));
    }
}