<?php

namespace src\datastructure\Queue;

use RuntimeException;
use SplQueue;
use SplStack;

class StacksUsingQueue
{
    private $q1;
    private $q2;

    public function __construct() {
        $this->q1 = new SplQueue();
        $this->q2 = new SplQueue();
    }

    public function push($x) {
        $this->q2->enqueue($x);
        while (!$this->q1->isEmpty()) {
            $this->q2->enqueue($this->q1->dequeue());
        }
        // Swap q1 and q2
        $temp = $this->q1;
        $this->q1 = $this->q2;
        $this->q2 = $temp;
    }

    public function pop() {
        return $this->q1->dequeue();
    }

    public function top() {
        return $this->q1->bottom();
    }

    public function empty() {
        return $this->q1->isEmpty();
    }
}