<?php

namespace src\algorithms\divideandconquer;

use src\datastructure\Tree\TreeNode;

class SortedArrayToBST
{
     function buildTree($nums, $start, $end)
    {
        if ($end + 1 - $start < 1) return null;

        $mid = (int)(($end + $start) / 2);

        $root = new TreeNode($nums[$mid]);
        $root->left = $this->buildTree($nums, $start, $mid - 1);
        $root->right = $this->buildTree($nums, $mid + 1, $end);
        return $root;
    }

    function sortedArrayToBST($nums)
    {
        if (count($nums) == 0 ) return null ;
        $root = $this->buildTree($nums, 0, count($nums) - 1);
        return $root;
    }

}