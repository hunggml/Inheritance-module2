<?php

class Shape {
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }

    public function show()
    {
        return "I am Shape, my name is  $this->name";
    }
}
