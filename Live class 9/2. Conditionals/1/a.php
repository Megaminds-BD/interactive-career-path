<?php

function calculatePrice($productPrice, $quantity) {
    if ($quantity > 0) {
        if ($quantity > 10) {
            $discount = 50;

            $total = ($productPrice * $quantity);
            return $total - $discount;
        } else {
            $total = ($productPrice * $quantity);
            return $total;
        }
    } else {
        return "Quantity must be a positive value";
    }
}

$price = calculatePrice(5, 4);

