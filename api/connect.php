<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>