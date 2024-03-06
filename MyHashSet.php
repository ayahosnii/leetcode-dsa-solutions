<?php

use src\datastructure\LinkedList\MyHashSet;

require_once __DIR__ . '/vendor/autoload.php';


$obj = new MyHashSet();
$obj->add(1);
$obj->add(2);
echo $obj->contains(1) ? "true\n" : "false\n";
echo $obj->contains(3) ? "true\n" : "false\n";
echo $obj->contains(2) ? "true\n" : "false\n";
$obj->remove(2);
echo $obj->contains(2) ? "true\n" : "false\n";