# Security Documentation

> **Status Saat Ini:** Seluruh fitur keamanan (Authentication, Authorization, dsb) **belum diimplementasikan** pada aplikasi karena baru berupa kerangka Model dan Service dasar.

Dokumentasi ini berisi kerangka rencana (Future Design) untuk aspek keamanan sistem.

## Authentication Flow
*(Status: Not Implemented / Planned)*
Rencana implementasi di masa mendatang:
1.  Pengguna memberikan kredensial (email/password).
2.  Sistem memvalidasi dari database.
3.  Penerbitan JWT Token (jika API-based) atau Cookie Session (jika Monolith berbasis View).

## Authorization Flow
*(Status: Not Implemented / Planned)*
Rencana penggunaan Middleware kustom pada *Router* untuk mengecek akses pengguna sebelum mengakses layanan (Contoh Middleware: `AuthMiddleware`, `GuestMiddleware`).

## RBAC (Role-Based Access Control)
*(Status: Not Implemented / Planned)*
Akan ada pemisahan entitas pengguna dasar, misalnya:
*   `Customer`: Akses ke fitur pemesanan dan profil.
*   `Administrator`: Akses penuh ke manajemen sistem.

## Security Controls
*(Status: Not Implemented / Planned)*
Belum ada implementasi untuk:
*   Rate Limiting
*   CORS Configuration
*   Input Validation & Sanitization

## Encryption
*(Status: Not Implemented / Planned)*
Kredensial pengguna rencananya akan menggunakan fungsi hashing bawaan PHP seperti `password_hash()` (algoritma BCRYPT).

## Secrets Management
Satu-satunya pengaturan yang direncanakan adalah menggunakan variabel environment. File `.env` ditambahkan ke `.gitignore` untuk mencegah tereksposnya konfigurasi rahasia.

## Vulnerability Management
*(Status: Not Implemented / Planned)*

## Security Best Practices (Acuan Pengembangan Ke Depan)
*   Lindungi dari SQL Injection dengan menggunakan mekanisme *Prepared Statements* via PDO.
*   Lindungi dari serangan XSS dengan fungsi lolosan *encoding output* (`htmlspecialchars()`).
*   Implementasi perlindungan CSRF (Cross-Site Request Forgery) pada *form submission*.
