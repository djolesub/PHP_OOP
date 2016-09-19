<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 7:26 AM
 */
class Employee extends Person{
    private $firm;
    private $department;

    public function __construct($name,$age,$adress,$firm,$department){
        parent::__construct($name,$age,$adress);
        $this->setFirm($firm);
        $this->setDepartment($department);
    }

    //Getters
    public function getFirm(){
        return $this->firm;
    }

    public function getDepartment(){
        return $this->department;
    }

    //Setters
    public function setFirm($firm){
        if(is_string($firm) && strlen($firm) > 0){
            $this->firm = $firm;
        } else {
            echo "Wrong Input";
        }
    }

    public function setDepartment($department){
        if(is_string($department) && strlen($department) > 0){
            $this->department = $department;
        } else {
            echo "Wrong Input";
        }
    }

    public function __toString(){
        return parent::__toString() . "<br>Firm:\t$this->firm<br>Department:\t$this->department";
    }






}
