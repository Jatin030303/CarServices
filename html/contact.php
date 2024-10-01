<?php
?>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="Shortcut icon" href="./engine_image/phone.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">

<header class="header">
        <div class="container1">
    
            <a href="#" class="logo">
                <img src="./engine_image/logo.png" width="128" height="63" alt="autofix home">
            </a>
    
            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li>
                        <a href="../index.php" class="navbar-link">Home<span></span></a>
                    </li>
    
                    <li>
                        <a href="./about.php" class="navbar-link">About<span></span></a>
                    </li>
    
                    <li>
                        <a href="#" class="navbar-link">Services<span></span></a>
                    </li>
    
                    <li>
                        <a href="./gallery.php" class="navbar-link">Gallery<span></span></a>
                    </li>
    
                    <li>
                        <a href="./contact.php" class="navbar-link">Contact<span></span></a>
                    </li>
                    
                </ul>
            </nav>
    
            <a href="./loginform.php" class="btn1">
                <span class="span">Login</span>
                <div class="liquid"></div>
            </a>
    
            <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
                <span class="nav-toggle-icon icon-1"></span>
                <span class="nav-toggle-icon icon-2"></span>
                <span class="nav-toggle-icon icon-3"></span>
            </button>
        </div>
    </header> 
    <section class="contact">
        <div class="content">
            <h2><B>Contact Us</B></h2>
            <p>At <strong>AutoCare-Pro</strong>, we are dedicated to providing exceptional support and service to all our users. Whether you have a question, need assistance, or want to provide feedback, our team is here to help. Please use following methods to get in touch with us: </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-street-view" aria-hidden="true"></i></div>
                    <div class="text">
                       <h3><strong>Location</strong></h3>
                       <p><b>Headquarters:</b><strong>AutoCare-Pro Inc.</strong>1234 Main Street Cityville, ST 12345 HP</p> 
                    </div>
                </div>
                        <div class="box">
                            <div class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                            <div class="text">
                               <h3><strong>Support</strong></h3>
                               <p>+91 8874625361</p> 
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="text">
                               <h3><strong>Support</strong> </h3>
                               <p>ajautocare@gmail.com</p> 
                            </div>
                        </div>
            </div>
            <div class="contactForm">
                <form id="myForm" method="post" action="../api/submit_feedback.php">
                    <h2><strong>Send Message </strong></h2>
                    <div class="inputbox">
                      <input type="text" name="fname" required="required">
                      <span>Full Name</span> 
                    </div>
                    <div class="inputbox">
                        <input type="email" name="femail" required="required">
                        <span>Email</span> 
                      </div>
                      <div class="inputbox">
                        <textarea required="required" name="fmessage_type"></textarea>
                        <span>Type your message</span> 

                      </div>
                      <div class="inputbox">
                       <input type="submit" name="submit" value="Send" class="submit_btn">
                        <span>Type your message</span> 
                        
         </div>
                </form>
            </div>
        </div>
    </section>
    <?php
      include '../include/footer.php';
      ?>
