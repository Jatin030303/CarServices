<?php
include 'connect.php';

// Get form data
$name = $_POST['fname'];
$email = $_POST['femail'];
$message_type = $_POST['fmessage_type'];

// Validate form data
if (empty($name) || empty($email) || empty($message_type)) {
    echo "All fields are required.";
    exit;
}

// Prepare and bind
$stmt = $con->prepare("INSERT INTO feedback (name, email, message_type) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message_type);

// Execute the statement
if ($stmt->execute()) {
    echo "Feedback submitted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$con->close();
?>