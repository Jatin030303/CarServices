<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $email = $_POST['femail'];
    $number = $_POST['fnumber'];
    $password = $_POST['fpassword'];

    if ($email && $number && $password) {
        // Prepare an insert statement
        $stmt = $con->prepare("INSERT INTO logindata (email, number, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $number, $password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('New record inserted')</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "All fields are required!";
    }

    // Close the connection
    mysqli_close($con);
} else {
    echo "Form not submitted correctly.";
}
?>