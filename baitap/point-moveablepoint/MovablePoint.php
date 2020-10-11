<?php


class MovablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($_x, $_y, $_xSpeed, $_ySpeed)
    {
        parent::__construct($_x, $_y);
        $this->xSpeed = $_xSpeed;
        $this->ySpeed = $_ySpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return $speed = array($this->xSpeed, $this->ySpeed);
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function toString()
    {
        echo "(" . $this->x . "," . $this->y . "," . $this->xSpeed . "," . $this->ySpeed . ")";
    }

    public function move(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
    }



}