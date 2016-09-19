<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 2:35 PM
 */
class DatabaseAdapterPDO implements DatabaseAdapterInterface {
    private $pdo;
    private $lastStatment = null;

    public function __construct($values){
        $this->setConnectionInfo($values);
    }


    //Creates Connection uses passed parameters
    public function setConnectionInfo($values = array()){
        $dsn = $values[0];
        $user = $values[1];
        $password = $values[2];
        try {
            $this->pdo = new PDO($dsn, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $e){
            echo "There was a problem while establishing connection to database.<br>";
            echo "Error: <strong> { $e->getMessage() }</strong>";

        }
    }

    //Closing Connection
    public function closeConnection(){
        $this->pdo = null;
    }

    //Run query to database
    public function runQuery($sql,$parameters = array()){
        if(!is_array($parameters)){
            $parameters = (array)($parameters);
        }
        $this->lastStatment = null;
        if(count($parameters) > 0) {
            try {
                $this->lastStatment = $this->pdo->prepare($sql);
                $executeOk = $this->lastStatment->execute();
                if($executeOk){
                    $this->lastStatment;
                }
            }
            catch(PDOException $e){
                echo "There was problem while running query.<br>Error: $e->getMessage()";
            }
        } else {
            try {
                $this->lastStatment = $this->pdo->query($sql);
            }
            catch(PDOException $e){
                echo "There was an error: ".$e->getMessage();
            }

        }
    }


    //Fetching field from database
    public function fetchField($sql,$parameters = array()){



    }



}
