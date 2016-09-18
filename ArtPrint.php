<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 7:06 PM
 */
class ArtPrint extends Painting {
    //Defining filds
    private $printNumber;

    //Defining Constructor
    public function __construct($name,$artist,$yearCreated,$medium,$printNumber){
        parent::__construct($name,$artist,$yearCreated,$medium);
        $this->setPrintNumber($printNumber);
    }

    //Defining getters
    public function getPrintNumber(){ return $this->printNumber; }

    //Defining setters
    public function setPrintNumber($number){
        if(is_numeric($number)){
            $this->printNumber = $number;
        }else {
            echo "Wrong input.";
            return false;
        }
    }

    public function __toString(){
        parent::__toString()." Print number is: ".$this->printNumber;
    }








}
