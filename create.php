<?php

require 'model/model.php';


$tableName =$_POST['tableName'];
        
$invoiceId =$_POST['invoiceId'];
$itemName =$_POST['itemName'];
$tableName =$_POST['tableName'];
$tableName =$_POST['tableName'];



 
    if (isset($_POST["submit"]))
    {
        $tableName = $_POST["tableName"];
 
        $sql = "INSERT INTO invoices (tableName) VALUES ('$tableName')";
        mysqli_query($conn, $sql);
        $invoiceId = mysqli_insert_id($conn);
 
        for ($a = 0; $a < count($_POST["itemName"]); $a++)
        {
            $sql = "INSERT INTO items (invoiceId, itemName) VALUES ('$invoiceId', '" . $_POST["itemName"][$a] . "',)";
            mysqli_query($conn, $sql);
        }
 
        echo "<p>Table has been added.</p>";
    }
 
?>
 
