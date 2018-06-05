<?php
session_start();
// Checking second page values for empty, If it finds any blank field then redirected to second page.
if (isset($_POST['childsage'])){
    if (empty($_POST['childsage'])
        || empty($_POST['childrenattending'])
        || empty($_POST['childsname'])
        || empty($_POST['morf'])){
        $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again"; // Setting error message.
        header("location: page2_form.php"); // Redirecting to second page.
    } else {
        // Fetching all values posted from second page and storing it in variable.
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
    }
} else {
    if (empty($_SESSION['error_page3'])) {
        header("location: page1_form.php");// Redirecting to first page.
    }

}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../css/style.css"> <!-- Resource style -->
    <script src="../js/modernizr.js"></script> <!-- Modernizr -->


</head>

<header class="cd-header">
    <div class="cd-logo"><a href="../index.html"><img src="../img/fvlogo.png" width="250px" style="
    padding-top: 20px;" alt="Logo"></a></div>

    <nav>
        <ul class="cd-secondary-nav">
            <li><a href="../loginpage.php">Log In</a></li>

        </ul>
    </nav> <!-- cd-nav -->

    <a class="cd-primary-nav-trigger" href="#0">
        <span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
    </a> <!-- cd-primary-nav-trigger -->
</header>

<nav>
    <ul class="cd-primary-nav">

        <li class="cd-label">Home</li>
        <li><a href="../index.html">Home page</a></li>


        <li class="cd-label">Account</li>

        <li><a href="../loginpage.php">Log In</a></li>
        <li><a href="#0">Register</a></li>

        <li class="cd-label">Home</li>
        <li><a href="../index.html">Home page</a></li>

        <li class="cd-label">Book now!</li>

        <li><a href="../Bookparty.php">Party Booking</a></li>


        <li class="cd-label">Contact </li>

        <li><a href="../Contact.html">Contact </a></li>
        <li><a href="../Findus.html">Find Us</a></li>
        <li><a href="../Enquiries.html">Enquiries</a></li>
        <li><a href="../Vacancies.html">Vacancies</a></li>

        <li class="cd-label">Follow us</li>


        <li class="cd-social cd-facebook"><a href="https://en-gb.facebook.com/funvalleyboltonteam/">Facebook</a></li>
        <li class="cd-social cd-instagram"><a href="https://www.instagram.com/funvalley_bolton">Instagram</a></li>
    </ul>
</nav>


<head>
    <title>PHP Multi Page Form</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
    <div class="main">
        <h2>Your Details</h2><hr/>
        <span id="error">
 <?php
 if (!empty($_SESSION['error_page3'])) {
     echo $_SESSION['error_page3'];
     unset($_SESSION['error_page3']);
 }
 ?>
 </span>
        <form action="page4_form.php" method="post">
            <label>Full Name :<span>*</span></label>
            <input name="name" type="text" placeholder="Full name" required>

            <label>Contact Number :<span>*</span></label>
            <input name="contact" type="text" placeholder="10-digit number" required>

            <label>Email :<span>*</span></label>
            <input name="email" type="email" placeholder="Ex-anderson@gmail.com" required>

            <label>Number of parents in attendance:<span>*</span></label>
            <input name="adultsinattendance" type="text" placeholder="£5 charge for each extra adults" required>

            <label>Address Line 1 :</label>
            <input name="address1" id="address2" type="text" size="50" placeholder=" Home address" required>

            <label>City/Town :<span>*</span></label>
            <input name="citytown" id="city" type="text" size="25" placeholder="City/town" required>

            <label>Post Code :<span>*</span></label>
            <input name="postcode" id="pin" type="text" size="10" placeholder="E.g BL1 8DT"required>

            <input type="reset" value="Reset" />
            <input name="submit" type="submit" value="Submit" />
        </form>
    </div>
</div>
<footer class="footer-distributed">

    <div class="footer-left">

        <h3><a href="../index.html"><img src="../img/fvlogo.png" width="200px" height="100px" alt="Logo"></a></h3>

        <p class="footer-links">
            <a href="../index.html">Home</a>
            ·
            <a href="#">Blog</a>
            ·
            <a href="#">Pricing</a>
            ·
            <a href="#">About</a>
            ·
            <a href="#">Faq</a>
            ·
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Funvalley &copy; 2018</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>
            224 Blackburn Road, Unit 3.
            BL1 8DT</span>
                Bolton, Greater Manchester</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>01204 397665</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:parties.funvalleybolton@gmail.com">parties.funvalleybolton@gmail.com
                </a></p>        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>Fun Valley Play Center</span>
            Play Time... All the Time!
            Indoor Soft Play Centre

        </p>


        <div class="footer-icons">

            <a href="https://en-gb.facebook.com/funvalleyboltonteam/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/funvalley_bolton"><i class="fa fa-instagram"></i></a>


        </div>

    </div>

</footer>

<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>

