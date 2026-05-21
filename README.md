# Website Generate dan Cetak Ijazah Simulasi

Aplikasi sederhana berbasis Laravel untuk membuat, mengedit, melihat pratinjau, mencetak via browser, serta mengekspor ijazah simulasi (penelitian) ke dalam format PDF menggunakan DomPDF. Database yang digunakan adalah SQLite.

## Persyaratan Sistem
- PHP >= 8.2
- Composer
- Node.js & NPM

## Cara Instalasi & Menjalankan Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek di komputer lokal Anda:

1. **Instal Dependensi PHP (Composer)**
   ```bash
   composer install
   ```

2. **Instal Dependensi Frontend (NPM)**
   ```bash
   npm install
   ```

3. **Jalankan Vite Development Server**
   ```bash
   npm run dev
   ```

4. **Jalankan Migrasi Database SQLite**
   Pastikan file database `database/database.sqlite` sudah ada (jika belum, buat file kosong dengan nama tersebut).
   Lalu jalankan perintah berikut untuk membuat tabel:
   ```bash
   php artisan migrate
   ```

5. **Jalankan Server Lokal Laravel**
   ```bash
   php artisan serve
   ```
   Setelah server aktif, buka link `http://127.0.0.1:8000` di web browser Anda.

## Stack Teknologi
- **Framework**: Laravel 11/12
- **Template Engine**: Blade
- **Database**: SQLite
- **CSS Framework**: Tailwind CSS (melalui CDN)
- **PDF Generator**: Barryvdh Laravel DomPDF (DomPDF)
