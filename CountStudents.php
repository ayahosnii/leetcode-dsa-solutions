<?php

use src\datastructure\Queue\CountStudents;
use src\datastructure\Queue\RecentCounter;

require_once __DIR__ . '/vendor/autoload.php';
$solution = new CountStudents();
$students = [1,1,1,0,0,1];
$sandwiches = [1,0,0,0,1,1];
echo $solution->countStudents($students, $sandwiches);