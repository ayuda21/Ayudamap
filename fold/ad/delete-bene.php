<?php

    session_start();

   
    
    if($_GET){
        
        include("connection.php");
        $id=$_GET["id"];
        $result001= $database->query("select * from beneficiaries where user_id=$id;");
        $name=($result001->fetch_assoc())["full_name"];
        $sql= $database->query("delete from beneficiaries where full_name='$name';");
        
        header("location: bene.php");
    }


?>