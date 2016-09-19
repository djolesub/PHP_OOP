<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 10:37 AM
 */
class Business extends Place{
    private $cost;
    private $k1;
    private $k2;
    private $k3;

    public function __constructor($number,$numOfRooms,$area,$cost,$k1,$k2,$k3){
        parent::__construct($number,$numOfRooms,$area);
        $this->cost = $cost;
        $this->k1 = $k1;
        $this->k2 = $k2;
        $this->k3 = $k3;

    }

    public function price(){
        return $this->cost;
    }
}
