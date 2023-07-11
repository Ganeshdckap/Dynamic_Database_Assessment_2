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
        unset($_SESSION['db_name_exists']);
        if ($DbName){
            $db_Validate = $this->model->dbValidation($DbName['dbname']);
            if(!isset($db_Validate[0]['SCHEMA_NAME'])){
                $this->model->createDb($DbName['dbname']);
                header('location: /');
            }
            else{
                $_SESSION['db_name_exists']=$DbName['dbname'];
                require "view/createdb.php";
            }
        }
        else{
            require "view/createdb.php";
        }

    }

    public function create_table($table)
    {
        if ($table){
            $dbname =$table['dbname'];
            $table_name=$table['Table_Name'];
            $this->model->creatingTableOnDb($dbname,$table_name);

            $table_column =$table['column_name'];
            $table_datatype =$table['data_type'];
            $count =count($table['column_name']);

            for ($i=0;$i<$count;$i++){
                if ($table_column[$i] !='' && $table_datatype[$i] != ''){
                    $this->model->addcolumn($dbname,$table_name,$table_column[$i],$table_datatype[$i]);
                }
            }
            header("location:/");

        }
        else{
           $databaseList=$this->model->gettingDatabaseList();
            require "view/table.view.php";
        }
    }

    public  function  create_data($datas){
        if ($datas){

        }
        else{
            $databaseList=$this->model->gettingDatabaseList();

            require "view/create_data.view.php";
        }
    }

    function gettingtable($dbname){
        var_dump($dbname);
       $tablename= $this->model->gettableondb($dbname);
      echo json_encode($tablename);

    }











    
}