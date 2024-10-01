<?php
session_start();

$login_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple validation (replace with database validation in a real application)
    $valid_username = 'admin';
    $valid_password = 'password123';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        header('Location: admin_dashboard.php');
        exit;
    } else {
        $login_error = 'Invalid username or password';
    }
}
?>
  <title>Login </title>
    <link rel="stylesheet" href="./css/profile.css">


<div class="box">
    <span class="boderLine"></span>
    <form method="post" action="profile.php">
        <h2>Administrator</h2>
        <div class="inputBox">
            <input type="text" name="fname" required="required">
            <span>First Name</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="text" name="flastname" required="required">
            <span>Last Name</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="text" name="fuser" required="required">
            <span>User Name</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" name="password" required="required">
            <span> New Password</span>
            <i></i>
        </div>
        <div class="avtar">
        <span style="margin-left:8px;">Avatar</span>
            <input type="file" name="ffile" id = "file" required="required">
           
            <i></i>
        </div>
        <?php if ($login_error): ?>
            <div style="color: red;"><?php echo $login_error; ?></div>
        <?php endif; ?>
        <input type="submit" value="Login">
    </form>
</div>
