<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/admin.css">
        
    <title>Beneficiaries</title>
    <style>
        .popup{
            animation: transitionIn-Y-bottom 0.5s;
        }
</style>
</head>
<body>
<?php
session_start();

include("connection.php");

if ($_POST) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $status = $_POST['status'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    if ($password == $cpassword) {
        $error = '3';
        $result = $database->query("select * from beneficiaries where full_name='$name';");

        if ($result->num_rows == 1) {
            $error = '1';
        } else {
 

            $sql1 = "insert into beneficiaries ( full_name, gender, status, dob, address ) values ('$name', '$gender', '$status', '$dob', '$address');";
            $database->query($sql1);

            $sql2 = "insert into users (full_name, role) values ('$name', 'beneficiary')";
            $database->query($sql2);

            $error = '4';
        }
    } else {
        $error = '2';
    }
} else {
    $error = '3';
}

header("location: bene.php?action=add&error=" . $error);
?>

    
   

</body>
</html>