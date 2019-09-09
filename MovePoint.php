<?php


class MovePoint extends Point
{
public $xSpeed;
public $ySpeed;


public function __construct($y, $x,$xSpeed,$ySpeed)
{
    parent::__construct($y, $x);
    $this->xSpeed= $xSpeed;
    $this->ySpeed = $ySpeed;
}

    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed(){
return $this->arr;
    }
    public function setSpeed($xSpeed,$ySpeed){
    array_push($this->arr,$xSpeed,$ySpeed);
    }
    public function toString()
    {
        foreach ($this->getSpeed() as $value){
            echo "Toc do cua xSpeed va ySpeed la:". $value."<br>";
        }
    }
    public function movePoint(){
    echo 'Move Point x la: '.($this->x+= $this->xSpeed) ."<br>";
    echo 'Move point y la: '.($this->y+=$this->ySpeed)."<br>";
    }
}





























