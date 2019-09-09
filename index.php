<?php
include "Point.php";
include "MovePoint.php";
$point = new Point(6,8);
$point->setXY(4,5);
echo "<br>";
$point->toString();
//

$movePoint = new MovePoint(3,4,3,4);
$movePoint->setSpeed(4,6);
echo "<br>";
$movePoint->toString();
//
$movePoint->movePoint();