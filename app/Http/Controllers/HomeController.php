<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}