<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="adben.css">
  </head>
  <body>

<?php
include 'connection.php';

$errors = array();

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $gender = $_POST['gender'];
    $dob= $_POST['dob'];
    $address = $_POST['address'];
    $status = $_POST['status'];
 

    if (empty($fname) || empty($user) || empty($pass) || empty($status)) {
        array_push($errors, "<div class='alert alert-primary'>All fields are required<div>");
    }
    if (strlen($fname) < 8) {
        array_push($errors, "<div class='alert alert-primary'>Please enter your full name<div>");
    }
    if (strlen($address) < 8) {
        array_push($errors, "<div class='alert alert-primary'>Please enter your correct address</div>");
    }

  

    $query = "INSERT INTO request (full_name, gender, dob, status, address)
    VALUES ('$fname', '$gender', '$dob', '$status', '$address')";
        
        if (mysqli_query($db, $query)) {
            echo "<center><div class='alert alert-primary'>Successfully Added</div></center>";
         
            echo '<script type="text/javascript">window.location = "../map.php";</script>';
        } else {
            echo 'Error in updating database: ' . mysqli_error($db);
        }
    } else {
       
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }

?>

<div class="container">
    <center>
        <table border="0" style="margin: 0; padding: 0; width: 60%;">
            <tr>
                <td>
                    <p class="header-text">Register</p>
                </td>
            </tr>
            <tr>
                <form action="" method="POST" id="loginForm" onsubmit="return validateForm()">
                    <td class="label-td">
                        <label for="fname" class="form-label">Full name: </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                        <input type="name" name="fname" class="input-text" placeholder="Full name" required>
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                        <label for="gender" class="form-label">Gender: </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                    <input type="radio" name="gender" value="Male" required>Male<br>
                    <input type="radio" name="gender" value="Female" required>Female<br>
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                        <label for="status" class="form-label">Status: </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                    <input type="radio" name="status" value="SeniorCitizen" required> Senior Citizen<br>
                    <input type="radio" name="status" value="SingleParent" required> Single Parent<br>
                    </td>
                </tr>
                <td class="label-td">
                        <label for="dob" class="form-label">Date of Birth: </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                        <input type="date" name="dob" class="input-text " required>
                    </td>
                </tr>
                <td class="label-td">
                        <label for="address" class="form-label">Address: </label>
                    </td>
                </tr>
                <tr>
                    <td class="label-td">
                        <input type="text" name="address" class="input-text" placeholder="Address" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Register" class="login-btn btn-success btn">
                    </td>
                </tr>
                </form>
                <tr>
                    <td width="10%">
                        <a href="../map.php" class="non-style-link"><p class="nav-item">Back</p></a>
                    </td>
                </tr>
            </center>
        </table>
    </div>

    <script src="log.js"></script>
</body>
</html>
      