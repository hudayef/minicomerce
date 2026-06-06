<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../app/services/CartService.php';

class CartServiceTest extends TestCase {
    public function testCalculateTotal() {
        $cartService = new CartService();
        $items = [
            ['product_price' => 100000, 'quantity' => 2],
            ['product_price' => 50000, 'quantity' => 1]
        ];

        $total = $cartService->calculateTotalFromItems($items);
        $this->assertEquals(250000, $total);
    }
}
