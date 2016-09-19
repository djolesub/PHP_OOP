<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 10:27 PM
 */
class Valjak{
    private $r;
    private $h;

    public function __construct($r,$h){
        $this->setR($r);
        $this->setH($h);
    }

    //Getters
    public function getR(){
        return $this->r;
    }
    public function getH(){
        return $this->h;
    }

    //Setters
    public function setR($r){
        if(is_numeric($r) && $r > 0){
            $this->r = $r;
        }else {
            echo "Wrong input";
            return false;
        }
    }

    public function setH($h){
        if(is_numeric($h) && $h > 0){
            $this->h = $h;
        }else {
            echo "Wrong input";
            return false;
        }
    }

    //Returning volume
    public function volume(){
       $v =  ($this->r **2 * pi()*$this->h);
        return round($v,2);
    }






}
