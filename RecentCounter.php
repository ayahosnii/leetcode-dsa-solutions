<?php

use src\datastructure\Queue\RecentCounter;

require_once __DIR__ . '/vendor/autoload.php';
$recentCounter = new RecentCounter();
echo $recentCounter->ping(1) . "\n";    // Output: 1
echo $recentCounter->ping(100) . "\n";  // Output: 2
echo $recentCounter->ping(3001) . "\n"; // Output: 3
echo $recentCounter->ping(3002) . "\n"; // Output: 3