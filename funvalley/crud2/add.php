
<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("db_connect.php");

if(isset($_POST['Submit'])) {
    $partydate = $_POST['partydate'];
    $partytime = $_POST['partytime'];
    $partybag = $_POST['partybag'];
    $partyfoodselection1 = $_POST['partyfoodselection1'];
    $partyfoodselection2 = $_POST['partyfoodselection2'];
    $icecream = $_POST['icecream'];
    $foodplatters = $_POST['foodplatters'];
    $springrolls = $_POST['springrolls'];
    $sandwiches = $_POST['sandwiches'];
    $childsname = $_POST['childsname'];
    $childsage = $_POST['childsage'];
    $morf = $_POST['morf'];
    $childrenattending = $_POST['childrenattending'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address1 = $_POST['address1'];
    $postcode = $_POST['postcode'];
    $adultsinattendance = $_POST['adultsinattendance'];
    $citytown = $_POST['citytown'];

    // checking empty fields
    if(empty($partydate) || empty($partytime) || empty($partybag) || empty($partyfoodselection1) || empty($partyfoodselection2) || empty($icecream) || empty($foodplatters) || empty($springrolls) || empty($sandwiches) || empty($childsname) || empty($childsage) || empty($morf) || empty($childrenattending) || empty($name) || empty($contact) || empty($email) || empty($address1) || empty($postcode) || empty($adultsinattendance) || empty($citytown)){
        if(empty($partydate)) {
            echo "<font color='red'>partydate field is empty.</font><br/>";
        }
        if(empty($partytime)) {
            echo "<font color='red'>partytime field is empty.</font><br/>";
        }
        if(empty($partybag)) {
            echo "<font color='red'>partybag field is empty.</font><br/>";
        }
        if(empty($partyfoodselection1)) {
            echo "<font color='red'>partyfoodselection1 field is empty.</font><br/>";
        }
        if(empty($partyfoodselection2)) {
            echo "<font color='red'>partyfoodselection2 field is empty.</font><br/>";
        }
        if(empty($icecream)) {
            echo "<font color='red'>icecream field is empty.</font><br/>";
        }
        if(empty($foodplatters)) {
            echo "<font color='red'>foodplatters field is empty.</font><br/>";
        }
        if(empty($springrolls)) {
            echo "<font color='red'>springrolls field is empty.</font><br/>";
        }
        if(empty($sandwiches)) {
            echo "<font color='red'>sandwiches field is empty.</font><br/>";
        }
        if(empty($childsname)) {
            echo "<font color='red'>childsname field is empty.</font><br/>";
        }
        if(empty($childsage)) {
            echo "<font color='red'>childsage field is empty.</font><br/>";
        }
        if(empty($morf)) {
            echo "<font color='red'>morf field is empty.</font><br/>";
        }
        if(empty($childrenattending)) {
            echo "<font color='red'>childrenattending field is empty.</font><br/>";
        }
        if(empty($name)) {
            echo "<font color='red'>name field is empty.</font><br/>";
        }
        if(empty($contact)) {
            echo "<font color='red'>contact field is empty.</font><br/>";
        }
        if(empty($email)) {
            echo "<font color='red'>email field is empty.</font><br/>";
        }
        if(empty($address1)) {
            echo "<font color='red'>address1 field is empty.</font><br/>";
        }
        if(empty($postcode)) {
            echo "<font color='red'>postcode field is empty.</font><br/>";
        }
        if(empty($adultsinattendance)) {
            echo "<font color='red'>adultsinattendance field is empty.</font><br/>";
        }
        if(empty($citytown)) {
            echo "<font color='red'>citytown field is empty.</font><br/>";
        }

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO funvalley (partydate,partytime,partybag,partyfoodselection1,partyfoodselection2,icecream,foodplatters,springrolls,sandwiches,childsname,childsage,morf,childrenattending,name,contact,email,address1,postcode,adultsinattendance,citytown) VALUES(' $partydate ','$partytime','$partybag',' $partyfoodselection1','$partyfoodselection2','$icecream','$foodplatters','$springrolls','$sandwiches','$childsname','$childsage','$morf','$childrenattending','$name','$contact','$email','$address1','$postcode','$adultsinattendance','$citytown')");

        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>