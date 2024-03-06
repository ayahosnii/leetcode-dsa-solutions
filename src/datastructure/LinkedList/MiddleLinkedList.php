<?php

namespace src\datastructure\LinkedList;

class MiddleLinkedList
{
    /**
     * @param ListNode $head
     * @return ListNode
     */


    function middleNode($head) {
        $count = 0;
        $current = $head;

        // Traverse the linked list and count nodes
        while ($current !== null) {
            $count++;
            $current = $current->next;
        }

        // Calculate the position of the node to start returning from
        $start_position = $count - ceil($count / 2) + 1;

        // Reset current to head
        $current = $head;
        $index = 1;

        // Traverse the list again to find the starting node

        while ($index < $start_position && $current !== null) {
            $current = $current->next;
            $index++;
        }

        // Return the starting node
        return $current;
    }
}