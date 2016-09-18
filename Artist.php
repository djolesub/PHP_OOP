<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 3:59 PM
 */
class Artist{
    //Defining Constant
    const EARLIEST_DATE = "Januar 1,1200";
    //Defining fields
    private $name;
    private $lastName;
    private $birthDate;
    private $birthCity;
    private $deathDate;
    protected static $allArtists = array();
    //Defining constructor

    public function __construct($name,$lastName,$birthDate = null,$birthCity,$deathDate = null){
        $this->setName($name);
        $this->setLastName($lastName);
        $this->setBirthDate($birthDate);
        $this->setBirthCity($birthCity);
        $this->setDeathDate($deathDate);
        self::$allArtists[] = $this;
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

    public function getEarliestAllowedDate () {
        return date_create(self::EARLIEST_DATE);
    }
    //Defining static method for finding number of created artists
    public static function  getArtistsCount(){
        return count(self::$allArtists);
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

    public function setBirthDate($birthdate) {
// set variable only if passed a valid date string
        $date = date_create($birthdate);
        if ( ! $date ) {
            $this->birthDate = $this->getEarliestAllowedDate();
        }
        else {
            // if very early date then change it to earliest allowed date
            if ( $date < $this->getEarliestAllowedDate() ) {
                $date = $this->getEarliestAllowedDate();
            }
            $this->birthDate = $date;
        }
    }

    public function setDeathDate($birthDate){
        $date = date_create($birthDate);
        if (!$date){
            echo "Wrong input for death date";
            return false;
        } else {
            // set variable only if later than birth date
            if ($date > $this->getBirthDate()) {
                $this->deathDate = $date;
            }
            else {
                echo "Death date is not valid";
                return false;
            }
        }
    }

    //Defining magic methods

    //Defining toString

    public function __toString(){
        $table = "";
        $table.="<table><tr><th>Name</th><td>{$this->name}</td></tr>";
        $table.="<table><tr><th> Last Name</th><td>{$this->lastName}</td></tr>";
        $table.="<table><tr><th>Birth Date</th><td>".date_format($this->birthDate,'d M Y')."</td></tr>";
        $table.="<table><tr><th>Death Date</th><td>".date_format($this->deathDate,'d M Y')."</td></tr>";
        $table.="<table><tr><th>City Of Birth</th><td>".$this->birthCity."</td></tr>";
        $table.="</table>";
        return $table;

    }

}
