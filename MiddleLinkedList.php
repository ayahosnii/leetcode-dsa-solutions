<?php

use src\datastructure\LinkedList\BinaryNumberToInteger;
use src\datastructure\LinkedList\ListNode;
use src\datastructure\LinkedList\MiddleLinkedList;


require_once __DIR__ . '/vendor/autoload.php';


$node1 = new ListNode(1);
$node2 = new ListNode(2);
$node3 = new ListNode(3);
$node4 = new ListNode(4);
$node5 = new ListNode(5);

// Link the nodes together
$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;
$node4->next = $node5;
$node5->next = null;

$middleLinkedList = new MiddleLinkedList();

$result = $middleLinkedList->middleNode($node1);

print_r($result);