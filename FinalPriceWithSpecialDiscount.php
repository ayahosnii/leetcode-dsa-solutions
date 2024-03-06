<?php

use src\datastructure\Stack\FinalPriceWithSpecialDiscount;

require_once __DIR__ . '/vendor/autoload.php';


$final = new FinalPriceWithSpecialDiscount();
$price = [8,4,6,2,3];
$result = $final->finalPrices($price);
print_r($result);