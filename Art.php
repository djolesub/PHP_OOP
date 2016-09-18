<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 6:16 PM
 */

abstract class Art{
    //Defining Fields
    private $name;
    private $artist;
    private $yearCreated;

    //Defining Constructor
    public function __construct($name,$artist,$yearCreated){
        $this->name = $name;
        $this->artist = $artist;
        $this->yearCreated = $yearCreated;
    }

    //Defining getters
    public function getName() { return $this->name; }
    public function getArtist() { return $this->artist; }
    public function getYearCreated() { return $this->yearCreated; }

    //Definig setters
    public function setName($name){
        if (is_string($name) && strlen($name) > 1){
            $this->name = ucfirst($name);
        }else {
            echo "Name must be String.";
        }
    }

    public function setYear($year){
        if(is_numeric($year)){
            $this->yearCreated = $year;
        }else {
            echo "Wrong parameter year";
            return false;
        }
    }

    public function setArtist(Artist $artist){
        if ($artist instanceof Artist && is_object($artist)){
            $this->artist = $artist;
        }
    }

    public function __toString(){
        $table = "";
        $table.="<table><tr><th>Name</th><td>$this->name</td></tr>";
        $table.="<table><tr><th> Last Name</th><td>$this->artist->getName() $this->artist->getLastName()</td></tr>";
        $table.="<table><tr><th>City Of Birth</th><td>".$this->yearCreated."</td></tr>";
        $table.="</table>";
        return $table;
    }






}
