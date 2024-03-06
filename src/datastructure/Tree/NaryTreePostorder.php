<?php

namespace src\datastructure\Tree;

class NaryTreePostorder
{
    // Function to traverse an N-ary tree in postorder and return the values in an array
    function postorder($root) {
        $result = [];

        // If the root is null, return an empty result array
        if ($root === null) return $result;

        // Initialize a stack to perform iterative traversal
        $stack = [];

        // Push the root node onto the stack
        array_push($stack, $root);

        // Continue traversal until the stack is empty
        while (!empty($stack)) {
            // Pop a node from the stack
            $node = array_pop($stack);

            // Insert the value of the current node at the beginning of the result array (postorder traversal)
            array_unshift($result, $node->val);

            // Iterate through the children of the current node
            foreach ($node->children as $child) {
                // Push each child onto the stack to visit them later
                array_push($stack, $child);
            }
        }

        // Return the postorder traversal result
        return $result;
    }
}
