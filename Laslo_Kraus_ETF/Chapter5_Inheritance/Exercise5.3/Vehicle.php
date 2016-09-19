<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 8:56 AM
 */
abstract class Vehicle {
    protected $weight;

    //Defining Constructor
    public function __construct($weight){
        $this->setWeight($weight);
    }

    //Weight getter
    public abstract function getWeight();

    //Weight setter
    public function setWeight($weight){
        if(is_numeric($weight) && $weight > 600){
            $this->weight = $weight;
        }else {
            echo "Wrong input for weight";
        }
    }

    public function __toString(){
        return "Weight:\t$this->weight";
    }
    public abstract function type();







}
