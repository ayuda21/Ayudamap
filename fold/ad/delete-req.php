<?php

    session_start();

   
    
    if($_GET){
        
        include("connection.php");
        $id=$_GET["id"];
        $result001= $database->query("select * from request where user_id=$id;");
        $name=($result001->fetch_assoc())["full_name"];
        $sql= $database->query("delete from request where full_name='$name';");
        
        header("location: index.php");
    }


?>