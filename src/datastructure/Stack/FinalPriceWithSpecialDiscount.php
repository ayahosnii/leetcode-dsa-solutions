<?php

namespace src\datastructure\Stack;

/**
 * https://leetcode.com/problems/final-prices-with-a-special-discount-in-a-shop/description/
 *
 * */
class FinalPriceWithSpecialDiscount
{
    function finalPrices($prices) {
        $n = count($prices);
        for ($i = 0; $i < $n; $i++) {
            $discount = 0;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($prices[$j] <= $prices[$i]) {
                    $discount = $prices[$j];
                    break;
                }
            }
            $prices[$i] -= $discount;
        }
        return $prices;
    }
}