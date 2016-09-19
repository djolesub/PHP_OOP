<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 9:47 AM
 */
abstract class Employee {
    private $name;
    private $percent;

    public function __construct($name,$percent){
        $this->setName();
        $this->setPercent($percent);
    }

    //Getters
    public function getName(){
        return $this->name;
    }

    public function getPercent(){
        return $this->name;
    }

    //Setters
    public function setName($name){
        $this->name = $name;
    }

    public function setPercent($per){
        $this->percent = $per;
    }


    public abstract function amount();

    public function getSallary(){
        return $this->amount() * $this->percent/100;
    }





}

