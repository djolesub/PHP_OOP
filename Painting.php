<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/18/2016
 * Time: 6:43 PM
 */
class Painting extends Art{
    //Defining fields
    private $medium;

    //Defining Constructor
    private function __construct($name,$artist,$yearCreated,$medium){
        parent::__construct($name,$artist,$yearCreated);
        $this->setMedium();
    }

    //Definig getters
    public function getMedium(){return $this->medium;}

    //Defining Setters
    public function setMedium($medium){
        if(is_string($medium)){
            $this->medium = $medium;
        }else {
            echo "Wrong input for medium";
        }
    }

    //Problem with toString because parent toString creates and return html table.
    //What to do do now with medium because parents toString has </table> closing tag
    public function __toString(){
        return parent::__toString() ."<br>Medium is: ".$this->medium;
    }






}
