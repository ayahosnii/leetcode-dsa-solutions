<?php

namespace src\datastructure\Stack;

use src\datastructure\Tree\TreeNode;

class BTInorderTraversal
{
    /**
     * Perform inorder traversal of a binary tree iteratively.
     *
     * @param TreeNode $root The root of the binary tree.
     * @return Integer[] The inorder traversal result.
     */
    function inorderTraversal($root) {
        // Initialize an array to store the inorder traversal result
        $result = [];

        // Initialize a stack to keep track of nodes to be processed
        $stack = [];

        // Start with the root node
        $current = $root;

        // Loop until we reach the end of the tree and the stack is empty
        while ($current !== null || !empty($stack)) {
            // Traverse to the leftmost node of the current subtree
            while ($current !== null) {
                // Push each node encountered onto the stack
                array_push($stack, $current);
                // Move to the left child
                $current = $current->left;
            }

            // If we've reached the leftmost node, pop it from the stack
            $current = array_pop($stack);

            // Add the value of the popped node to the result array
            $result[] = $current->val;

            // Move to the right child to continue traversal
            $current = $current->right;
        }

        // Return the inorder traversal result
        return $result;
    }
}
