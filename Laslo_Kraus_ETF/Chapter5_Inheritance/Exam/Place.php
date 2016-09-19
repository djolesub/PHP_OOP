<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 10:17 AM
 */
abstract class Place {
    protected $number;
    protected $numOfRooms;
    private  $area;

    public function __construct($number,$numOfRooms,$area){
        $this->setNumber($number);
        $this->setNumberOfRooms($numOfRooms);
        $this->setArea($area);
    }

    //Getters
    public function getNumber(){
        return $this->number;
    }

    public function getNumberOfRooms(){
        return $this->numOfRooms;
    }

    public function getArea(){
        return $this->area;
    }

    //Setteers
    public function setNumber($num){
        if(is_integer($num) && $num > 0){
            $this->number = $num;
        } else {
            echo "Wrong entery for number ";
            return false;
        }
    }

    public function setNumberOfRooms($num){
        if(is_integer($num) && $num > 0){
            $this->numOfRooms = $num;
        } else {
            echo "Wrong entery for number of rooms ";
            return false;
        }
    }

    public function setArea($area){
        if(is_numeric($area) && $area > 0){
            $this->area = $area;
        } else {
            echo "Wrong entery for area ";
            return false;
        }
    }

    public function __toString(){
        return "Place Number:\t$this->number<br>Number of Rooms:\t$this->numOfRooms<br>Area:\t$this->area";
    }

    //Return true if place is greater then specified place
    public function isGreater(Place $p){
        return $this->area > $p->area? true:false;
    }

    public abstract function price();


}
