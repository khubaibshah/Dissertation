<!DOCTYPE HTML>
<html>
<head>
    <title>PHP Multi Page Form</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
    <div class="main">
        <h2>PHP Multi Page Form</h2>
        <?php
        require('db_connect.php');
        session_start();
        if (isset($_POST['name'])) {
            if (!empty($_SESSION['post'])){
                if (empty($_POST['email'])
                    || empty($_POST['contact'])
                    || empty($_POST['adultsinattendance'])
                    || empty($_POST['postcode'])
                    || empty($_POST['citytown'])
                    || empty($_POST['address1'])
                    || empty($_POST['name'])){
                    // Setting error for page 3.
                    $_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
                    header("location: page3_form.php"); // Redirecting to third page.
                } else {
                    foreach ($_POST as $key => $value) {
                        $_SESSION['post'][$key] = $value;
                    }
                    extract($_SESSION['post']); // Function to extract array.

                    $insert = $mysqli->query("INSERT INTO funvalley (partydate,partytime,partybag,partyfoodselection1,partyfoodselection2,icecream,foodplatters,springrolls,sandwiches,childsname,childrenattending,childsage,morf,email,address1,contact,postcode,name,adultsinattendance,citytown) 
VALUES ('" . $partydate . "','" . $partytime . "','" . $partybag . "','" . $partyfoodselection1 . "','" . $partyfoodselection2 . "','" . $icecream . "','" . $foodplatters . "','" . $springrolls . "','" . $sandwiches . "','" . $childsname . "','" . $childrenattending . "','" . $childsage . "','" . $morf . "','" . $email . "' ,'" . $address1 . "' ,'" . $contact . "' ,'" . $postcode . "' ,'" . $name . "' ,'" . $adultsinattendance . "','" . $citytown . "' ) ");


                    if ($insert) {
                        echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
                        header("location: Successpage.php"); // Redirecting to first page.
                    } else {
                        echo '<p><span>Form Submission Failed..!!</span></p>';
                    }
                    unset($_SESSION['post']); // Destroying session.
                }
            } else {
                header("location: page1_form.php"); // Redirecting to first page.
            }
        } else {
            header("location: page1_form.php"); // Redirecting to first page.
        }
        ?>
    </div>
</div>
</body>
</html>