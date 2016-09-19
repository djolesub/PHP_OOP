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



}

