<!doctype html>
<html lang="en" class="no-js">
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Funvalley Website</title>
</head>
<body>
<header class="cd-header">
    <div class="cd-logo"><a href="index.html"><img src="img/fvlogo.png" width="250px" style="
    padding-top: 20px;" alt="Logo"></a></div>

    <nav>
        <ul class="cd-secondary-nav">
            <li><a href="loginpage.php">Log In</a></li>
            <li><a href="#0">Register</a></li>
        </ul>
    </nav> <!-- cd-nav -->

    <a class="cd-primary-nav-trigger" href="#0">
        <span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
    </a> <!-- cd-primary-nav-trigger -->
</header>

<nav>
    <ul class="cd-primary-nav">

        <li class="cd-label">Home</li>
        <li><a href="index.html">Home page</a></li>


        <li class="cd-label">Account</li>

        <li><a href="loginpage.php">Log In</a></li>
        <li><a href="#0">Register</a></li>


        <li class="cd-label">Book now!</li>

        <li><a href="Bookparty.php">Party Booking</a></li>


        <li class="cd-label">Contact </li>

        <li><a href="Contact.html">Contact </a></li>
        <li><a href="Findus.html">Find Us</a></li>
        <li><a href="Enquiries.html">Enquiries</a></li>
        <li><a href="Vacancies.html">Vacancies</a></li>

        <li class="cd-label">Follow us</li>


        <li class="cd-social cd-facebook"><a href="https://en-gb.facebook.com/funvalleyboltonteam/">Facebook</a></li>
        <li class="cd-social cd-instagram"><a href="https://www.instagram.com/funvalley_bolton">Instagram</a></li>
    </ul>
</nav>

<section class="cd-intro">
    <h1><font size="9">Party Booking</font></h1>
</section>

<main class="cd-main-content">
    <div class="cd-container">


    </div>
    </div>

    <h2 style="color: ;"><center><font size="9">Party reservation</font></center></h2><br><hr>


   <br> <div class="w3-content" style="max-width:1200px">
        <img class="mySlides" src="img/sspic.jpg" style="width:100%">
        <img class="mySlides" src="img/sspic4.jpg" style="width:100%">
        <img class="mySlides" src="img/sspic3.jpg" style="width:100%">

        <div class="w3-row-padding w3-section">
            <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="img/sspic.jpg" style="width:100%" onclick="currentDiv(1)">

            </div>
            <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="img/sspic4.jpg" style="width:100%" onclick="currentDiv(2)">
            </div>
            <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="img/sspic3.jpg" style="width:100%" onclick="currentDiv(3)">
            </div>
        </div>
    </div>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-opacity-off";
        }
    </script>

    <div class="row" style="padding-bottom: 30px;">

        <div class="column" style="background-color:dodgerblue;">
            <br><h2><center><font size="6">Book your party now!</font></center></h2><br><hr>
            <p style="font-size: medium;">We take the hassle out of birthday parties. That includes making it easier to schedule your party by booking online! Click the button below to start your booking!</p>


            <a href="form/page1_form.php" class="boton" style="margin-top: 100px; margin-bottom: 201px;">
                Book Now!
            </a>

            <script>
                $(window).ready(function(){
                    $(".boton").wrapInner('<div class=botontext></div>');

                    $(".botontext").clone().appendTo( $(".boton") );

                    $(".boton").append('<span class="twist"></span><span class="twist"></span><span class="twist"></span><span class="twist"></span>');

                    $(".twist").css("width", "25%").css("width", "+=3px");
                });
            </script>
        </div>
        <div class="column" style="background-color:deepskyblue;">
          <br>  <h2><center><font size="6">Party Terms & conditions</font></center></h2><br><hr>
            <p style="font-size: medium;">
                Please note that the booking you make is FREE. It is not charged as you will pay upon arrival and sign the booking form for security and validation purposes.<br>
                deposit is required on booking. If you are booking, your event less than 7 days prior to the date the full balance is necessary.<br>
                In order to receive a discount using a code, full balance must be paid at the time of booking.<br>
                Please note, when booking your party, we are unable to offer any form of refund once your final payment has been processed. Unless it is within our 30 day refund policy.<br>
                Once the deposit payment has been processed, you have agreed to the following Funvalley's Party Polices & Procedures, Terms & Conditions and Rules of Play<br>
            </p><br>
            <p style="font-size: small">* Payment is required upon arrival at Funvalley.</p>
        </div>
    </div>


    </div>
</main>
<footer class="footer-distributed">

    <div class="footer-left">

        <h3><a href="index.html"><img src="img/fvlogo.png" width="200px" height="100px" alt="Logo"></a></h3>

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

<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
