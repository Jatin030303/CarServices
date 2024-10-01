<?php
?>
    <title>Login </title>
    <link rel="Shortcut icon" href="../images/login.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/olduser.css">

<div class="box">
        <span class="boderLine"></span>
        <form id="myForm" method="post" action="check_login.php">
            <h2>Sign in</h2>
            <div class="inputBox">
                <input type="email" name="femail" required="required">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="tel" name="fnumber" required="required">
                <span>Number</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="fpassword" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="./newuserlogin.php">Sign Up</a>
            </div>
            <input type="submit" name="submit" value="Login">
        </form>
