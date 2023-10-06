<?php

// Early return

function calculatePrice($productPrice, $quantity) {
    if ($quantity < 0) {
        return "Quantity must be a positive value";
    }

    $total = ($productPrice * $quantity);

    if ($quantity > 10) {
        $discount = 50;
        return $total - $discount;
    }

    return $total;
}

$price = calculatePrice(5, 4);

