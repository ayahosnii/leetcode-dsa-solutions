<?php

use src\datastructure\LinkedList\BinaryNumberToInteger;
use src\datastructure\LinkedList\ListNode;
use src\datastructure\Tree\MaxDepth;
use src\datastructure\Tree\TreeNode;


require_once __DIR__ . '/vendor/autoload.php';


$root = new TreeNode(3);
$root->left = new TreeNode(9);
$root->right = new TreeNode(20);
$root->right->left = new TreeNode(15);
$root->right->right = new TreeNode(7);

// Instantiate the MaxDepth class
$max_depth = new MaxDepth();

// Calculate and print the maximum depth
$result = $max_depth->maxDepth($root);
echo "Example 1 Output: " . $result . "\n";

// Create another tree for the second example
$root2 = new TreeNode(1);
$root2->right = new TreeNode(2);

// Calculate and print the maximum depth for the second example
$result2 = $max_depth->maxDepth($root2);
echo "Example 2 Output: " . $result2 . "\n";
