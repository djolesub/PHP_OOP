<?php

/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/19/2016
 * Time: 2:27 PM
 */
//Creating Adapter pattern for Database
interface DatabaseAdapterInterface {
    public function setConnectionInfo($values = array());
    public function closeConnection();
    public function runQuery($sql,$parameters = array());
    public function fetchField($sql,$parameters = array());
    public function fetchRow($sql,$parameters = array());
    public function fetchArray($sql,$parameters);

    public function insert($tableName,$parameters = array());
    public function getLastInsertedId();
    public function update($tableName,$updateParameters = array(),$whereCondition="",$whereParameters = array());
    public function delete($tableName,$whereCondition = null,$whereParameters = array());
    public function getNumRowsAffected();
    public function beginTransaction();
    public function roolBack();
    public function commit();





}
