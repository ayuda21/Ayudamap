<?php

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (empty($_POST['name']) || empty($_POST['status']) || empty($_POST['dob']) || empty($_POST['address']) || empty($_POST['id00'])) {

        $error = '5';
        header("location: bene.php?action=edit&error=" . $error . "&id=" . $_POST['id00']);
        exit();
    }

    $name = $_POST['name'];
    $status = $_POST['status'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $id = $_POST['id00'];


    $sql1 = "UPDATE beneficiaries SET full_name='$name', status='$status', dob='$dob', address='$address' WHERE user_id=$id";


    if ($database->query($sql1)) {
      
        $sql2 = "YOUR_SECOND_QUERY_HERE";
        $database->query($sql2);

        $error = '4'; 
    } else {
        $error = '5';
    }
} else {
    $error = '3'; 
    header("location: bene.php?action=edit&error=" . $error . "&id=" . $id);
    exit();
}

header("location: bene.php?action=edit&error=" . $error . "&id=" . $id);
?>
