<?php

use src\algorithms\dynamicprogramming\CountBits;

require_once __DIR__ . '/vendor/autoload.php';


// Example 1
$n1 = 2;
$obj = new CountBits();
$output1 = $obj->countBits($n1);
echo "Input: n = $n1\n";
print_r($output1);
//echo "Output: [" . implode(",", $output1) . "]\n";

// Example 2
$n2 = 5;
$output2 = $obj->countBits($n2);
print_r($output2);

//echo "Input: n = $n2\n";
//echo "Output: [" . implode(",", $output2) . "]\n";