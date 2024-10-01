<?php
include '../mechanic_list/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message_type = $_POST['message_type'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO mechanic (id, name, email, message_type) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $id, $name, $email, $message_type);


    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>