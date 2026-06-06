# Developer Handbook: MiniCommerce Platform

## 1. Pendahuluan
Dokumen ini adalah panduan utama bagi developer yang baru bergabung dengan proyek MiniCommerce. Platform ini dibangun menggunakan **PHP 8.3 Native** tanpa framework besar untuk menjaga kesederhanaan dan mempermudah deployment di Shared Hosting.

## 2. Arsitektur Proyek
MiniCommerce menggunakan arsitektur **Modular Monolith** dengan pola desain:
* **MVC (Model-View-Controller)**
* **Service Layer**
* **Repository Pattern**

### 2.1 Alur Request
1. **Routing:** Request masuk ke `public/index.php`, kemudian diproses oleh `routes/Router.php` dan dicocokkan dengan definisi rute di `routes/web.php`.
2. **Middleware:** Sebelum masuk ke Controller, request dapat dicegat oleh Middleware (misal: `AuthMiddleware`, `CsrfMiddleware`) yang berada di `app/middlewares/`.
3. **Controller:** Controller (`app/controllers/`) memvalidasi request dasar dan memanggil Service.
4. **Service:** Service (`app/services/`) berisi inti logika bisnis. Jika perlu berinteraksi dengan database, Service memanggil Repository.
5. **Repository:** Repository (`app/repositories/`) menjalankan raw SQL via PDO. PDO Instance dikelola secara Singleton di `config/Database.php`.
6. **Model/Entity:** Hasil query di-mapping ke Model (`app/models/`).
7. **View:** Controller memanggil method `view()` dari Base Controller dan menampilkan HTML (`resources/views/`).

## 3. Aturan Main & Clean Code (Wajib Dipatuhi)
1. **Maintainability > Abstraction:** Jika abstraksi membuat kode sulit dibaca oleh developer junior, jangan gunakan abstraksi tersebut. Kita berpegang pada KISS (Keep It Simple, Stupid).
2. **SOLID & DRY:** Hindari kode berulang (copy-paste). Ekstrak logika umum ke dalam helper atau service terpisah.
3. **Routing:** Jangan pernah menaruh logika query atau logika bisnis di dalam `routes/web.php`. Semua rute harus mengarah ke Controller.
4. **Penamaan:**
   * Controller: `[Name]Controller`
   * Service: `[Name]Service`
   * Repository: `[Name]Repository`
   * Middleware: `[Name]Middleware`

## 4. Struktur UI / Frontend
* **Styling:** Menggunakan **Tailwind CSS via CDN**. Tidak ada build step NPM (Node.js).
* **Komponen:** Seluruh HTML harus menggunakan utility classes Tailwind.
* **Aturan Desain:** Dilarang menggunakan *border* tebal, gunakan shadow ringan (`shadow-sm`), rounded corner (`rounded-[16px]`), dan white-space luas (SaaS Modern Style).

## 5. Keamanan
* Setiap form POST **wajib** menyertakan `<input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'] ?? ''); ?>">`.
* Semua rute POST/PUT/DELETE wajib dilindungi oleh `CsrfMiddleware`.
* Semua query database yang menerima input user **wajib** menggunakan *Prepared Statements* (PDO `bindParam()`).

## 6. Testing
Pengujian dilakukan menggunakan **PHPUnit**.
* Lokasi test: `tests/`
* Menjalankan test: `./vendor/bin/phpunit tests/`
* Tulis unit test untuk logika-logika kritis di dalam *Service Layer*.

---
*Happy Coding!* - *Principal Software Architect*
