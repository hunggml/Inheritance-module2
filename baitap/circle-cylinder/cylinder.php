<?php


class cylinder2 extends Circle23
{
    public $height;

    public function __construct($_radius, $_color,$_height)
    {
        parent::__construct($_radius, $_color);
        $this->height = $_height;
    }

    public function getVolume(){
       return parent::getAreA() * $this->height;
    }

   public function toString()
   {
       parent::toString();
       echo "<br/> Height : " . $this->height;
   }
}