<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 10:03 AM
 */
class Sailsman extends Worker {
    private $income;

    public function __construct($name,$percent,$income){
        parent::__construct($name,$percent);
        $this->setIncome($income);
    }

    //Getter
    public function getIncome(){
        return $this->income;
    }

    public function sell($earn){
        $this->income+=$earn;
    }


}
