# Dokumentasi API

> **Status Saat Ini:** Seluruh endpoint API belum diimplementasikan. Belum ada router, controller, maupun middleware yang menangani HTTP Request di dalam repositori saat ini.

Dokumentasi ini berisi placeholder untuk endpoint yang direkomendasikan berdasarkan fitur yang direncanakan.

## API Overview (Future Design)
Rencananya API akan menggunakan arsitektur RESTful yang merespon dengan tipe data `application/json`.

---

## Placeholder: Endpoint Produk (Future Design)

### Mendapatkan Daftar Produk
*(Status: Not Implemented / Planned)*

**URL**: `/api/products`
**Method**: `GET`
**Header**: `Accept: application/json`
**Authentication**: Tidak Diperlukan

#### Response Success (Contoh Ekspektasi)
**Status Code**: `200 OK`
```json
{
  "status": "success",
  "data": [
    {
      "id": 1,
      "name": "Produk Contoh",
      "price": 150000,
      "stock": 10,
      "image_url": "/uploads/image.jpg"
    }
  ]
}
```

---

## Placeholder: Endpoint Keranjang (Future Design)

Berdasarkan fitur `CartService.php` yang telah diimplementasikan (logika kalkulasi):

### Kalkulasi Total Keranjang
*(Status: Not Implemented / Planned - Logika perhitungan telah ada di service, namun controller/endpoint belum tersedia)*

**URL**: `/api/cart/calculate`
**Method**: `POST`
**Header**: `Content-Type: application/json`

#### Request Body (Contoh Ekspektasi)
```json
{
  "items": [
    {
      "product_id": 1,
      "product_price": 100000,
      "quantity": 2
    }
  ]
}
```

#### Response Success (Contoh Ekspektasi)
**Status Code**: `200 OK`
```json
{
  "status": "success",
  "data": {
    "total": 200000
  }
}
```

## Spesifikasi OpenAPI / Swagger
*(File spesifikasi OpenAPI (`swagger.yaml` / `swagger.json`) belum tersedia. Status: Not Implemented / Planned)*
