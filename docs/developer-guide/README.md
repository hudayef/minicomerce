# Developer Guide

Panduan ini ditujukan bagi pengembang yang ingin berkontribusi pada proyek ini.

## Setup Development Environment

1.  **Kebutuhan Sistem**:
    *   PHP versi >= 8.3
    *   Composer
2.  **Langkah Instalasi**:
    *   Clone repositori.
    *   Jalankan perintah berikut untuk menginstal dependensi (saat ini hanya untuk PHPUnit):
        ```bash
        composer install
        ```
    *   Copy file template environment:
        ```bash
        cp .env.example .env
        ```
3.  **Menjalankan Local Server (Future Use)**:
    Jika nanti ada file entry point (seperti `public/index.php`), gunakan perintah:
    ```bash
    php -S localhost:8000 -t public
    ```

## Coding Standards

*   **Prinsip Utama**: Readability > Maintainability > Simplicity.
*   **Paradigma**: Mengikuti SOLID, DRY (Don't Repeat Yourself), dan KISS (Keep It Simple, Stupid).
*   **Format**: Menggunakan native PHP tanpa framework berat. Diharapkan mengikuti standar PSR-12.
*   **Praktik Terbaik**:
    *   Hindari fungsi yang terlalu panjang.
    *   Hindari percabangan kondisi (*nesting*) yang terlalu dalam.
    *   Hindari penulisan *hardcoded values* dan *magic numbers*.

## Branching Strategy
*(Status: Belum ada aturan ketat. Direkomendasikan menggunakan Git Flow standar: `main` untuk rilis produksi dan branch fitur terpisah untuk pengembangan baru)*

## Git Workflow
1.  Buat branch baru dari `main` (misal: `feature/cart-update`).
2.  Lakukan perubahan dan pastikan unit test berjalan sukses.
3.  Lakukan commit dengan pesan yang jelas.
4.  Push ke repositori jarak jauh dan buat Pull Request.

## Testing Workflow
Proyek ini sangat mengedepankan pengujian. Framework yang digunakan adalah **PHPUnit**.

*   Menjalankan seluruh test:
    ```bash
    ./vendor/bin/phpunit tests
    ```
*   Diharapkan seluruh logika bisnis baru disertai dengan pengujian (Unit Test) dengan target **80% Code Coverage**.

## Build Workflow
*(Status: Not Implemented / Planned)*
Tidak ada proses build (seperti Webpack/Vite) saat ini karena proyek direncanakan menggunakan pendekatan frontend minimal (Tailwind CDN, vanilla JS).

## Release & Deployment Workflow
*(Status: Not Implemented / Planned)*
Saat ini belum ada mekanisme rilis otomatis (CI/CD pipeline) maupun skrip deployment ke server produksi.
