<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: loginform.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $avatar = $_FILES['avatar'];

    // Perform necessary validation and sanitation here

    // Handle avatar upload
    if ($avatar['size'] > 0) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($avatar["name"]);
        move_uploaded_file($avatar["tmp_name"], $targetFile);
        // Store $targetFile path to the database
    }

    // Update user information in the database
    // Assuming you have a database connection $conn
    $sql = "UPDATE profile SET first_name=?, last_name=?, username=?, password=? WHERE id=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssi", $firstName, $lastName, $username, password_hash($password, PASSWORD_DEFAULT), $_SESSION['id']);
        $stmt->execute();
        $stmt->close();
        header('Location: admin_dashboard.php');
        exit;
    } else {
        echo "Something went wrong. Please try again later.";
    }
}
?>