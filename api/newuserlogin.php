    <?php
    ?>
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/newuser.css">
    <link rel="Shortcut icon" href="../images/login.png" type="image/x-icon">

    <div class="box">
        <span class="boderLine"></span>
        <form id="signUpForm" method="post" action="signup.php">
        <h2>Create New Account</h2>
            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="tel" name="number" required="required">
                <span>Enter Number</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="confirm_password" required="required">
                <span>Confirm Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#"></a>
                <a href="./userlogin.php">Sign in</a>
            </div>
            <input type="submit" name="submit" value="Sign Up">
        </form>