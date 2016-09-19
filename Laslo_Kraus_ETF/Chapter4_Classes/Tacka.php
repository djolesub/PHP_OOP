<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 9:52 PM
 */
class Point {
    //Defining parameters
    private $x,$y;

    //Defining Constructor
    public function __construct($x,$y){
        $this->setX($x);
        $this->setY($y);
    }

    //Defining getteres
    public function getX(){ return $this->x; }
    public function getY(){ return $this->y; }

    //Defining Setters
    public function setX($x)
    {
        if (is_numeric($x)) {
            $this->x = $x;
        } else {
            echo "You entered wrong data";
            return false;
        }
    }
    public function setY($y){

        if (is_numeric($y)) {
            $this->y = $y;
        } else {
            echo "You entered wrong data";
            return false;
        }

    }

    //Method for calculating distance
    public function distance(Point $a){
        $d = sqrt(($a.x - $this.x)**2 + ($a.y-$this.y)**2);
        return $d;
    }

    public function __toString(){
        return "X = $this.x<br>Y = $this.y";
    }





}
