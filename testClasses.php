<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 5:00 PM
 */

include_once "Artist.php";

$artist1 = new Artist("Leonardo","Davinci","Firenca");
$artist2 = new Artist("Milic","Vukasinovic","Bosna");
echo $artist1->getName();
echo $artist1->getLastName();
echo $artist1->getbirthCity();
echo "<hr>";
echo $artist1;
echo $artist2;
echo "<hr>";
echo Artist::getArtistsCount();