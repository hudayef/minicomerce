<?php
class Product {
    public $id; public $name; public $slug; public $description; public $price; public $stock; public $image_path; public $is_active;
    public function __construct($data) {
        $this->id = $data['id'] ?? null; $this->name = $data['name'] ?? null; $this->slug = $data['slug'] ?? null;
        $this->description = $data['description'] ?? null; $this->price = $data['price'] ?? 0;
        $this->stock = $data['stock'] ?? 0; $this->image_path = $data['image_path'] ?? null; $this->is_active = $data['is_active'] ?? 1;
    }
    public function getFormattedPrice() { return "Rp " . number_format($this->price, 0, ',', '.'); }
    public function getImageUrl() { return $this->image_path ? "/uploads/" . $this->image_path : "https://via.placeholder.com/400x300?text=No+Image"; }
}
