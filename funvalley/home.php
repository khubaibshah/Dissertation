<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<!doctype html>
<html lang="en" class="no-js">
<head>

<!--pdf links -->
    <meta charset="UTF-8">
    <title>Simple Example of PDF file using PHP and MySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <!--link for icons for facebook instagram messeging in footer-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <title>Funvalley Website</title>
</head>
<body>
<header class="cd-header">
    <div class="cd-logo"><a href="index.html"><img src="img/fvlogo.png" width="250px" style="padding-top: 20px;" alt="Logo"></a></div>

    <nav>
        <ul class="cd-secondary-nav">
            <li><a href="logout.php">Log out</a><li>
        </ul>
    </nav> <!-- cd-nav -->
    <a class="cd-primary-nav-trigger" href="#0">
      
    </a> <!-- cd-primary-nav-trigger -->
</header>

<nav>
    <ul class="cd-primary-nav">

        <li class="cd-label">Home</li>
        <li><a href="index.html">Home page</a></li>

        <li class="cd-label">Account</li>
        <li><a href="logout.php">Log out</a><li>



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

<section class="cd-intro6">
    <h1><font size="9"> <center><h3>Welcome <?php echo $row['name']; ?>! </h3></center></font></h1>
</section>




<div class="book" style="padding-left: 150px;padding-top: 200px;">

    <style>
        .button {
            background-color: cornflowerblue;x
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
        }

        .button1:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
    </style>



    <h2>Click the button below to get Customer Booking details</h2><br>

    <a href="crud2/index.php"> <button class="button button1">Bookings made</button>



</div>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>

