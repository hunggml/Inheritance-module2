<?php
include "Rectangle.php";

class Square extends Rectangle
{
    public function __construct($_name, $_width)
    {
        parent::__construct($_name, $_width, $_width);
    }

}