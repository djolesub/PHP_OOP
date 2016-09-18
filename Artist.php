<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 3:59 PM
 */
class Artist{
    //Defining fields
    private $name;
    private $lastName;
    private $birthDate;
    private $birthCity;
    private $deathDate;
    protected static $allArtists = array();
    //Defining constructor

    public function __construct($name,$lastName,$birthDate,$birthCity,$deathDate = null){
        $this->name = setName($name);
        $this->lastName = setLastName($lastName);
        $this->birthData = setBirthDate($birthDate);
        $this->birthCity = setBirthCity($birthCity);
        $this->deathDate= setDeathDate($deathDate);
        self::$allArtist[] = $this;
    }

    //Defining getters
    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getBirthDate(){
        return $this->birthDate;
    }
    public function getBirthCity(){
        return $this->birthCity;
    }
    public function getDeathDate(){
        return $this->deathDate;
    }

    //Define setters
    public function setName($name){
        if (is_string($name) && strlen($name) > 1){
            $this->name = ucfirst($name);
        }else {
            echo "Name must be String.";
        }
    }

    public function setLastName($lastName){
        if (is_string($lastName) && strlen($lastName) > 1){
            $this->lastName = ucfirst($lastName);
        }else {
            echo "Last name must be String.";
        }
    }

    public function setBirthCity($birthCity){
        if (is_string($birthCity) && strlen($birthCity) > 2){
            $this->birthCity = ucfirst($birthCity);
        }else {
            echo "City of Birth is not valid.";
        }
    }

    public function setBirthDate($birthDate){

    }

    public function setDeathDate($birthDate){

    }

    //Defining magic methods

    //Defining toString

    public function __toString(){
        $table = "";
        $table.="<table><tr><th>Name</th><td>$this->name</td></tr>";
        $table.="<table><tr><th> Last Name</th><td>$this->lastName</td></tr>";
        $table.="<table><tr><th>Birth Date</th><td>$this->birthDate</td></tr>";
        $table.="<table><tr><th>City Of Birth</th><td>$this->birthCity</td></tr>";
        $table.="<table><tr><th>Death Day</th><td>$this->deathDate</td></tr>";
        $table.="</table>";
        return $table;

    }

}
