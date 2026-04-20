# 🎓 Aplikasi Kuisioner - Universitas Maritim Raja Ali Haji

[![Laravel](https://img.shields.io/badge/Laravel-11.x-red?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-blue?style=flat-square&logo=php)](https://www.php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-blue?style=flat-square&logo=mysql)](https://www.mysql.com)
[![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)

Sistem aplikasi kuisioner terintegrasi untuk Universitas Maritim Raja Ali Haji yang memfasilitasi pengumpulan feedback dan evaluasi pembelajaran dari mahasiswa secara terstruktur dan efisien.

## 📸 Features

### ✨ Fitur Utama
- **🔐 Sistem Autentikasi Multi-Role** - Admin, Kaprodi, Pimpinan, dan Mahasiswa
- **📋 Manajemen Kuisioner** - Kelola periode, pertanyaan, dan pilihan jawaban
- **📊 Dashboard Analytics** - Visualisasi data dan laporan hasil kuisioner
- **👥 Manajemen Data Master** - Fakultas, jurusan, prodi, dan mahasiswa
- **📱 Responsive Design** - Aksesibel dari berbagai perangkat
- **🔒 Keamanan Data** - Input validation, password encryption, authorization checks
- **📈 Pelaporan Komprehensif** - Generate laporan per prodi, fakultas, atau periode

### 🎯 Peran Pengguna

| Role | Deskripsi |
|------|-----------|
| **Admin** | Mengelola semua data master (Fakultas, Jurusan, Prodi, Mahasiswa, User) |
| **Kaprodi** | Mengelola periode kuisioner, pertanyaan, dan melihat hasil jawaban |
| **Pimpinan** | Melihat summary dan laporan dari semua prodi di fakultas |
| **Mahasiswa** | Mengisi kuisioner yang tersedia sesuai program studi mereka |

---

## 🚀 Quick Start

### Prerequisites
- **PHP** 8.1 atau lebih tinggi
- **MySQL/MariaDB** 8.0 atau lebih tinggi
- **Composer** terbaru
- **Node.js** 14.x atau lebih tinggi
- **Laragon** (untuk Windows) atau XAMPP/LAMP

### Installation

#### 1. Clone/Download Project
```bash
cd c:\laragon\www\
# Project sudah ada di folder aplikasi-kuisioner
```

#### 2. Install Dependencies
```bash
cd aplikasi-kuisioner

# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

#### 3. Setup Environment File
```bash
# Copy .env.example ke .env (jika belum ada)
cp .env.example .env

# Generate application key
php artisan key:generate
```

#### 4. Setup Database

**Option A: Gunakan MySQL CLI (Recommended)**
```bash
# Buat database baru
mysql -u root -e "DROP DATABASE IF EXISTS aplikasi_kuisioner;"
mysql -u root -e "CREATE DATABASE aplikasi_kuisioner CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Jalankan migration dengan seed
php artisan migrate:fresh --seed
```

**Option B: Gunakan PhpMyAdmin**
1. Buka `http://localhost/phpmyadmin`
2. Login dan buat database baru bernama `aplikasi_kuisioner`
3. Jalankan `php artisan migrate:fresh --seed` di terminal

#### 5. Compile Assets
```bash
# Development mode
npm run dev

# Production mode
npm run build
```

#### 6. Generate Storage Link
```bash
php artisan storage:link
```

#### 7. Clear Cache
```bash
php artisan cache:clear
php artisan view:clear
php artisan config:clear
```

#### 8. Start Development Server

**Option A: Menggunakan Laragon**
```bash
# Cukup start Laragon, aplikasi tersedia di:
# http://localhost/aplikasi-kuisioner
```

**Option B: Menggunakan Artisan Serve**
```bash
php artisan serve
# Akses di http://localhost:8000
```

---

## 👤 Test Accounts

Setelah aplikasi berjalan, gunakan akun-akun berikut untuk login:

### Admin Account
```
Email: admin@admin.com
Password: admin
```

### Kaprodi Accounts
```
Email: kaprodi.ti@umrah.co.id
Password: kaprodi
(Teknik Informatika)

Email: kaprodi.tp@umrah.co.id
Password: kaprodi
(Teknik Perkapalan)
```

### Pimpinan Account
```
Email: pimpinan@umrah.co.id
Password: pimpinan
```

### Mahasiswa Account
```
Email: 2301020002@umrah.ac.id
Password: 2301020002
NIM: 2301020002
Nama: Rizqi Amanullah
```

---

## 📁 Project Structure

```
aplikasi-kuisioner/
├── app/
│   ├── Http/
│   │   ├── Controllers/     # Controller untuk setiap fitur
│   │   └── Middleware/      # Authentication & Authorization
│   └── Models/              # Eloquent Models
├── database/
│   ├── migrations/          # Schema database
│   └── seeders/             # Database seeders
├── resources/
│   ├── css/                 # Stylesheet
│   ├── js/                  # JavaScript files
│   └── views/               # Blade templates
│       ├── admin/           # Views untuk Admin
│       ├── kaprodi/         # Views untuk Kaprodi
│       ├── mahasiswa/       # Views untuk Mahasiswa
│       ├── pimpinan/        # Views untuk Pimpinan
│       ├── auth/            # Login & Auth views
│       └── landing.blade.php # Landing page
├── routes/
│   └── _2301020095_web.php  # Web routes
├── public/                  # Public assets
├── config/                  # Configuration files
└── storage/                 # Logs, cache, uploads
```

---

## 🔧 Key Technologies

| Technology | Purpose |
|-----------|---------|
| **Laravel 11** | Backend framework |
| **Blade** | Template engine |
| **Eloquent ORM** | Database abstraction |
| **Tailwind CSS** | Styling framework |
| **MySQL** | Database |
| **Vite** | Asset bundler |

---

## 📚 Documentation

Untuk informasi lebih lengkap, lihat file dokumentasi:
- [SETUPPROJECT.md](SETUPPROJECT.md) - Panduan setup lengkap
- [PERBEDAAN_LOGIN_VULNERABLE_VS_SECURE.md](PERBEDAAN_LOGIN_VULNERABLE_VS_SECURE.md) - Perbandingan keamanan login

---

## 🐛 Troubleshooting

### PHP Command Not Found
```powershell
# Gunakan full path ke PHP Laragon
$phpPath = Get-Item "C:\laragon\bin\php\php-*-Win32-vs16-x64\php.exe" | Select-Object -Last 1 -ExpandProperty FullName
& $phpPath artisan serve
```

### Database Connection Error
- Pastikan MySQL service sedang berjalan
- Verify `.env` file dengan `DB_HOST`, `DB_NAME`, `DB_USERNAME`, `DB_PASSWORD`
- Cek di PhpMyAdmin apakah database sudah terbuat

### Assets Not Loading
```bash
npm install
npm run dev
php artisan storage:link
```

### Duplicate Entry Error
```bash
php artisan migrate:fresh --seed
```

---

## 👥 Development Team

| Nama |
|------|
| Rizqi Amanullah |

---

## 📝 License

Project ini dibuat atas kebutuhan kuliah.

---

**Last Updated:** April 2025  
**Version:** 1.0.0
