<?php

class A {
    public $demo;

    function method(){
        echo "Hello World";
    }
}

class B extends A{

    function method2(){
        echo " HELL !@#$";
    }

}

$demo = new B;
$demo->method();
$demo->method2();
