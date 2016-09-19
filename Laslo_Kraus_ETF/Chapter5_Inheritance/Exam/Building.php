<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 10:28 AM
 */
class Building{
    private $address;
    private $places;

    public function __construct($address){
        $this->setAddress($address);
        $this->places = array();
    }

    //Getters
    public function getAddress(){
        return $this->address;
    }

    public function getPlaces(){
        return $this->places;
    }

    //Setters
    public function setAddress($address){
        $this->address = $address;
    }

    public function addPlace(Place $p){
        $this->places[] = $p;
    }

    //Returns place with biggest area
    public function biggest(){
        $pl= $this->places[0];
        $max = $pl->getArea();
        foreach($this->places as $place){
            if($place->getArea() > $max){
                $max = $place->getArea();
            }
        }
        return $max;
    }

    //Return list of places that are greater then average area
    public function greatherThanAverage(){
        $result = array();
        $sum = 0;
        foreach($this->places as $place){
            $sum+=$place->getArea();
        }

        $avg = $sum/count($this->places);

        foreach($this->places as $place){
           if($place->getArea() > $avg){
               $result[] = $place;

           }
        }
        return $result;
    }

    //Returns hash map with keys:numbers and values:places
    public function getMap(){
        $result = array();
        foreach($this->places as $place){
            $result[$place->getNumber()] = $place;
        }
        return $result;
    }

    //Add class method test that do few tasks
    /*public static function test(){

        //Create places and Building
        $building1 = new Building("Cvijiceva 160");
        $residental1 = new Residental(1,5,150,"City",2000,2400);
        $residental2 = new Residental(10,8,350,"Urban",4000,4300);
        $buisnes1 = new Business(7,3,500,800,3,2,1);

        //Put places in Building
        $building1->addPlace($residental1);
        $building1->addPlace($residental2);
        $building1->addPlace($buisnes1);

        //Print Prices for all places
        foreach($this->places as $place){
            echo "<br>$place->price()";
        }

    }*/

}
