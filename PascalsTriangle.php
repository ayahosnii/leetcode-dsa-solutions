<?php

use src\algorithms\dynamicprogramming\CountBits;
use src\algorithms\dynamicprogramming\PascalsTriangle;

require_once __DIR__ . '/vendor/autoload.php';


$obj = new PascalsTriangle();

// Example 2
$n2 = 5;
$output2 = $obj->generate($n2);
print_r($output2);

//echo "Input: n = $n2\n";
//echo "Output: [" . implode(",", $output2) . "]\n";