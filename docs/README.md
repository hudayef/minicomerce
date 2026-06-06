# Proyek E-Commerce Minimalis

## Deskripsi Singkat
Proyek ini adalah sistem backend E-Commerce minimalis. Saat ini, aplikasi masih berada dalam tahap awal pengembangan (proof of concept) dengan hanya berisi struktur model data produk dan logika layanan keranjang belanja.

## Fitur Utama
*   **Katalog Produk**: Representasi data produk (Model `Product`).
*   **Keranjang Belanja**: Perhitungan total belanja berdasarkan item dalam keranjang (Service `CartService`).

*(Fitur lainnya seperti Checkout, User Management, Payment Gateway masih dalam status: Not Implemented / Planned)*

## Screenshot
*(Saat ini belum ada antarmuka pengguna/UI. Screenshot akan ditambahkan setelah UI dikembangkan. Status: Not Implemented / Planned)*

## Arsitektur Sistem
Sistem ini dirancang dengan pendekatan arsitektur **Modular Monolith** dengan pola **MVC (Model-View-Controller)** dikombinasikan dengan **Service Layer** dan **Repository Pattern**.

*   **Model**: Mengelola data (contoh: `app/models/Product.php`).
*   **Service**: Mengelola business logic (contoh: `app/services/CartService.php`).

Untuk detail lebih lanjut, lihat [Dokumentasi Arsitektur](architecture/README.md).

## Teknologi yang Digunakan
*   **Bahasa Pemrograman**: PHP 8.3 (Native)
*   **Testing**: PHPUnit (^12.5)
*   *(Komponen lain seperti HTML5, CSS3/Tailwind CDN, Javascript ES6, dan MySQL masuk ke dalam daftar requirement namun belum terimplementasi pada repositori saat ini)*

## Persyaratan Sistem
*   PHP >= 8.3
*   Composer (untuk manajemen dependensi dev)

## Instalasi Lokal
1.  Clone repositori ini.
    ```bash
    git clone <url-repo>
    cd <nama-folder>
    ```
2.  Install dependensi composer (saat ini hanya untuk PHPUnit).
    ```bash
    composer install
    ```

## Konfigurasi Environment
Saat ini belum ada variabel environment yang krusial untuk koneksi database. Namun, Anda dapat melihat panduan konfigurasi pada file `.env.example` di root directory. (lihat bagian *Environment Documentation*)

## Menjalankan Aplikasi
Saat ini belum ada entrypoint utama seperti `index.php` atau router. Jika file tersebut ditambahkan, Anda dapat menggunakan local development server PHP:
```bash
php -S localhost:8000 -t public
```

## Build Production
Tidak diperlukan proses build (seperti Vite/Webpack) karena proyek ini direncanakan hanya menggunakan Tailwind CSS via CDN dan vanilla JS.

## Deployment
*(Belum ada pipeline atau script deployment spesifik. Lihat [Dokumentasi Deployment](deployment/README.md) untuk roadmap. Status: Not Implemented / Planned)*

## Struktur Folder
```
/
├── app/
│   ├── models/       # Representasi data (Product)
│   └── services/     # Business logic (CartService)
├── docs/             # Dokumentasi proyek
├── tests/            # Unit testing (PHPUnit)
├── .env.example      # Placeholder environment variables
├── composer.json     # Manajemen dependensi
└── phpunit.xml       # Konfigurasi testing
```

## API Overview
*(API Endpoint belum diimplementasikan. Status: Not Implemented / Planned)*
Lihat [Dokumentasi API](api/README.md).

## Database Overview
*(Database dan tabel belum diimplementasikan. Status: Not Implemented / Planned)*
Lihat [Dokumentasi Database](database/README.md).

## FAQ
*   **Q: Apakah aplikasi sudah bisa digunakan?**
    A: Belum. Saat ini aplikasi hanya memuat struktur inti (model dan service) untuk perhitungan sederhana.
*   **Q: Database apa yang digunakan?**
    A: Rencananya akan menggunakan MySQL dengan PDO, namun saat ini belum diimplementasikan.

## Troubleshooting
*   **Error pada PHPUnit**: Pastikan versi PHP yang digunakan adalah 8.3 dan `composer install` sudah dijalankan dengan sukses.

## Contributing Guide
Silakan rujuk ke [Developer Guide](developer-guide/README.md) untuk panduan standar penulisan kode, branching strategy, dan testing workflow.

## License
*(Dokumen lisensi belum ditentukan)*
