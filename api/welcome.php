<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
    header("Location: ../index.php");
    exit();
}

// Retrieve username from session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is your dashboard. You can start exploring our website and enjoy our features.</p>
    <p>Here are some things you can do:</p>
    <ul>
        <li><a href="profile.php">View/Edit Profile</a></li>
        <li><a href="settings.php">Account Settings</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>