<?php

namespace src\datastructure\Tree;

class Node {
    public $val = null;
    public $children = null;

    function __construct($val = 0, $children = array()) {
        $this->val = $val;
        $this->children = $children;
    }
}
