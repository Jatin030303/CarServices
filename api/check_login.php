<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $email = $_POST['femail'];
    $password = $_POST['fpassword'];

    // Check if user exists
    $stmt = $con->prepare("SELECT * FROM logindata WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // User exists, now check the password
        $row = $result->fetch_assoc();
        if ($row['password'] === $password) {
            echo "<script>alert('Login successful'); window.location.href = 'welcome.php';</script>";
        } else {
            echo "<script>alert('Incorrect password'); window.location.href = 'userlogin.php';</script>";
        }
    } else {
        // User does not exist
        echo "<script>alert('User does not exist. Please sign up first.'); window.location.href = 'newuserlogin.php';</script>";
    }

    $stmt->close();
    $con->close();
}
?>