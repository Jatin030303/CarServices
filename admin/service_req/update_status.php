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

// Get the raw POST data and decode it
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Log the received data
file_put_contents('php://stderr', print_r($data, true));

// Check if ID and status are set in the decoded data
if (isset($data['id']) && isset($data['status'])) {
    $id = $data['id'];
    $status = $data['status'];

    // Prepare and bind the update query
    $stmt = $con->prepare("UPDATE userdata SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $id);

    // Execute the query
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }

    $stmt->close();
} else {
    // Log invalid input data for debugging
    file_put_contents('php://stderr', "Invalid input: " . print_r($data, true));
    echo json_encode(["success" => false, "error" => "Invalid input"]);
}

// Close the database connection
$con->close();
?>