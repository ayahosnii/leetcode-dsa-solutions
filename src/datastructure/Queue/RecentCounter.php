<?php

namespace src\datastructure\Queue;

use SplQueue;

class RecentCounter {
    // Declare a private property to store the queue
    private $q;

    // Constructor to initialize the queue
    public function __construct() {
        $this->q = new SplQueue(); // Initialize a new SplQueue instance
    }

    // Method to handle incoming ping requests
    public function ping($t) {
        // Enqueue the current time $t into the queue
        $this->q->enqueue($t);

        // Remove elements from the front of the queue that are older than 3000 milliseconds
        while (!$this->q->isEmpty() && $this->q->bottom() < $t - 3000) {
            $this->q->dequeue();
        }

        // Return the size of the queue, which represents the number of requests within the past 3000 milliseconds
        return $this->q->count();
    }
}


/**
 * Your RecentCounter object will be instantiated and called as such:
 * $obj = RecentCounter();
 * $ret_1 = $obj->ping($t);
 */