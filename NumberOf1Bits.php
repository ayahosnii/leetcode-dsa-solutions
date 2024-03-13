<?php


use src\algorithms\divideandconquer\NumberOf1Bits;

require_once __DIR__ . '/vendor/autoload.php';

$solution = new NumberOf1Bits();
echo $solution->hammingWeight(bindec("00000000000000000000000000001011")); // Output: 3
echo "\n";
echo $solution->hammingWeight(bindec("00000000000000000000000010000000")); // Output: 1
echo "\n";
echo $solution->hammingWeight(bindec("11111111111111111111111111111101")); // Output: 31
echo "\n";