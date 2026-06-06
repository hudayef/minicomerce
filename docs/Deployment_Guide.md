# Deployment Guide: MiniCommerce Platform

MiniCommerce dirancang untuk sangat ringan sehingga bisa di-deploy dengan mudah di **Shared Hosting** (cPanel/DirectAdmin) maupun **VPS** kecil tanpa perlu proses *build* yang kompleks (tanpa Node.js, Webpack, dsb).

## A. Deployment ke Shared Hosting (cPanel)

### Langkah 1: Persiapan File
Karena kita tidak memiliki file *build* frontend, Anda cukup melakukan kompresi (ZIP) seluruh folder proyek Anda, **kecuali**:
* Folder `.git/`
* Folder `tests/`
* Folder `vendor/` (kecuali jika Anda memerlukan autoloader dari composer, namun untuk arsitektur saat ini tidak wajib untuk *runtime* produksi).

### Langkah 2: Upload File
1. Login ke cPanel.
2. Buka **File Manager**.
3. Di Shared Hosting, *Document Root* biasanya adalah `public_html`. Agar aman dan rapi:
   * Upload dan ekstrak ZIP proyek Anda ke sebuah folder di *luar* `public_html`, misalnya: `/home/username/minicommerce_app/`.
   * Pindahkan atau *copy* SELURUH isi dari folder `/public` proyek Anda ke dalam folder `public_html` di cPanel.
4. Buka file `index.php` yang sekarang berada di `public_html`.
5. Ubah *path require* di dalamnya agar mengarah ke folder aplikasi Anda yang berada di luar `public_html`. Contoh:
   ```php
   // Sebelumnya: require_once __DIR__ . '/../routes/Router.php';
   require_once __DIR__ . '/../minicommerce_app/routes/Router.php';
   require_once __DIR__ . '/../minicommerce_app/app/helpers/CsrfHelper.php';
   // ... sesuaikan path lainnya.
   ```

### Langkah 3: Setup Database
1. Buka **MySQL Databases** di cPanel, buat Database dan User baru.
2. Berikan "All Privileges" kepada user terhadap database tersebut.
3. Buka **phpMyAdmin** dan Import struktur tabel dari *Phase 3* atau backup SQL lokal Anda.
4. Buka file konfigurasi di `/home/username/minicommerce_app/config/app.php` dan sesuaikan kredensial dengan database cPanel Anda.

---

## B. Deployment ke VPS (Nginx / Apache)

### Langkah 1: Clone & Setup
1. SSH ke VPS Anda.
2. `git clone` proyek Anda ke `/var/www/minicommerce`.
3. Set *ownership* ke *web server user* (misal Nginx):
   ```bash
   sudo chown -R www-data:www-data /var/www/minicommerce
   ```

### Langkah 2: Konfigurasi Nginx (Contoh)
Buat konfigurasi *server block* baru: `/etc/nginx/sites-available/minicommerce`

```nginx
server {
    listen 80;
    server_name domainanda.com;

    # Arahkan root langsung ke folder public/
    root /var/www/minicommerce/public;
    index index.php index.html index.htm;

    location / {
        # Semua request diarahkan ke index.php (Front Controller)
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock; # Sesuaikan versi PHP
    }

    location ~ /\.ht {
        deny all;
    }
}
```

1. Aktifkan: `sudo ln -s /etc/nginx/sites-available/minicommerce /etc/nginx/sites-enabled/`
2. Test konfigurasi: `sudo nginx -t`
3. Restart Nginx: `sudo systemctl restart nginx`

### Langkah 3: Database & Konfigurasi
Sama seperti langkah di lokal, import skema database ke MariaDB/MySQL server di VPS, dan sesuaikan file `config/app.php`.

## C. Security Checklist Pasca-Deployment
- [ ] Pastikan error reporting/display errors (`display_errors = Off`) dinonaktifkan di `php.ini` server produksi.
- [ ] Pastikan folder aplikasi (termasuk `app/`, `config/`, `routes/`) **TIDAK** dapat diakses publik. Hanya folder `public/` yang diekspos sebagai Document Root.
- [ ] Implementasikan SSL/HTTPS (Let's Encrypt / AutoSSL).
