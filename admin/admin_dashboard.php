
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: loginform.php');
    exit;
}
?>
<link rel="Shortcut icon" href="./img/admm.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Admin Panel</title>
    <div class="side-menu">
        <div class="brand-name">
            <li><img src="./img/logo.png" style="height: 50px;" alt=""></li>
            <h1>AutoCare-Pro</h1>
        </div>
        <ul>
            <li><img src="./img/dashboard.png" style="height: 50px;" alt="">&nbsp; <span><a href="admin_dashboard.php">Dashboard</a></span></li>
            <li><img src="./img/service2.png" style="height: 50px;" alt="">&nbsp;<span><a href="./service_req/service_dashboard.php">Service Request</a></span></li>
            <li><img src="./img/mechanic1.png" style="height: 50px;" alt="">&nbsp;<span><a href="./mechanic_list/mechanic_dashboard.php">Mechanic List</a></span></li>
            <li><img src="./img/driver.png" style="height: 50px;" alt="">&nbsp;<span><a href="./driver/driver_dashboard.php">Driver</a></span></li>
            <li><img src="./img/feedback.png" style="height: 50px;" alt="">&nbsp;<span><a href="./feedback/feedback_dashboard.php">Feedback</a></span></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="./img/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn" id="admin-btn">Administrator Admin</a>
                    <div class="img-case">
                        <img src="./img/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Total Category</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./img/category.png" style="height: 70px;" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>7</h1>
                        <a href = "./mechanic_list/mechanic_dashboard.php"><h3>Mechanics</h3></a>
                    </div>
                    <div class="icon-case">
                        <img src="./img/mechanic.png" style="height: 110px;" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>10</h1>
                        <a href = "./service_req/service_dashboard.php"><h3>Services</h3></a>
                    </div>
                    <div class="icon-case">
                        <img src="./img/service.png" style="height: 100px;" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>20</h1>
                        <h3>Finished Requests</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./img/finished.png" style="height: 70px;" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>10</h1>
                        <a href = "./driver/driver_dashboard.php"><h3>Driver</h3></a>
                    </div>
                    <div class="icon-case">
                        <img src="./img/driverr.png" style="height: 100px;" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>10</h1>
                        <a href = "./feedback/feedback_dashboard.php"><h3>Feedback</h3></a>
                    </div>
                    <div class="icon-case">
                        <img src="./img/feedbackk.png" style="height: 100px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dialog Box for Options -->
    <div id="options-dialog" class="dialog">
        <div class="dialog-content">
            <span class="close-btn" id="options-close-btn">&times;</span>
            <a href ="profile.php">  <button class="btn" id="my-account-btn">My Account</button></a>
           <a href ="loginform.php"> <button class="btn" id="logout-btn">Logout</button></a>
        </div>
    </div>

    <!-- Dialog Box for My Account -->
    <script src="./script/admin.js"></script>