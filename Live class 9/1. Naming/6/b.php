<?php

// Keep consistency in naming

class Payment
{
    public function fetchByBillingId($id)
    {
        //
    }

    public function fetchByCustomerId($id)
    {
        //
    }
}

$payment = new Payment();
$payment->fetchByBillingId(1);
$payment->fetchByCustomerId(2);
