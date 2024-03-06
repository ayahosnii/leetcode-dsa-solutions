<?php

namespace src\datastructure\LinkedList;

class ReverseLinkedList
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head)
    {

        $prev = null;
        $current = $head;
        $next = null;


        while ($current != null){
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next;
        }
        $head = $prev;

        return $head;
    }
}