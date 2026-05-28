# 📰 Web Berita Admin Panel — Praktikum 15 & Mandiri

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge\&logo=laravel)](https://laravel.com)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-15-4169E1?style=for-the-badge\&logo=postgresql)](https://www.postgresql.org)
[![Laravel Sail](https://img.shields.io/badge/Laravel%20Sail-Docker-09D426?style=for-the-badge\&logo=docker)](https://laravel.com/docs/sail)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.6-563D7C?style=for-the-badge\&logo=bootstrap)](https://getbootstrap.com)

Repository ini merupakan pengembangan lengkap dari sistem **CMS Web Berita** berbasis Laravel.
Proyek ini dikembangkan sebagai bagian dari praktikum **Pemrograman Web Berbasis Framework** dengan implementasi relasi database, manajemen media, dan tampilan admin responsif.

---

# 🚀 Fitur Utama Sistem

Selain fitur dasar CRUD, sistem ini mendukung kebutuhan pengelolaan berita modern:

## ✍️ 1. Manajemen Profil Penulis (One-to-One)

* Relasi Eloquent antara tabel `users` dan `profiles`
* Admin/Penulis dapat:

  * Mengubah nama
  * Mengubah nomor telepon
  * Mengubah biografi
* Informasi profil tampil otomatis pada halaman detail berita publik

---

## 🏷️ 2. Sistem Tagging (Many-to-Many)

* Menggunakan pivot table `article_tag`
* Satu artikel dapat memiliki banyak tag
* Implementasi `sync()` Laravel untuk sinkronisasi tag saat edit artikel

---

## 🛡️ 3. Keamanan & Integrasi Media

* Penghapusan gambar otomatis menggunakan:

```php
Storage::disk('public')->delete($article->image);
```

* Mendukung `storage:link`
* Menjaga integritas file saat data berita dihapus

---

## 🖼️ 4. Tampilan Publik & Admin Responsif

### Frontend Publik

* Halaman detail berita:

  * `/berita/{slug}`
* Menampilkan:

  * gambar cover responsif
  * kategori
  * tag
  * informasi penulis

### Dashboard Admin

* Sidebar modern
* Smart Avatar menggunakan UI-Avatars
* Responsive layout berbasis Bootstrap 4

---

# 📂 Struktur Proyek

```text
web_beritav2/
├── app/
│   ├── Http/Controllers/
│   │   ├── ArticleController.php
│   │   ├── ProfileController.php
│   │   └── TagController.php
│   │
│   └── Models/
│       ├── Article.php
│       ├── Profile.php
│       └── Tag.php
│
├── resources/views/
│   ├── admin/
│   │   ├── profile/
│   │   ├── tags/
│   │   └── articles/
│   │
│   └── user/
│       └── berita/
│           └── show.blade.php
│
└── storage/app/public/articles/
```

---

# 🛠️ Instalasi Project (Laravel Sail)

## 1. Clone Repository

```bash
git clone https://github.com/Roouuff/web_beritav2.git
cd web_beritav2
```

---

## 2. Install Dependency

```bash
composer install
cp .env.example .env
```

---

## 3. Jalankan Docker Sail

```bash
./vendor/bin/sail up -d
```

---

## 4. Setup Laravel

```bash
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail artisan storage:link
```

---

# 🌐 Akses Aplikasi

```text
http://localhost
```

atau:

```text
http://127.0.0.1
```

---

# 🧪 Teknologi yang Digunakan

* Laravel 12
* PostgreSQL
* Laravel Sail (Docker)
* Bootstrap 4
* Blade Template Engine
* Eloquent ORM

---

# 📝 Tujuan Pembelajaran

Project ini dibuat untuk mempelajari:

* Relasi database:

  * One-to-One
  * Many-to-Many
* Upload & manajemen file Laravel
* CRUD berbasis MVC
* Dynamic UI menggunakan Blade
* Pengelolaan media dan keamanan file server

---

# 📜 Lisensi Akademik

Project ini digunakan untuk kebutuhan akademik dan praktikum mata kuliah:

**Pemrograman Web Berbasis Framework**
Tahun Akademik 2025/2026

Penggunaan dan modifikasi untuk pembelajaran diperbolehkan dengan tetap menjaga atribusi sumber.

---

© 2026 — Laravel Web Berita Project
