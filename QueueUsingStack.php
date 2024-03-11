<?php

use src\datastructure\Queue\CountStudents;
use src\datastructure\Queue\QueueUsingStacks;
use src\datastructure\Queue\RecentCounter;

require_once __DIR__ . '/vendor/autoload.php';


  $obj = new QueueUsingStacks();
  $obj->push(1);
  $obj->push(2);

  $ret_2 = $obj->peek();
  print_r($ret_2);
  echo '-';
  $ret_3 = $obj->pop();
  print_r($ret_3);
echo '-';

  $ret_4 = $obj->empty();
  echo $ret_4;
