<?php

    session_start();

   
    
    if($_GET){
       
        include("connection.php");
        $id=$_GET["id"];
        $result001= $database->query("select * from employee where user_id=$id;");
        $email=($result001->fetch_assoc())["email"];
        $sql= $database->query("delete from users where full_name='$name';");
        $sql= $database->query("delete from employee where email='$email';");
    
        header("location: employee.php");
    }


?>