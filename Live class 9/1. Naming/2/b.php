<?php

// Better naming when reusing variables

$priceBeforeTax = 15.00;
$taxPercentage = (10/100);
$priceAfterTax = $priceBeforeTax + ($taxPercentage * $priceBeforeTax);
