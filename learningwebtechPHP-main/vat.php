<?php

//The VAT rate / percentage.
$vat = 15;

//The price, excluding VAT.
$priceExcludingVat = 10;

//Calculate how much VAT needs to be paid.
$vatToPay = ($priceExcludingVat / 100) * $vat;

//The total price, including VAT.
$totalPrice = $priceExcludingVat + $vatToPay;

//Print out the final price, with VAT added.
//Format it to two decimal places with number_format.
echo number_format($totalPrice, 2);