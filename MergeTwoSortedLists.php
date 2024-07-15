<?php

use src\algorithms\recursion\MergeTwoSortedLists;
use src\datastructure\LinkedList\BinaryNumberToInteger;
use src\datastructure\LinkedList\ListNode;


require_once __DIR__ . '/vendor/autoload.php';



$list1 = new ListNode(1);
$list1->next = new ListNode(2);
$list1->next->next = new ListNode(4);

$list2 = new ListNode(1);
$list2->next = new ListNode(3);
$list2->next->next = new ListNode(4);


$merge = new MergeTwoSortedLists();

$result = $merge->mergeTwoLists($list1, $list2);

