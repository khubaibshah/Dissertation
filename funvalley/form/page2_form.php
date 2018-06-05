<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (isset($_POST['partydate'])){
    if (empty($_POST['partydate'])
        || empty($_POST['partytime'])
        || empty($_POST['partybag'])
        || empty($_POST['partyfoodselection1'])
        || empty($_POST['partyfoodselection2'])
        || empty($_POST['icecream'])
        || empty($_POST['foodplatters'])
        || empty($_POST['springrolls'])
        || empty($_POST['sandwiches'])) {
        // Setting error message
        $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: page1_form.php"); // Redirecting to first page
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
        <h2>Child's Details</h2><hr/>
        <span id="error">
<?php
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
    echo $_SESSION['error_page2'];
    unset($_SESSION['error_page2']);
}
?>
 </span>
        <form action="page3_form.php" method="post">
            <label>Child's name :<span>*</span></label>
            <input name="childsname" id="childsname" type="text" value="" >

            <label>Child's age :<span>*</span></label>
            <input name="childsage" id="childsage" type="text" value="" >

            <label>Male or Female :<span>*</span></label>


            <select name="morf">
                <option value="">----Select----</option>
                <option value="male" value="">Male </option>
                <option value="female" value="">Female </option>

            </select>


            <label>Amount of children attending :<span>*</span></label>
            <input name="childrenattending" id="childrenattending"  placeholder="Min 10 - Max 25" type="text" value="" >





            <input type="reset" value="Reset" />
            <input type="submit" value="Next" />
        </form>
    </div>
</div>
<footer class="footer-distributed">

    <div class="footer-left">

        <h3><a href="../index.html"><img src="../img/fvlogo.png" width="200px" height="100px" alt="Logo"></a></h3>

        <p class="footer-links">
            <a href="../index.html">Home</a>
            ·
            <a href="Enquiries.html">About</a>
            ·
            <a href="Contact.html">Contact</a>
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


