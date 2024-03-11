<?php

use src\algorithms\stringmatching\PrefixWord;

require_once __DIR__ . '/vendor/autoload.php';

$solution = new PrefixWord();
$words1 = ["pay","attention","practice","attend"];
$words2 = ["leetcode","win","loops","success"];
$prefix = "at";
echo $solution->prefixCount($words1, $prefix);