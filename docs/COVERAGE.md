# Documentation Coverage Report

Laporan ini memetakan kelengkapan dokumentasi terhadap *realita implementasi source code* di dalam proyek ini, serta kesesuaiannya dengan perencanaan sistem (Future Roadmap).

## Ringkasan Eksekutif
Aplikasi E-Commerce saat ini baru terdiri dari lapisan abstraksi Model (`Product`) dan Service (`CartService`). Banyak fitur operasional belum diterapkan dan secara jujur didokumentasikan dengan label `Not Implemented / Planned`.

## Status Dokumentasi per Kategori

| Kategori Dokumen | Status Implementasi | Status Dokumentasi | Keterangan |
| :--- | :--- | :--- | :--- |
| **README Utama** | Parsial (Model & Service) | Selesai | Menggambarkan secara presisi file dan modul yang tersedia (Product, CartService). File lain diberi marker placeholder. |
| **Arsitektur Sistem** | Parsial | Selesai | Menampilkan diagram Mermaid untuk sistem saat ini (`Product` -> `CartService`) dan kerangka MVC untuk *roadmap* ke depannya. |
| **Database** | Belum Diimplementasikan | Selesai (Rencana) | Disediakan diagram relasi ERD awal untuk entitas Produk dan rancangan tipe data di MySQL. |
| **API API** | Belum Diimplementasikan | Selesai (Rencana) | Disediakan spesifikasi rancangan *endpoint* (GET Product, POST Calculate) namun belum diimplementasikan dengan kode REST API nyata. |
| **Developer Guide** | Selesai | Selesai | Cukup solid. Memberikan instruksi spesifik untuk mengoperasikan struktur terkini beserta acuan standar untuk kode. |
| **User & Admin Manual**| Belum Diimplementasikan | Selesai (Rencana) | Fitur login, dashboard, dan UI tidak ada. Ditandai transparan dengan status `Not Implemented`. |
| **Security Docs** | Belum Diimplementasikan | Selesai (Rencana) | Menjelaskan rencana kontrol *RBAC*, *Authentication*, namun mengakui belum ada integrasi keamanan dalam repositori ini. |
| **DevOps & Deployment** | Belum Diimplementasikan | Selesai (Rencana) | Penjabaran spesifik untuk target server dan CI/CD tidak disematkan di level eksekusi teknis (misal Dockerfile belum ada). |
| **Testing Guide** | Selesai | Selesai | Mengakomodir referensi test PHPUnit yang sepenuhnya riil/nyata yang digunakan pada source code saat ini (`ProductTest`, `CartServiceTest`). |
| **Maintenance & SOP** | Belum Diimplementasikan | Selesai (Rencana) | SOP disiapkan, dengan pencatatan bahwa infrastruktur untuk itu belum di-setup di lingkungan pengembangan maupun production. |
| **Product Overview** | Selesai | Selesai | Melingkupi *User Stories*, *Business Problem* yang secara jujur mengacu pada kondisi proyek sebagai POC (*Proof of Concept*). |

## Area yang Memerlukan Dokumentasi Tambahan
Berdasarkan kondisi saat ini, dokumentasi harus diperbarui secara masif saat implementasi berikut dilakukan:
1.  **Pengembangan Router & Controllers:** Perlu ditambahkan di dokumentasi API ketika antarmuka HTTP dan Web-Router mulai di-merge ke branch utama.
2.  **Pembuatan UI (User Interface):** Setelah Views selesai, screenshot harus diisi di README utama, User Manual, dan panduan fitur.
3.  **Implementasi Skema Database (Migration Files):** Relasi tabel dan panduan migrasi aktual perlu dimasukkan ke dalam `docs/database/README.md`.
4.  **Integrasi Pipeline CI/CD:** Menyertakan bukti alur kerja *GitHub Actions/GitLab CI* ke bagian dokumentasi DevOps.
