<?php

class connection{
    public $db;
    public function __construct()
    {
        try{
            $this->db = new PDO('mysql:host=localhost','admin','welcome');
        }
        catch (exception $e){;
            die("connnection error".$e->getMessage());
        }
    }
}

class model extends connection{

    public function createDb($name){
            $this->db->query("CREATE DATABASE $name");

    }

    public function dbValidation($DbName){
        return $this->db->query("
        SELECT SCHEMA_NAME
        FROM INFORMATION_SCHEMA.SCHEMATA
        WHERE SCHEMA_NAME = '$DbName'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function gettingDatabaseList(){
        return $this->db->query("SHOW DATABASES")->fetchAll  (PDO::FETCH_OBJ);
    }

    public  function creatingTableOnDb($dbname,$table_name)
    {
        try {
            $this->db->query("
        USE $dbname;
        CREATE TABLE $table_name (
        id int auto_increment,
        primary key (id)
        )
        ");

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function addcolumn($dbname,$table_name,$table_column,$table_datatype){
        $this->db->query("
        USE $dbname;
        ALTER TABLE $table_name ADD COLUMN $table_column $table_datatype;
        ");
    }

    public function gettableondb($dbname){
        $tablename=$this->db->query("SELECT TABLE_NAME AS tablesname,TABLE_SCHEMA 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = '$dbname';")->fetchAll(PDO::FETCH_OBJ);
        return $tablename;
    }



    public function gettingcolumndb($tablename,$dbname){
        $column=$this->db->query("SELECT column_name 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='$dbname' 
    AND `TABLE_NAME`='$tablename'")->fetchAll(PDO::FETCH_OBJ);
        return $column;
    }
}

