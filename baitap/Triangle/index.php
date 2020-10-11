<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="side1" placeholder="side1">
    <input type="text" name="side2" placeholder="side2">
    <input type="text" name="side3" placeholder="side3">
    <button type="submit">Calculate</button>
</form>
</body>
</html><?php
include "Triangle.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $side1 = $_REQUEST['side1'];
    $side2 = $_REQUEST['side2'];
    $side3 = $_REQUEST['side3'];
}
$triangle = new Triangle($side1,$side2,$side3);
if ($side1 <= 0 || $side2 <= 0 || $side3 <= 0) {
    echo "Canh lon hon 0";
} elseif ($side1 + $side2 <= $side3 || $side3 + $side1 <= $side2 || $side3 + $side2 <= $side1) {
    echo "day khong phai 3 canh cua 1 tam giac";
} else {
    echo $triangle;
}


