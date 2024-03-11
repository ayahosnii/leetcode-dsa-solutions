<?php

use src\datastructure\Queue\CountStudents;
use src\datastructure\Queue\QueueUsingStacks;
use src\datastructure\Queue\RecentCounter;
use src\datastructure\Queue\StacksUsingQueue;

require_once __DIR__ . '/vendor/autoload.php';


  $obj = new StacksUsingQueue();
  $obj->push(1);
  $obj->push(2);

try {
    $ret_2 = $obj->top();
    echo "Top element of the stack: $ret_2\n";
} catch (RuntimeException $e) {
    echo "Error: {$e->getMessage()}\n";
}

$r = $obj->pop();
print_r($r);