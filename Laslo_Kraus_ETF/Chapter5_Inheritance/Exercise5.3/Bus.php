<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 9:18 AM
 */
class Bus extends Vehicle {
    private $numOfPassingers;
    private $passingerWeight; //Average passinger weight

    public function __construct($weight,$numOfPassingers,$passingerWeight = 80){
        parent::__construct($weight);
        $this->setNumOfPassingers($numOfPassingers);
        $this->passingerWeight = $passingerWeight;
    }

    //Getters
    public function getNumOfPassingers(){
        return $this->numOfPassingers;
    }

    public function getPassingersAvgWeight(){
        return $this->passingerWeight;
    }

    //Setters
    public function setNumOfPassingers($num){
        if(is_numeric($num) && $num > 0){
            $this->numOfPassingers = $num;
        } else {
            echo "Wrong input";
        }
    }

    public function type(){
        return "Bus";
    }

    public function getWeight(){
        return $this->weight + $this->numOfPassingers * $this->passingerWeight;
    }

    public function __toString(){
        return parent::__toString()."<br>Passingers:\t$this->numOfPassingers<br>Avg Weight:\t$this->passingerWeight";
    }


}
