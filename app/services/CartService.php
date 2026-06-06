<?php
class CartService {
    public function calculateTotalFromItems($items) {
        $total = 0;
        foreach ($items as $item) {
            $total += ($item['product_price'] * $item['quantity']);
        }
        return $total;
    }
}
