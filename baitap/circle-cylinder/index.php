<?php
include "circle.php";
include "cylinder.php";


$circle = new Circle23(5,"red");
$cylynder = new cylinder2(10,"blue",5);

$circle->toString();
echo "<br/>";
$cylynder->toString();

echo "<br>";
echo "Area Circle : " . $circle->getAreA();
echo "<br>";
echo "Volume Cylinder : " . $cylynder->getVolume();