<!DOCTYPE html>
<html lang="en-US">
  <head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="log.css">
  </head>

<div class="container">
<?php
include 'connection.php';

$errors = array();

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $repeatPassword = $_POST['repeat_password'];

    if (empty($fname) || empty($user) || empty($pass) || empty($repeatPassword)) {
        array_push($errors, "<div class='alert alert-success'>All fields are required</div>");
    }
    if (strlen($fname) < 7) {
      array_push($errors, "<div class='alert alert-success'>Please enter your fullname</div>");
    }
    if (strlen($user) < 5) {
      array_push($errors, "<div class='alert alert-success'>Please enter a valid username</div>");
    }
    if (strlen($pass) < 8) {
        array_push($errors, "<div class='alert alert-success'>Password must be at least 8 characters long</div>");
    }
    if ($pass !== $repeatPassword) {
        array_push($errors, "<div class='alert alert-success'>Passwords do not match</DIV>");
    }

    if (empty($errors)) {
        $passwordHash = password_hash($pass, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username, password, full_name) VALUES ('$user', '$passwordHash', '$fname')";
        
        if (mysqli_query($db, $query)) {
            echo "Successfully Added.";
            // Redirect to login.php
            echo '<script type="text/javascript">window.location = "login.php";</script>';
            exit(); // Stop further execution
        } else {
            echo 'Error in updating database: ' . mysqli_error($db);
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
}
?>

<div class="reg-input-field">
        <center><h2>Register</h2></center>
        <form method="post" action="#" >
          <div class="form-group">
          <div class="input-box">
            <label>Fullname</label>
            <input type="text" class="form-control" name="fname" style="width:20em;" placeholder="Enter your Fullname" required />
          </div>
          <div class="form-group">
          <div class="input-box">
            <label>Username</label>
            <input type="text" class="form-control" name="user" style="width:20em;" placeholder="Enter your Username">
          </div><div class="form-group">
            <label>Password</label>
            <div class="input-box">
            <input type="Password" class="form-control" name="pass" style="width:20em;" required  placeholder="Enter your Password">
          </div>
          <div class="form-group">
                <label>Repeat Password</label>
                <div class="input-box">
                <input type="password" class="form-control" name="repeat_password" style="width:20em;" required placeholder="Repeat Password">
            </div>
            <p></p>
            <center> <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success submitBtn" style="width:20em; margin:0;" /><br><br>
             
            <div class="form-group"> 
              Already have an account?<a class="link" href="login.php"> LogIn</a>
           </center>
          </div>
        </form>
      </div>
      </div>
      </html>
   