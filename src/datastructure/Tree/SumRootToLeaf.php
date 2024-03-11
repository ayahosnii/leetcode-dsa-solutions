<?php

namespace src\datastructure\Tree;

class SumRootToLeaf
{
    // Function to calculate the sum of binary numbers represented by root-to-leaf paths
    function sumRootToLeaf($root) {
        if ($root == null) {
            return 0;
        }
        $curr = 0;

        return $this->sumRootToLeafHelper($root, $curr);
    }

    // Helper function to recursively compute the sum of root-to-leaf paths
    function sumRootToLeafHelper($root, $curr) {

        if ($root == null) return 0;

        $curr = 2 * $curr + $root->val;

        if ($root->left == null && $root->right == null){
            return $curr;
        }

        return $this->sumRootToLeafHelper($root->left, $curr) + $this->sumRootToLeafHelper($root->right, $curr);
    }
}
