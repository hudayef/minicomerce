# Installation Guide: MiniCommerce Platform

## Persyaratan Sistem (System Requirements)
* PHP 8.3 atau lebih baru
* Ekstensi PHP: `pdo_mysql`, `mbstring`, `curl`, `json`
* MySQL 8.0+ atau MariaDB 10.4+
* Composer (hanya untuk environment development/testing)

## Langkah-langkah Instalasi Lokal

### 1. Clone Repository
```bash
git clone <url-repository> minicommerce
cd minicommerce
```

### 2. Setup Database
1. Buka aplikasi manajemen database Anda (phpMyAdmin, DBeaver, TablePlus, atau via terminal).
2. Buat database kosong bernama `minicommerce`:
   ```sql
   CREATE DATABASE minicommerce;
   ```
3. Eksekusi semua script DDL (tabel `users`, `products`, `orders`, `order_items`, `carts`) ke dalam database tersebut. Anda dapat menemukannya di dokumentasi atau file migrasi jika tersedia.

### 3. Konfigurasi Lingkungan
Buka file `config/app.php` dan pastikan kredensial database sudah sesuai dengan konfigurasi lokal Anda:
```php
'db' => [
    'host' => '127.0.0.1',
    'database' => 'minicommerce',
    'username' => 'root',
    'password' => '', // Ganti sesuai password lokal Anda
    'charset' => 'utf8mb4'
]
```

### 4. Instalasi Dependency (Hanya Development)
Jika Anda berencana menjalankan unit test atau berkontribusi pada pengembangan, jalankan Composer:
```bash
composer install
```
*(Catatan: Untuk production/shared hosting, dependency composer ini tidak wajib karena framework ini murni Native PHP).*

### 5. Menjalankan Aplikasi
Karena ini adalah proyek Native PHP, Anda dapat menggunakan built-in server PHP untuk pengembangan lokal:
```bash
php -S localhost:8000 -t public
```

### 6. Akses Aplikasi
Buka browser dan akses:
`http://localhost:8000`

### 7. Setup Admin (Opsional)
Untuk mengakses halaman admin (`/admin`), Anda perlu mengubah field `role` menjadi `admin` pada akun user di database Anda secara manual:
```sql
UPDATE users SET role = 'admin' WHERE email = 'email_anda@example.com';
```
