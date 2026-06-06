# Testing Documentation

Proyek ini telah memiliki konfigurasi awal untuk menjalankan unit testing menggunakan PHPUnit.

## Unit Testing
Konfigurasi unit test berada di file `phpunit.xml`.
Saat ini, terdapat *test cases* yang menangani validasi fitur yang sudah diimplementasikan:

1.  **ProductTest** (`tests/ProductTest.php`)
    Menguji bahwa entitas `Product` (`app/models/Product.php`) mampu mengembalikan hasil seperti properti *price* yang terformat dengan baik dan menghasilkan URL gambar dengan tepat.
2.  **CartServiceTest** (`tests/CartServiceTest.php`)
    Menguji bahwa logika layanan `CartService` (`app/services/CartService.php`) berjalan akurat, seperti kalkulasi total harga pada keranjang yang diisi barang dengan jumlah kuantitas (*quantity*) yang spesifik.

### Menjalankan Test
Gunakan command di bawah ini dari *root directory* proyek:
```bash
./vendor/bin/phpunit tests
```

## Integration Testing
*(Status: Not Implemented / Planned)*
Tidak ada Integration Tests yang mengecek alur integrasi dari Database/External service ke dalam aplikasi karena belum ada database nyata yang tersedia.

## E2E (End-to-End) Testing
*(Status: Not Implemented / Planned)*
Tidak ada skrip E2E test (seperti Cypress atau Selenium) karena bagian antarmuka pengguna belum dibangun.

## Test Coverage Report
Proyek ini menargetkan pencapaian **80% Code Coverage**.
Karena aplikasi saat ini hanya memuat 2 file logika (`Product.php` & `CartService.php`) dan keduanya telah memiliki test padanan di dalam folder `tests/`, maka basis *coverage* awal sudah cukup optimal.

## Manual Testing Checklist
*(Status: Not Implemented / Planned)*
Tidak ada dokumen formal untuk ceklist tes manual. Disarankan melakukan validasi *unit tests* via PHPUnit.
