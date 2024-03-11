<?php

namespace src\datastructure\Queue;

class QueueUsingStacks
{
    private $stk1;
    private $stk2;

    function __construct() {
        $this->stk1 = [];
        $this->stk2 = [];
    }

    function push($x) {
        array_push($this->stk1, $x);
    }

    function pop() {
        $this->move();
        return array_pop($this->stk2);
    }

    function peek() {
        $this->move();
        return end($this->stk2);
    }

    function empty() {
        return empty($this->stk1) && empty($this->stk2);
    }

    function move() {
        if (empty($this->stk2)) {
            while (!empty($this->stk1)) {
                array_push($this->stk2, array_pop($this->stk1));
            }
        }
    }
}