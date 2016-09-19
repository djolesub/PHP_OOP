<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 10:04 PM
 */
class Line
{
    private $point1;
    private $point2;

    //Defining constructor

    public function __construct(Point $a, Point $b){

        $this->setPoint($a);
        $this->setPoint($b);
    }

    public function getPoint1(){
        return $this->point1;
    }

    public function getPoint2(){
        return $this->point2;
    }

    //Defining setters
    public function setPoint1(Point $a){
        $this->point1->x = $a->getX();
        $this->point1->y = $a->getY();
    }





}