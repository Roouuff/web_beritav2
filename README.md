Siaran langsung! Ini adalah isi lengkap file `README.md` yang sudah digabungkan dengan bagian **Lisensi & Penggunaan Akademik**.

Bagian penutupnya sudah saya sesuaikan dengan teknologi asli yang kamu gunakan di proyek ini (yaitu menggunakan **PostgreSQL via Laravel Sail/Docker**, bukan MySQL, agar sinkron dengan file `.env` kamu).

Kamu tinggal klik tombol **"Copy"** di pojok kanan atas, lalu timpa seluruh isi file `README.md` lama di VS Code-mu.

```markdown
# 📰 Web Berita Admin Panel — Praktikum 11 (Pemrograman Web)

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-15-4169E1?style=for-the-badge&logo=postgresql)](https://www.postgresql.org)
[![Docker Sail](https://img.shields.io/badge/Laravel%20Sail-Docker-09D426?style=for-the-badge&logo=docker)](https://laravel.com/docs/11.x/sail)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.6%20%2F%205-563D7C?style=for-the-badge&logo=bootstrap)](https://getbootstrap.com)

Repository ini merupakan hasil pengembangan sistem manajemen konten (**CMS Web Berita**) pada Praktikum 11. Proyek ini mengintegrasikan mesin templat **Blade**, sistem Autentikasi tradisional Laravel, kontrol keamanan database, dan modifikasi penuh pada templat **SB Admin 2** untuk menghasilkan dashboard panel admin yang dinamis dan aman.

---

## 🚀 Fitur Utama & Pembaruan Sistem

Aplikasi ini tidak hanya menerapkan dasar integrasi tampilan, melainkan sudah dilengkapi dengan logika bisnis (_business logic_) yang kokoh sesuai dengan rubrik evaluasi:

### 1. 🔐 Autentikasi & Proteksi Keamanan Akun

- **Sistem Auth Tradisional:** Menggunakan arsitektur controller bawaan (`LoginController`, `RegisterController`) untuk alur masuk dan keluar sistem yang stabile.
- **Password Hashing:** Semua kata sandi pengguna baru maupun perubahan sandi lama dienkripsi secara aman menggunakan `Hash::make()` sebelum masuk ke database.
- **Fitur Cegah Self-Delete:** Sistem memiliki keamanan berlapis pada `UserController` yang mendeteksi sesi aktif dan melarang keras Admin menghapus akunnya sendiri demi mencegah kegagalan hak akses sistem.

### 2. 🗂️ Manajemen Kategori dengan Slug Dinamis

- **Automated Slug Generation:** Mengintegrasikan library `Str::slug()` sehingga setiap pembuatan atau pembaruan nama kategori otomatis dikonversi menjadi URL yang ramah SEO.
- **Relational Integrity Protection:** Mekanisme pencegahan _error database constraint_ di mana kategori yang masih memiliki artikel terikat di dalamnya tidak akan diizinkan untuk dihapus.

### 3. ✍️ Manajemen Berita Menyeluruh (Relasional CRUD)

- **Eager Loading Optimization:** Penarikan data berita mengimplementasikan metode `Article::with(['category', 'user'])` untuk memangkas kueri database dan menghindari kendala performa _N+1 Query Problem_.
- **Validasi Ketat Tugas Mandiri:** Kolom judul berita dilindungi oleh aturan validasi `min:10|max:255` untuk memastikan kualitas judul artikel yang layak dipublikasikan.

### 4. 📊 Dashboard Ringkas & UX Informatif

- **3 Stats Card Dinamis:** Mengganti komponen bawaan template lama menjadi 3 kartu metrik utama yang terhubung langsung ke database: **Total Pengguna**, **Total Kategori**, dan **Total Berita**.
- **Unified Sidebar:** Integrasi navigasi terpadu berseragam bertuliskan **"WEB BERITA"** menggunakan komponen Bootstrap untuk kelancaran perpindahan halaman.

---

## 📂 Struktur Proyek Terkini
```

praktikum-11/
├── app/
│ ├── Http/
│ │ └── Controllers/
│ │ ├── Auth/
│ │ │ ├── LoginController.php
│ │ │ └── RegisterController.php
│ │ ├── ArticleController.php ← Validasi min:10 & Eager Loading
│ │ ├── CategoryController.php ← Auto Slug & Validasi Unique
│ │ ├── UserController.php ← Password Hashing & Anti Self-Delete
│ │ └── HomeController.php
│ └── Models/
│ ├── Article.php
│ ├── Category.php
│ └── User.php
├── resources/
│ └── views/
│ ├── layouts/
│ │ ├── admin.blade.php ← Layout SB Admin 2 ("WEB BERITA")
│ │ ├── app.blade.php ← Layout Publik
│ │ └── auth.blade.php ← Layout Sign-In/Sign-Up
│ ├── admin/
│ │ ├── dashboard.blade.php ← Komponen Tampilan 3 Card Utama
│ │ ├── articles/ ← Form & Tabel Berita
│ │ ├── categories/ ← Form & Tabel Kategori
│ │ └── users/ ← Form & Tabel Pengguna
│ └── public/
│ └── home.blade.php
├── routes/
│ └── web.php ← Mapping Route Panel Admin & Resource
└── public/
└── sbadmin2/ ← Komponen Aset Statis Template

````

---

## 🛣️ Pemetaan Route Panel

| Method | URI | Nama Route | Keterangan | Proteksi |
| :--- | :--- | :--- | :--- | :--- |
| **GET** | `/` | `home` | Halaman utama/Landing Page publik | Public |
| **GET** | `/admin/dashboard` | `admin.dashboard` | Dashboard statistik (3 Card Utama) | Middleware Auth |
| **GET/POST**| `/login` | `login` | Form dan Proses Masuk Akun | Middleware Guest |
| **POST** | `/logout` | `logout` | Keluar dari sistem panel | Middleware Auth |
| **CRUD** | `/admin/users` | `users.*` | Pengelolaan data pengguna (Admin) | Middleware Auth |
| **CRUD** | `/admin/categories` | `categories.*` | Pengelolaan data kategori berita | Middleware Auth |
| **CRUD** | `/admin/articles` | `articles.*` | Pengelolaan data artikel/berita | Middleware Auth |

---

## 🛠️ Langkah Instalasi & Cara Menjalankan

### Prasyarat Sistem
* Docker Desktop terpasang dan berjalan aktif.
* Composer (untuk instalasi dependensi awal).

### Langkah-Langkah

**1. Salin Repositori**
```bash
git clone [https://github.com/frizennwave/praktikum-11.git](https://github.com/frizennwave/praktikum-11.git)
cd praktikum-11

````

**2. Siapkan File Environment**

```bash
cp .env.example .env

```

**3. Pasang Dependensi PHP Vendor**

```bash
composer install

```

**4. Unduh & Setup Otomatis Komponen SB Admin 2**

```bash
chmod +x setup-sbadmin2.sh
./setup-sbadmin2.sh

```

**5. Nyalakan Lingkungan Docker (Laravel Sail)**

```bash
./vendor/bin/sail up -d

```

**6. Jalankan Enkripsi Key & Migrasi Database Relasional**

```bash
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate --seed

```

**7. Pembuatan Tautan Penyimpanan**

```bash
./vendor/bin/sail artisan storage:link

```

Akses aplikasi melalui peramban kesayangan Anda pada alamat: **`http://127.0.0.1:8080`** atau **`http://localhost:8080`**.

---

---

## 📝 Lisensi & Penggunaan Akademik

Proyek ini dikembangkan khusus untuk kebutuhan praktikum dan pembelajaran mata kuliah **Pemrograman Web Berbasis Framework** pada Tahun Ajaran **2025/2026**.

Seluruh _source code_ di dalam repositori ini dapat digunakan sebagai:

- Media pembelajaran dan referensi akademik tingkat lanjut.
- Bahan eksplorasi implementasi Laravel Eloquent ORM (Relasi Berita, Kategori, dan Pengguna).
- Contoh penerapan fitur keamanan _backend_ (Password Hashing dan Proteksi _Self-Delete_).
- Sarana pengembangan kemampuan arsitektur backend berbasis framework Laravel.

Diperbolehkan untuk memodifikasi, mempelajari, dan mengembangkan proyek ini lebih lanjut untuk kepentingan edukasi dengan tetap mencantumkan atribusi kepada pengembang asli.

© 2026 — **Praktikum Pemrograman Web Berbasis Framework** Dibangun menggunakan **Laravel 12** dan **PostgreSQL (via Laravel Sail)** untuk kebutuhan pembelajaran akademik.

```

```
