<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 5:00 PM
 */

include_once "Artist.php";

$artist1 = new Artist("Pablo","Picasso","Malaga","Oct 25,1881","Apr 8,1973");
$artist2= new Artist("Salvador","Dali","Figures","May 11,1904",
    "January 23,1989");
//Printing artists information
//echo $artist1;

echo $artist1;
echo $artist2;
echo "<hr>";
echo date_format($artist1->getBirthDate(),'d M Y');
