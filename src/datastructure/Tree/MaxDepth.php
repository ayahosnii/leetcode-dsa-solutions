<?php

namespace src\datastructure\Tree;

class MaxDepth
{
    /**
     * https://leetcode.com/problems/maximum-depth-of-binary-tree/
     * Definition for a binary tree node.
     * class TreeNode {
     *     public $val = null;
     *     public $left = null;
     *     public $right = null;
     *     function __construct($val = 0, $left = null, $right = null) {
     *         $this->val = $val;
     *         $this->left = $left;
     *         $this->right = $right;
     *     }
     * }
     */
    public function maxDepth($root) {
        if ($root == null) {
            return 0;
        }
        $l = $this->maxDepth($root->left);
        $r = $this->maxDepth($root->right);
        return 1 + max($l, $r);
    }
}