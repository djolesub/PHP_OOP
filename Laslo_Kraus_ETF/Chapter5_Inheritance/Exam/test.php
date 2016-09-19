<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 11:21 AM
 */

include_once "Place.php";
include_once "Building.php";
include_once "Business.php";
include_once "Residential.php";

//Create places and Building
$building1 = new Building("Cvijiceva 160");
$residental1 = new Residential(1,5,150,"City",2000,2400);
$residental2 = new Residential(10,8,350,"Urban",4000,4300);
$buisnes1 = new Business(7,3,500,800,3,2,1);

echo "<hr> Residental Class<hr>";
echo $residental1->price();
echo "<br>".$residental1;
echo "<br><br><br>";
echo "<br>{$residental1->getNumber()}";
echo "<br>{$residental1->getNumberOfRooms()}";
echo "<br>{$residental1->getArea()}";
echo "<hr><hr>";

//Put places in Building
$building1->addPlace($residental1);
$building1->addPlace($residental2);
$building1->addPlace($buisnes1);
echo "Places in building";
$a = $building1->getPlaces();
var_dump($a);
echo $a = $building1->getAddress();
echo "<br>{$building1->biggest()}";
$a = $building1->greatherThanAverage();
echo "<br>Greater than average";
foreach($a as $f){
    echo "<br>".$f->getArea();
}
echo "<hr><hr>";
$b = $building1->getMap();
print_r($b);
