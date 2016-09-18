<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 6:55 PM
 */
class Sculpture extends Art{
    //Defining fields
    private $weight;

    //Defining Constructor
    public function __construct($name,$artist,$yearCreated,$weight){
        parent::__construct($name,$artist,$yearCreated);
        $this->setWeight($weight);
    }

    //Defining getters
    public function getWeight(){ return $this->weight; }

    //Defining settere
    public function setWeight($weight){
        if(is_numeric($weight)){
            $this->weight = $weight;
        }else {
            echo "Wrong input for weight";
        }
    }

    //Defining __toString method
    public function __toString(){
        parent::__toString()." <br>Weight is ". $this->weight ."kg.";
    }







}


