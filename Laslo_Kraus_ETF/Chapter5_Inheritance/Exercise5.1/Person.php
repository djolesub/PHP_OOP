<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 10:50 PM
 */
class Person{
    private $name;
    private $age;
    private $adress;

    public function __construct($name,$age,$adress){
        $this->setName($name);
        $this->setAge($age);
        $this->setAddress($adress);
    }

    //Getteres
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getAddress(){
        return $this->adress;
    }

    //Setters
    public function setName($name){
        if(is_string($name)){
            $this->name = $name;
        } else {
            echo "Wrong input";
        }
    }

    public function setAge($age){
        if(is_numeric($age) && $age > 0 && is_integer($age)){
            $this->age = $age;
        } else {
            echo "Wrong input";
        }
    }

    public function setAddress($adress){
        if(is_string($adress)){
            $this->adress = $adress;
        } else {
            echo "Wrong input";
        }
    }

    public function __toString(){
        return "Name:\t$this->name<br>Age:\t$this->age<br>Address:\t$this->adress";
    }




}
