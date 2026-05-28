````markdown
# 📰 Web Berita Admin Panel — Praktikum 15 & Mandiri

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-15-4169E1?style=for-the-badge&logo=postgresql)](https://www.postgresql.org)
[![Docker Sail](https://img.shields.io/badge/Laravel%20Sail-Docker-09D426?style=for-the-badge&logo=docker)](https://laravel.com/docs/11.x/sail)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.6-563D7C?style=for-the-badge&logo=bootstrap)](https://getbootstrap.com)

Repository ini merupakan pengembangan lengkap dari sistem **CMS Web Berita**. Proyek ini telah melalui tahap pengembangan fitur mandiri yang mencakup manajemen profil penulis, sistem _tagging_ relasional, dan keamanan penyimpanan berkas.

---

## 🚀 Fitur Utama Sistem

Selain fitur dasar CRUD, proyek ini kini mendukung kebutuhan operasional berita tingkat lanjut:

### 1. ✍️ Manajemen Profil Penulis (One-to-One)

- **Relasi Eloquent:** Integrasi penuh antara tabel `users` dan `profiles`.
- **Edit Profil:** Admin/Penulis dapat memperbarui Nama, Nomor Telepon, dan Biografi secara langsung yang akan tampil secara dinamis pada halaman detail artikel publik.

### 2. 🏷️ Sistem Tagging (Many-to-Many)

- **Pivot Table:** Menggunakan tabel `article_tag` untuk menghubungkan artikel dengan banyak kategori tag.
- **Dynamic Syncing:** Implementasi metode `sync()` untuk sinkronisasi tag saat proses edit data berita.

### 3. 🛡️ Keamanan & Integrasi Media

- **File Integrity:** Implementasi `Storage::disk('public')->delete()` untuk memastikan setiap penghapusan data berita secara otomatis menghapus file gambar fisik di server.
- **Symlink Support:** Integrasi dengan `storage:link` untuk akses gambar yang efisien.

### 4. 🖼️ Tampilan Publik & Admin Responsif

- **Frontend Detail Page:** Halaman publik `/berita/{slug}` yang estetik, menampilkan gambar sampul (`img-fluid`), metadata kategori/tag, dan kotak informasi penulis lengkap.
- **Smart Avatar:** Integrasi UI-Avatars untuk profil penulis di sidebar admin agar tampilan selalu profesional.

---

## 📂 Struktur Proyek

```text
praktikum-15/
├── app/
│   ├── Http/Controllers/
│   │   ├── ArticleController.php   ← Hapus berkas & Eager Loading
│   │   ├── ProfileController.php   ← Edit profil (One-to-One)
│   │   └── TagController.php       ← Manajemen Tagging
│   └── Models/
│       ├── Article.php             ← Relasi Many-to-Many (Tags)
│       └── Profile.php             ← Relasi One-to-One (User)
├── resources/views/
│   ├── admin/
│   │   ├── profiles/               ← Form edit profil
│   │   ├── articles/               ← Detail berita & form
│   │   └── tags/                   ← Kelola tag
│   └── public/
│       └── show.blade.php          ← Halaman detail berita publik
└── storage/app/public/articles/    ← Penyimpanan fisik gambar
```
````

---

## 🛠️ Instalasi (Environment Laravel Sail)

**1. Clone & Install**

```bash
git clone <url-repository>
cd praktikum-11
composer install
cp .env.example .env

```

**2. Jalankan Sail & Setup**

```bash
# Pastikan Docker Desktop berjalan
./vendor/bin/sail up -d

# Generate key & migrasi
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail artisan storage:link

```

Akses aplikasi pada: **`http://localhost:8080`**

---

## 📝 Lisensi & Penggunaan Akademik

Proyek ini dikembangkan untuk kebutuhan praktikum **Pemrograman Web Berbasis Framework** (2025/2026).

**Tujuan Penggunaan:**

- Implementasi relasi database (One-to-One & Many-to-Many).
- Praktek keamanan file pada sistem penyimpanan server.
- Pengembangan antarmuka pengguna berbasis _Dynamic Data_.

Hak cipta dilindungi sesuai ketentuan tugas praktikum. Modifikasi untuk kepentingan edukasi diperbolehkan dengan tetap menjaga etika atribusi.

© 2026 — **Praktikum Pemrograman Web Berbasis Framework** | **Laravel 12** & **PostgreSQL**

```

```
