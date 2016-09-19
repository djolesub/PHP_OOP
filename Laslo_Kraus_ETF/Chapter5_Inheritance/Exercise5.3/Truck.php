<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 9:06 AM
 */
class Truck extends Vehicle{
    private $cargoWeight;

    public function __construct($weight,$cargo){
        $this->setWeight($weight);
        $this->setCargoWeight($cargo);
    }

    //Getters
    public function getCargoWeight(){
        return $this->cargoWeight;
    }

    //Setters
    public function setCargoWeight($cargo){
        if(is_numeric($cargo) && $cargo > 0 && $cargo < 7000){
            $this->cargoWeight = $cargo;
        } else {
            echo "Wrong input for cargo weight";
            return false;
        }
    }

    public function type(){
        return "Truck";
    }

    public function getWeight(){
        return $this->cargoWeight + $this->weight;
    }

    public function __toString(){
        return parent::__toString(). "<br>Cargo Weight:\t$this->cargoWeight";
    }

}
