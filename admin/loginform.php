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
    <link rel="stylesheet" href="./css/login.css">
<div class="box">
    <span class="boderLine"></span>
    <form method="post" action="loginform.php">
        <h2>Sign in</h2>
        <div class="inputBox">
            <input type="text" name="username" required="required">
            <span>Username</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" name="password" required="required">
            <span>Password</span>
            <i></i>
        </div>
        <?php if ($login_error): ?>
            <div style="color: red;"><?php echo $login_error; ?></div>
        <?php endif; ?>
        <div class="links">
            <a href="#">Forgot Password</a>
            <a href="#">Sign Up</a>
        </div>
        <input type="submit" value="Login">
    </form>
</div>