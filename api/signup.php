<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if the passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match'); window.location.href = 'newuserlogin.php';</script>";
        exit();
    }

    // Check if email already exists
    $stmt = $con->prepare("SELECT * FROM logindata WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already exists'); window.location.href = 'newuserlogin.php';</script>";
    } else {
        // Insert new user
        $stmt = $con->prepare("INSERT INTO logindata (email, number, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $number, $password);

        if ($stmt->execute()) {
            echo "<script>alert('Sign up successful. You can now log in.'); window.location.href = 'userlogin.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
    $con->close();
} else {
    echo "Form not submitted correctly.";
}
?>