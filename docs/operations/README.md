# Maintenance Guide & SOP Operasional

> **Status Saat Ini:** Karena sistem masih dalam tahap Proof of Concept / struktur dasar pengembangan, belum ada skrip operasional server maupun panduan pemeliharaan yang terimplementasi secara aktif.

Dokumen ini memuat prosedur standar operasional (SOP) untuk rencana pengelolaan di masa mendatang (Future Design).

## SOP Operasional

### Startup Procedure
*(Status: Not Implemented / Planned)*
*   Rencana: Memulai layanan PHP-FPM, web server (Nginx/Apache), dan sistem database MySQL.

### Shutdown Procedure
*(Status: Not Implemented / Planned)*
*   Rencana: Mematikan layanan secara gracefully untuk mencegah kehilangan transaksional pada proses belanja pengguna.

### Maintenance Procedure
*(Status: Not Implemented / Planned)*
*   Rencana: Menampilkan laman *Maintenance* kepada pengguna melalui konfigurasi reverse proxy atau flag dalam database.

### Incident Handling
*(Status: Not Implemented / Planned)*
*   Prosedur mitigasi error yang saat ini dapat dilakukan hanya sebatas membaca log aplikasi/server.

### Disaster Recovery
*(Status: Not Implemented / Planned)*
*   Rencana: Menggunakan *snapshot* backup data server atau database dari provider layanan.

## Maintenance Guide

### Update Procedure
Bagi pihak developer lokal, perbarui perubahan dari repositori dengan perintah:
```bash
git pull origin main
composer install
```

### Migration Procedure
*(Status: Not Implemented / Planned)*
Manajemen *schema* database dengan script *up/down* belum terimplementasi.

### Backup Procedure & Recovery Procedure
*(Status: Not Implemented / Planned)*
Belum ada instruksi pembuatan salinan *database* mapun file *storage* unggahan pengguna karena fitur ini belum dirilis.
