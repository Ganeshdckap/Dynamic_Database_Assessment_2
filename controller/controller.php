<?php

require 'model/model.php';

class controller{
    public $model;
    public function __construct()
    {
        $this->model = new model();
    }

    public function index(){

            require 'view/home.view.php';
    }

    public function create_database($DbName){

        if ($DbName){
            var_dump($DbName);
                    $this->model->createDb($DbName['dbname']);

        }
        else{
            require "view/create_db.view.php";
        }

    }

    public function create_table($table)
    {
        if ($table){
                       $this->model->creatingTableOnDb($table);

        }
        else{
           $databaseList=$this->model->gettingDatabaseList();
            require "view/table.view.php";
        }
    }

}
