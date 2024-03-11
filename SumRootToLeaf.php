<?php

use src\datastructure\Tree\SumRootToLeaf;
use src\datastructure\Tree\TreeNode;

require_once __DIR__ . '/vendor/autoload.php';


$root = new TreeNode(1);
$root->left = new TreeNode(0);
$root->right = new TreeNode(1);
$root->left->left = new TreeNode(0);
$root->left->right = new TreeNode(1);
$root->right->left = new TreeNode(0);
$root->right->right = new TreeNode(1);

$solution = new SumRootToLeaf();
echo $solution->sumRootToLeaf($root);