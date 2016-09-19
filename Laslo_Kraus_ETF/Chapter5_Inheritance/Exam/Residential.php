<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 10:33 AM
 */
class Residential extends Place{
    private $terrain;
    private $buildingLicence;
    private $connection;

    public function __construct($number,$numOfRooms,$area,$terrain =null,$buildingLicence=null,$connection=null){
        parent::__construct($number,$numOfRooms,$area);
        $this->terrain = $terrain;
        $this->buildingLicence = $buildingLicence;
        $this->connection = $connection;
    }
    public function price(){
        return $this->buildingLicence + $this->connection;
    }

    public function __toString(){
        return "
            Number:\t$this->number<br>Number of Rooms:\t$this->numOfRooms<br>Area:\t{$this->getArea()}<br>
            Terrain:\t$this->terrain<br>Building Licence\t$this->buildingLicence<br>Connection:\t$this->connection
        ";
    }

}
