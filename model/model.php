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

    public function gettingDatabaseList(){
        return $this->db->query("SHOW DATABASES")->fetchAll  (PDO::FETCH_OBJ);
    }

    public  function creatingTableOnDb($table){
        try {
            $dbname =$table['dbname'];
            $table_name=$table['Table_Name'];
            var_dump($table);

            $sql =("USE '$dbname';
            create table $table_name(
                id int not null AUTO_INCREMENT,
                primary key(id)
            );");

            $this->db->query($sql);

        }
        catch (PDOException $e){
            die($e->getMessage());
        }
    }
}

