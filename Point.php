<?php


class Point
{
public $x;
public $y;
public $arr=[];
//method
public function __construct($y,$x)
{
    $this->x= $x;
    $this->y= $y;
}

    public function getY()
    {
        return $this->y;
    }
    public function getX()
    {
        return $this->x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }
    public function getXY(){
return $this->arr;
    }
    public function setXY($x,$y){
        array_push($this->arr,$x,$y);
    }
    //hien thi
    public function toString(){
    foreach ($this->getXY() as $value){
        echo "Toa do cua Point la: ".  $value."<br>";
    }
    }

}





































