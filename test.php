<?php

use src\datastructure\LinkedList\ListNode;
use src\datastructure\LinkedList\ReverseLinkedList;

require_once __DIR__ . '/vendor/autoload.php';

// Example usage:
$input_str = "aa aa odd gdo";

$reverseLinkedList = new \src\Test();

$result = $reverseLinkedList->count_anagrams($input_str);

print_r($result);