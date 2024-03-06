<?php

namespace src\datastructure\LinkedList;

class MyHashSet {
    private $set;

    function __construct() {
        $this->set = array_fill(0, 1000001, false);
    }

    function add($key) {
        $this->set[$key] = true;
    }

    function remove($key) {
        $this->set[$key] = false;
    }

    function contains($key) {
        return $this->set[$key];
    }
}