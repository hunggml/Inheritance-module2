<?php
include "Circle.php";
include "Cylinder.php";
include "Rectangle.php";
include "Square.php";

$circle = new Circle("circle 01 ",6);
echo "Circle area : " . $circle->calculateArea() . "<br>";
echo "Circle perimeter" . $circle->calculatePeri() . "<br>";
