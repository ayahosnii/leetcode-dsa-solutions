<?php

use src\datastructure\Stack\BTInorderTraversal;
use src\datastructure\Tree\TreeNode;

require_once __DIR__ . '/vendor/autoload.php';

$root = new TreeNode(1);
$root->right = new TreeNode(2);
$root->right->left = new TreeNode(3);



$inOrderTraversal = new BTInorderTraversal();
$result = $inOrderTraversal->inorderTraversal($root);
print_r($result);