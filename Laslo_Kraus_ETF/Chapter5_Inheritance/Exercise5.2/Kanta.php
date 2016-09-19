<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 10:32 PM
 */
class Kanta extends Valjak{
    private $filled; //How much liqued is in basket

    public function __construct($r,$h,$filled){
        parent::__construct($r,$h);
        $this->filled = $filled < $this->volume()? $filled: $this->volume();
    }

    public function getAllLiqued(){
        return $this->filled;
    }

    public function freeSpace(){
        return ($this->volume() - $this->filled);
    }

    public function isEmpty(){
        return $empty = $this->filled == 0? true:false;

    }

    public function isFull(){
        return $full = $this->filled == $this->volume()? true:false;
    }

    public function putLiquide($a){
        if($this->isFull()){
            echo "Its full, you can't putt any more liquide";
        }else {
            $free = $this->volume() - $this->filled;
            if($a <= $free){
                $this->filled = $this->filled+$a;
            }else {
                $this->filled = $this->volume();
            }
        }

    }




}


