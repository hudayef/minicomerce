# Product Documentation

## Product Overview
Proyek ini adalah prototipe aplikasi E-Commerce backend yang dibangun menggunakan native PHP 8.3 tanpa kerangka kerja (framework) yang berat. Saat ini aplikasi berisi model inti untuk katalog produk dan mekanisme dasar perhitungan layanan keranjang (*shopping cart*).

## Business Problem
*(Rencana Bisnis)*
Meningkatnya kompleksitas pemeliharaan akibat penggunaan framework besar. Banyak UKM atau sistem kecil yang membutuhkan solusi ringan, bersih, mudah dibaca, dan tidak menggunakan resource server yang terlalu banyak untuk menjalankan sistem E-Commerce mereka.

## Solution
Menghadirkan arsitektur Modular Monolith E-Commerce menggunakan PHP Native. Dengan pola desain Model-View-Controller (MVC) yang sederhana, sistem ini dikembangkan agar mudah diskalakan, mudah dipahami *developer* baru, dan meminimalisir *"vendor lock-in"*.

## Target User
*   **Pengguna Akhir (Customer)**: Melakukan browsing katalog produk, menambahkan barang ke keranjang, dan melakukan transaksi.
*   **Administrator**: Mengelola inventaris produk dan melihat pesanan.
*   **Developer**: Memelihara dan menambahkan fitur pada proyek.

## User Stories (Future Implementation)
*   *Sebagai Customer*, saya ingin melihat daftar katalog produk dengan informasinya (nama, harga, gambar) sehingga saya bisa memilih barang.
*   *Sebagai Customer*, saya ingin memasukkan barang ke keranjang belanja, agar sistem bisa mengakumulasi total harga. *(Sistem service untuk ini sudah dibuat, yakni `CartService`)*.
*   *Sebagai Administrator*, saya ingin masuk ke dashboard backend untuk menambah/mengurangi stok barang.

## Functional Requirements
*   **Tersedia (Implemented)**:
    *   Sistem mampu memproses perhitungan harga produk yang dipesan (kuantitas × harga).
    *   Sistem menyimpan format data (Model) dari sebuah entitas Produk.
*   **Direncanakan (Planned)**:
    *   Autentikasi Pengguna & Sesi (Session).
    *   Manajemen Inventaris / CRUD Produk.
    *   Check-out Pesanan.
    *   Integrasi Gateway Pembayaran.

## Non Functional Requirements
*   *Performa*: Tampilan aplikasi web yang cepat tanpa *render-blocking* berat.
*   *Simplicity*: Kode PHP mudah dipahami dan dikelola tanpa harus mempelajari layer abstraksi framework yang rumit.
*   *Reliability*: Logika bisnis vital harus ditutupi minimal dengan 80% cakupan (coverage) Unit Test menggunakan PHPUnit.
