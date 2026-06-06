<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../app/models/Product.php';

class ProductTest extends TestCase {
    public function testGetFormattedPrice() {
        $product = new Product([
            'id' => 1,
            'name' => 'Test Product',
            'price' => 150000
        ]);

        $this->assertEquals('Rp 150.000', $product->getFormattedPrice());
    }

    public function testGetImageUrl() {
        // With image
        $productWithImage = new Product([
            'image_path' => 'test-image.jpg'
        ]);
        $this->assertEquals('/uploads/test-image.jpg', $productWithImage->getImageUrl());

        // Without image
        $productWithoutImage = new Product([]);
        $this->assertEquals('https://via.placeholder.com/400x300?text=No+Image', $productWithoutImage->getImageUrl());
    }
}
