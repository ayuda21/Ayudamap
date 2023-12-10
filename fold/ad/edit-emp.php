<?php
// Import database
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (empty($_POST['name']) || empty($_POST['oldemail']) || empty($_POST['email']) || empty($_POST['Tele']) || empty($_POST['password']) || empty($_POST['cpassword']) || empty($_POST['id00'])) {
       
        $error = '5';
        header("location: employee.php?action=edit&error=" . $error . "&id=" . $_POST['id00']);
        exit();
    }

    $name = $_POST['name'];
    $oldemail = $_POST["oldemail"];
    $email = $_POST['email'];
    $tele = $_POST['Tele']; 
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $id = $_POST['id00'];
    $error = '';

    if ($password == $cpassword) {
        $result = $database->query("SELECT employee.user_id FROM employee INNER JOIN users ON employee.email = users.email WHERE employee.email = '$email';");

        if ($result->num_rows == 1) {
            $id2 = $result->fetch_assoc()["user_id"];
        } else {
            $id2 = $id;
        }

        echo $id2 . "jdfjdfdh";

        if ($id2 != $id) {
            $error = '1';
        } else {
            $sql1 = "UPDATE employee SET email='$email', full_name='$name', password='$password', tele='$tele' WHERE user_id=$id;";
            $database->query($sql1);

            $sql2 = "UPDATE users SET name='$name' WHERE name='$name';";
            $database->query($sql2);

            $error = '4';
        }
    } else {
        $error = '2';
    }
} else {
   
    $error = '3';
    header("location: employee.php?action=edit&error=" . $error . "&id=" . $id);
    exit();
}

header("location: employee.php?action=edit&error=" . $error . "&id=" . $id);
?>
