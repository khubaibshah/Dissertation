<?php
require('setup.php');


$customername = $_POST['name'];
$dateofparty = $_POST['dateofparty'];
$partytime = $_POST['partytime'];
$depositpaid = $_POST['depositpaid'];
$disneycharacter = $_POST['disneycharacter'];
$birthdaychildsname = $_POST['birthdaychildsname'];
$age = $_POST['age'];
$maleorfemale = $_POST['maleorfemale'];
$partybags = $_POST['partybags'];
$totalbags = $_POST['totalbags'];
$numberofchildren = $_POST['numberofchildren'];
$numberofadults = $_POST['numberofadults'];
$address = $_POST['address'];
$telephonenumber = $_POST['telephonenumber'];
$email = $_POST['email'];
$partyfoodselection = $_POST['partyfoodselection'];


$icecream = $_POST['icecream'];
$platters = $_POST['platters'];
$subject = $_POST['subject'];
$samosas = $_POST['samosas'];

$get_form = $_POST['get_form'];

echo $partyfoodselection."<br>".$subject;

echo $customername . "<br>" . $icecream . "<br>" . $partyfoodselection;

echo "<br><h1>HELLO</h1>";


echo "<br><br><h1>Hello " . $partyfoodselection . "!</h1>";


//$insert = $mysqli->query("INSERT INTO MyGuests (name, dateofparty, partytime, depositpaid, disneycharacter, birthdaychildsname, age, maleorfemale, partybags, totalbags, numberofchildren, numberofadults, address, telephonenumber, email, partyfoodselection, icecream, platters, samosas, subject)
//VALUES ('" . $customername . "', '" . $dateofparty . "', '" . $partytime . "', '" . $depositpaid . "', '" . $disneycharacter . "',  '" . $birthdaychildsname . "', '" . $age . "',  '" . $maleorfemale . "','" . $partybags . "','" . $totalbags . "','" . $numberofchildren . "','" . $numberofadults . "','" . $address . "','" . $telephonenumber . "','" . $email . "','" . $partyfoodselection . "','" . $icecream . "','" . $platters . "','" . $samosas . "','" . $subject . "') ");

if ($get_form == "form1") {
    $insert1 = $mysqli->query("INSERT INTO form1 (name, dateofparty, partytime, depositpaid, disneycharacter, birthdaychildsname, age, maleorfemale) 
VALUES ('" . $customername . "', '" . $dateofparty . "', '" . $partytime . "', '" . $depositpaid . "', '" . $disneycharacter . "',  '" . $birthdaychildsname . "', '" . $age . "',  '" . $maleorfemale . "') ");

} else if ($get_form == "form2") {

    $insert2 = $mysqli->query("INSERT INTO form2 (partybags, totalbags, numberofchildren, numberofadults, address, telephonenumber, email, partyfoodselection) 
VALUES ('" . $partyfoodselection . "','" . $partybags . "','" . $totalbags . "','" . $numberofchildren . "','" . $numberofadults . "','" . $address . "','" . $telephonenumber . "','" . $email . "') ");
    if (!$insert2) {
        die('Error with second form! Details: ' . $mysqli->error);
    } else {
        echo "ok for form 2";
    }
} else if ($get_form == "form3") {

    $insert = $mysqli->query("INSERT INTO form3 ( icecream, platters, samosas, subject) 
VALUES ('" . $icecream . "','" . $platters . "','" . $samosas . "','" . $subject . "') ");

}
header('Location: /funvalley/Bookparty.php');


// loop over checked checkboxes


//('   "   .  $var  .    "        ',   '" .. "'         )