<?php

use src\algorithms\divideandconquer\SortedArrayToBST;

require_once __DIR__ . '/vendor/autoload.php';

$nums = [-10,-3,0,5,9];

$convert = new SortedArrayToBST();
$result = $convert->sortedArrayToBST($nums);
print_r($result) ;