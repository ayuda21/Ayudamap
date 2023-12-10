<?php
$host = "localhost";
$username = "root";
$password = "";
$database_name = "ayuda";

$database = new mysqli($host, $username, $password, $database_name);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}
?>
