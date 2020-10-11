<?php
include "Point.php";
include "MovablePoint.php";

$point = new Point(10,20);
$move = new MovablePoint(10,20,30,40);

$point->toString();
echo "<br>";
$move->toString();
echo "<br>";
echo $move->move();
var_dump($move->getXY());
