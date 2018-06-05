<?php
session_start(); // Session starts here.
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


    <title>PHP Multi Page Form</title>
    <link rel="stylesheet" href="style.css"/>

<body>
<div class="container">
    <div class="main">
        <h2>Party Details</h2><hr>
        <span id="error">
 <!---- Initializing Session for errors --->
            <?php
            if (!empty($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
 </span>

        <form action="page2_form.php" method="post">
            <label>Party Date :<span>*</span></label>
            <input name="partydate" type="date" placeholder="Ex-James Anderson" required>
            <label>Pick a Party time :<span>*</span></label>
            <select name="partytime">
                <option value="">----Select----</option>
                <option value="10:00-12:00" value="">10:00-12:00 </option>
                <option value="13:00-15:00 " value="">13:00-15:00 </option>
                <option value="16:00-18:00" value="">16:00-18:00</option>
            </select>
            <label>Partybag required? :<span>*</span></label>
            <input type="radio" name="partybag" value="Yes" required>Yes
            <input type="radio" name="partybag" value="No">No<br>


            <label>Children Food options:</label><br>
            <label>Party food selection : Option(s) 1:<span>*</span></label>
            <select name="partyfoodselection1">
                <option value="">----Select----</option>
                <option value="None" value="">None </option>
                <option value="Chicken nuggets (Standard Pizza slice fries and squash)" value="">Chicken nuggets (Standard Pizza slice fries and squash) </option>
                <option value="Fish fingers (Standard Pizza slice fries and squash)" value="">Fish fingers (Standard Pizza slice fries and squash) </option>
                <option value="Veg fingers (Standard Pizza slice fries and squash)" value="">Veg fingers (Standard Pizza slice fries and squash)</option>
            </select>

            <label>Party food selection : Option(s) 2:<span>*</span></label>
            <select name="partyfoodselection2">
                <option value="">----Select----</option>
                <option value="None" value="">None </option>
                <option value="Beans (Standard Pizza slice fries and squash)" value="">Beans (Standard Pizza slice fries and squash) </option>
                <option value="Spaghetti (Standard Pizza slice fries and squash)" value="">Spaghetti (Standard Pizza slice fries and squash) </option>
                <option value="Sweetcorn (Standard Pizza slice fries and squash)" value="">Sweetcorn (Standard Pizza slice fries and squash)</option>
            </select>

            <label>Ice cream:<span>*</span></label>
            <select name="icecream">
                <option value="">----Select----</option>
                <option value="None" value="">None </option>
                <option value="Bubblegum" value="">Bubblegum </option>
                <option value="Vanilla" value="">Vanilla </option>
                <option value="Chocolate" value="">Chocolate</option>
            </select>

            <label>Adult Food Options:</label><br>
            <label>Pre-order (Extra Charge):<span>*</span></label><br>
            <label>Samosas:<span>*</span></label>
            <select name="foodplatters">
                <option value="">----Select----</option>
                <option value="None" value="">None </option>
                <option value="Vegetable" value="">Vegetable</option>
                <option value="Meat" value="">Meat </option>
                <option value="Chicken" value="">Chicken</option>
            </select>

            <label>Spring-rolls:<span>*</span></label>
            <select name="springrolls">
                <option value="">----Select----</option>

                <option value="Yes" value="">Yes </option>
                <option value="No" value="">No </option>

            </select>

            <label>Sandwiches:<span>*</span></label>
            <select name="sandwiches">
                <option value="">----Select----</option>
                <option value="Tuna" value="">Tuna</option>
                <option value="Tuna Sweetcorn" value="">Tuna Sweetcorn</option>
                <option value="Egg Mayo" value="">Egg Mayo </option>
                <option value="Cheese & Onion" value="">Cheese & Onion</option>
                <option value="Cheese & Salad" value="">Cheese & Salad</option>
                <option value="Salad" value="">Salad</option>
            </select>

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

<!--<footer class="footer-distributed">-->
<!---->
<!--    <div class="footer-left">-->
<!---->
<!--        <h3><a href="../index.html"><img src="../img/fvlogo.png" width="200px" height="100px" alt="Logo"></a></h3>-->
<!---->
<!--        <p class="footer-links">-->
<!--            <a href="../index.html">Home</a>-->
<!--            ·-->
<!--            <a href="#">Blog</a>-->
<!--            ·-->
<!--            <a href="#">Pricing</a>-->
<!--            ·-->
<!--            <a href="#">About</a>-->
<!--            ·-->
<!--            <a href="#">Faq</a>-->
<!--            ·-->
<!--            <a href="#">Contact</a>-->
<!--        </p>-->
<!---->
<!--        <p class="footer-company-name">Funvalley &copy; 2018</p>-->
<!--    </div>-->
<!---->
<!--    <div class="footer-center">-->
<!---->
<!--        <div>-->
<!--            <i class="fa fa-map-marker"></i>-->
<!--            <p><span>-->
<!--            224 Blackburn Road, Unit 3.-->
<!--            BL1 8DT</span>-->
<!--                Bolton, Greater Manchester</p>-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <i class="fa fa-phone"></i>-->
<!--            <p>01204 397665</p>-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <i class="fa fa-envelope"></i>-->
<!--            <p><a href="mailto:parties.funvalleybolton@gmail.com">parties.funvalleybolton@gmail.com-->
<!--                </a></p>        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="footer-right">-->
<!---->
<!--        <p class="footer-company-about">-->
<!--            <span>Fun Valley Play Center</span>-->
<!--            Play Time... All the Time!-->
<!--            Indoor Soft Play Centre-->
<!---->
<!--        </p>-->
<!---->
<!---->
<!--        <div class="footer-icons">-->
<!---->
<!--            <a href="https://en-gb.facebook.com/funvalleyboltonteam/"><i class="fa fa-facebook"></i></a>-->
<!--            <a href="https://www.instagram.com/funvalley_bolton"><i class="fa fa-instagram"></i></a>-->
<!---->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</footer>-->

<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>



<!--1. OKAY SO WHAT I NEED TO DO IS PUT PAGE 1 OFF THIS FROM INTO PARTY BOOKING PAGE BUT ONLY THAT PAGE AND THEN ADD THE OTHER 3 PAGES OF THE FORM SO IT REDIRECTS TO THEM-->
<!--EVERYTIME AND FORM 4 REDIRECTS TO THE HOME PAGE OR-->
<!--3. PUT A LINK ON THE SUBMISSION SUCCESSFUL PAGE SAYING CLICK TO GO TO HOME PAGE BUT ALSO REMEBER TO PUT NAV BAR ON EACH PAGE SOMEHOW AND MAKE SURE I ACTUALLY DO THIS SHIT-->
<!--2 . AND ALSO ADD PHP PROGRESSION BAR-->