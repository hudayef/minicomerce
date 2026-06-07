# Release Notes

## Versi 0.1.0-alpha (Initial Blueprint)

**Tanggal Rilis**: *(Belum dipublikasikan resmi)*

### Ringkasan
Ini adalah rilis purwarupa dari aplikasi E-Commerce. Fokus dari rilis ini adalah penetapan struktur dan pendokumentasian dasar agar pengembangan lebih lanjut (seperti UI, Database, dan API) dapat dilakukan secara terarah.

### Fitur Baru
*   **Implementasi Model Inti**: Model `Product` telah dibuat untuk representasi abstraksi entitas barang/katalog.
*   **Service Layer Kalkulasi**: Logika perhitungan harga melalui `CartService`.
*   **Pondasi Pengujian (Testing)**: Integrasi menggunakan PHPUnit untuk memastikan bahwa logika aplikasi selalu bisa diuji secara terisolasi.

### Catatan Penting
*   **Database dan UI**: Modul ini sepenuhnya terisolasi dan belum terhubung ke media persisten (seperti MySQL) maupun antarmuka pengguna manapun. Semua dependensi data direpresentasikan melalui data simulasi pada saat Testing.
*   **Dokumentasi**: Di rilis ini kami menyajikan manual pengembang, administrasi, DevOps, dan produk yang akan memandu alur integrasi masa depan.
