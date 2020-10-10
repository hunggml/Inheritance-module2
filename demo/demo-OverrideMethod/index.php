<?php

class Myclas{

    function AB(){
        echo "Hello A";
    }
}

class yourClas extends Myclas {

    function AB(){
        echo "Hello B";
    }
}

$hilu = new yourClas();
$hilu->AB();
