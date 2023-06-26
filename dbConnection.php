<?php

$servername = "localhost";
$username = 'root';
$password = "";

$database = "admin";

$conn = new mysqli($servername, $username, $password, $database);


//check connnection


if(!$conn){

    die(mysqli_error($conn));
}


?>