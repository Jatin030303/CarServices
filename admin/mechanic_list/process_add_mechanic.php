<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO mechanic (name, email, phone, address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $address);

    // Execute the statement
    if ($stmt->execute()) {
        // Mechanic added successfully
        header("Location: mechanic_dashboard.php"); // Redirect to mechanic dashboard
        exit();
    } else {
        // Error adding mechanic
        echo "Error: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>