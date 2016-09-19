<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 7:53 AM
 */

include_once "Valjak.php";
include_once "Kanta.php";

$v = new Valjak(20,100);

echo $v->getR();
echo $v->getH();
echo $v->volume();
echo "<hr>";
$basket = new Kanta(20,100,100);
echo $basket->getR()."<br>";
echo $basket->getH()."<br>";
echo $basket->getAllLiqued()."<br>";
echo $basket->volume()."<br>";
echo "<hr>";
echo $basket->freeSpace()."<br>";
echo $basket->isEmpty()."<br>";
echo $basket->isFull()."<br>";
echo $basket->putLiquide(125600)."<br>";
echo $basket->isFull()."<br>";