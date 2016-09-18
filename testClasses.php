<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 5:00 PM
 */

include_once "Artist.php";
include_once "Art.php";
include_once "Painting.php";
include_once "Sculpture.php";
include_once "ArtPrint.php";

$picasso= new Artist("Pablo","Picasso","Malaga","Oct 25,1881","Apr 8,1973");
$artist2= new Artist("Salvador","Dali","Figures","May 11,1904",
    "January 23,1989");
//Printing artists information
//echo $artist1;

echo $picasso;
echo $artist2;
echo "<hr>";

$guernica = new Painting("Guernica",$picasso,"1938","Oil oncanvas");
$stein = new Painting("Portrait of Gertrude Stein",$picasso,"1907", "Oil on canvas");
$woman = new Sculpture("Head of a Woman",$picasso,"1909", 30.5);
$bowl = new ArtPrint("Still Life with Bowl and Fruit",$picasso,"1912","Charcoal on paper", 25);

echo $guernica->getArtist();
echo $woman->getYearCreated();

$art = [$guernica,$stein,$woman,$bowl];

foreach($art as $a){
    echo $a->getName() ."<br>";
}