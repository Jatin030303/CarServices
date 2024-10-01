<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$servername = "localhost";
$username = "root";
$password = ""; // your database password
$dbname = "project";

// Create a connection to the database
$con = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Query to fetch data from the userdata table
$sql = "SELECT id, name, email, number, brand, model, service_type, state, city, pickup_drop, date, address, pincode, flat_number, registration_no, odometer, service_requirement, additional_requirement, status, time_slot FROM userdata";
$result = $con->query($sql);

// Initialize an array to hold the data
$userdata = [];

// Fetch the data and store it in the array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $userdata[] = $row;
    }
}

// Close the database connection
$con->close();

// Return the data as a JSON response
header('Content-Type: application/json');
echo json_encode($userdata);
?>