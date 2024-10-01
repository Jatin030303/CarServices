<?php
include '../mechanic_list/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $licence = $_POST['licence'];
    $experience = $_POST['experience'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO driver (name, email, phone, address, licence, experience) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $email, $phone, $address, $licence, $experience);

    // Execute the statement
    if ($stmt->execute()) {
        // Driver added successfully
        header("Location: driver_dashboard.php"); // Redirect to driver dashboard
        exit();
    } else {
        // Error adding driver
        echo "Error: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>