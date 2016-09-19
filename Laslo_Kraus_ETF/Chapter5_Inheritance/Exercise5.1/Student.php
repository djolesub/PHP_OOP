<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 7:15 AM
 */
class Student extends Person{
    //Defining fields
    private $school;
    private $grade;

    //Defining Constructor
    public function __construct($name,$age,$adress,$school,$grade){
        person::__construct($name,$age,$adress);
        $this->setSchool($school);
        $this->setGrade($grade);
    }

    //Getters
    public function getSchool(){
        return $this->school;
    }

    public function getGrade(){
        return $this->grade;
    }

    //Defining Setters
    public function setSchool($school){
        if(is_string($school)){
            $this->school = $school;
        }else {
            echo "Wrong input";
            return false;
        }
    }

    public function setGrade($grade){
        if(is_numeric($grade) && $grade > 0 && $grade <= 10){
            $this->grade = $grade;
        }else {
            echo "Wrong input";
            return false;
        }
    }

    public function __toString(){
        return parent::__toString()."<br>School:\t$this->school<br>Grade:\t$this->grade";
    }









}
