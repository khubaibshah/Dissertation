<?php
// including the database connection file
include_once("db_connect.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $id = $_POST['id'];
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
            echo "<font color='red'>name of adult field is empty.</font><br/>";
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
    } else {
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE funvalley SET 

partydate='$partydate',
partytime='$partytime',
partybag='$partybag',
partyfoodselection1='$partyfoodselection1',
partyfoodselection2='$partyfoodselection2',
icecream='$icecream',
foodplatters='$foodplatters',
springrolls='$springrolls',
sandwiches='$sandwiches',
childsname='$childsname',
childsage='$childsage',
morf='$morf',
childrenattending='$childrenattending',
name='$name',
contact='$contact',
email='$email',
address1='$address1',
postcode='$postcode',
adultsinattendance='$adultsinattendance',
citytown='$citytown'
 
  WHERE id=$id");

        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM funvalley WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $partydate = $res['partydate'];
    $partytime = $res['partytime'];
    $partybag = $res['partybag'];
    $partyfoodselection1 = $res['partyfoodselection1'];
    $partyfoodselection2 = $res['partyfoodselection2'];
    $icecream = $res['icecream'];
    $foodplatters = $res['foodplatters'];
    $springrolls = $res['springrolls'];
    $sandwiches = $res['sandwiches'];
    $childsname = $res['childsname'];
    $childsage = $res['childsage'];
    $morf = $res['morf'];
    $childrenattending = $res['childrenattending'];
    $name = $res['name'];
    $contact = $res['contact'];
    $email = $res['email'];
    $address1 = $res['address1'];
    $postcode = $res['postcode'];
    $adultsinattendance = $res['adultsinattendance'];
    $citytown = $res['citytown'];

}
?>
<html>
<head>
    <title>Edit Data</title>

    <link rel="stylesheet" href="sqltable.css" />
</head>

<body>
<a href="index.php" style="text-decoration: none;" class="button button2">Bookings</a>
<br/><br/>

<form name="form1" method="post" action="edit.php">
    <table >
        <tr>

            <td><label>User ID: <?php echo $id;?></label></td>
            <td><label type="text" name="id" value="<?php echo $id;?>"></td>
        </tr>
        <tr>
            <td>Party date</td>

            <td><label>Party date original :  <?php echo $partydate;?></label><br><br>
            <input type="date" name="partydate" value="<?php echo $partydate;?>"></td>
        </tr>
        <tr>
            <td>Party time</td>
            <td><label>Partytime original :  <?php echo $partytime;?></label><br><br>
            <select name="partytime" value="<?php echo $partytime;?>">
                <option value="">----Select----</option>
                <option value="10:00-12:00" value="">10:00-12:00 </option>
                <option value="13:00-15:00 " value="">13:00-15:00 </option>
                <option value="16:00-18:00" value="">16:00-18:00</option>
            </select></td>
        </tr>
        <tr>
            <td>Party bag</td>
            <td><label>Party bag original :  <?php echo $partybag;?></label><br><br>

            <input type="radio" name="partybag" value="Yes" required>Yes
                <input type="radio" name="partybag" value="No">No<br></td>
        </tr>
        <tr>
            <td>Party food selection 1</td>
            <td><label>Party food selection 1 original :  <?php echo $partyfoodselection1;?></label><br><br>
            <select name="partyfoodselection1">
                    <option value="">----Select----</option>
                    <option value="None" value="">None </option>
                    <option value="Chicken nuggets (Standard Pizza slice fries and squash)" value="">Chicken nuggets (Standard Pizza slice fries and squash) </option>
                    <option value="Fish fingers (Standard Pizza slice fries and squash)" value="">Fish fingers (Standard Pizza slice fries and squash) </option>
                    <option value="Veg fingers (Standard Pizza slice fries and squash)" value="">Veg fingers (Standard Pizza slice fries and squash)</option>
                </select></td>
        </tr>
        <tr>
            <td>Party food selection 2</td>
            <td><label>Party food selection 2 original :  <?php echo $partyfoodselection2;?></label><br><br>
            <select name="partyfoodselection2">
                    <option value="">----Select----</option>
                    <option value="None" value="">None </option>
                    <option value="Beans (Standard Pizza slice fries and squash)" value="">Beans (Standard Pizza slice fries and squash) </option>
                    <option value="Spaghetti (Standard Pizza slice fries and squash)" value="">Spaghetti (Standard Pizza slice fries and squash) </option>
                    <option value="Sweetcorn (Standard Pizza slice fries and squash)" value="">Sweetcorn (Standard Pizza slice fries and squash)</option>
                </select></td>

        </tr>
        <tr>
            <td>Icecream</td>
            <td><label>Ice cream original :  <?php echo $icecream;?></label><br><br>
            <select name="icecream">
                    <option value="">----Select----</option>
                    <option value="None" value="">None </option>
                    <option value="Bubblegum" value="">Bubblegum </option>
                    <option value="Vanilla" value="">Vanilla </option>
                    <option value="Chocolate" value="">Chocolate</option>
                </select></td>
        </tr>
        <tr>
            <td>Food platters</td>
            <td><label>Food platter original :  <?php echo $foodplatters;?></label><br><br>
                <select name="foodplatters">
                    <option value="">----Select----</option>
                    <option value="None" value="">None </option>
                    <option value="Vegetable" value="">Vegetable</option>
                    <option value="Meat" value="">Meat </option>
                    <option value="Chicken" value="">Chicken</option>
                </select></td>
        </tr>
        <tr>
            <td>Spring rolls</td>
            <td><label>Spring Rolls original :  <?php echo $springrolls;?></label><br><br>
            <select name="springrolls">
                <option value="">----Select----</option>
                <option value="Yes" value="">Yes </option>
                <option value="No" value="">No </option>
            </select></td>
        </tr>
        <tr>
            <td>Sand wiches</td>
            <td><label>Sandwiches original :  <?php echo $sandwiches;?></label><br><br>
            <select name="sandwiches">
                    <option value="">----Select----</option>
                    <option value="Tuna" value="">Tuna</option>
                    <option value="Tuna Sweetcorn" value="">Tuna Sweetcorn</option>
                    <option value="Egg Mayo" value="">Egg Mayo </option>
                    <option value="Cheese & Onion" value="">Cheese & Onion</option>
                    <option value="Cheese & Salad" value="">Cheese & Salad</option>
                    <option value="Salad" value="">Salad</option>
                </select></td>
        </tr>
        <tr>
            <td>Childs name</td>
            <td><input type="text" name="childsname" value="<?php echo $childsname;?>" required></td>
        </tr>
        <tr>
            <td>Childs age</td>
            <td><input type="text" name="childsage" value="<?php echo $childsage;?>" required></td>
        </tr>

        <tr>
            <td>Childs gender</td>
            <td><label>Child's gender :  <?php echo $morf;?></label><br><br>

            <select name="morf">
                    <option value="">----Select----</option>
                    <option value="male" value="">Male </option>
                    <option value="female" value="">Female </option>

                </select>
            </td>
        </tr>
        <tr>
            <td>Children attending</td>
            <td><input type="text" name="childrenattending" value="<?php echo $childrenattending;?>" required></td>
        </tr>
        <tr>
            <td>Name of adult</td>
            <td><input type="text" name="name" value="<?php echo $name;?>" required></td>
        </tr>
        <tr>
            <td>Contact number</td>
            <td><input type="text" name="contact" value="<?php echo $contact;?>"required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $email;?>"required></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><input type="text" name="address1" value="<?php echo $address1;?>"required></td>
        </tr>

        <tr>
            <td>Postcode</td>
            <td><input type="text" name="postcode" value="<?php echo $postcode;?>"required></td>
        </tr>

        <tr>
            <td>Number of adults attending</td>
            <td><input type="text" name="adultsinattendance" value="<?php echo $adultsinattendance;?>"required></td>
        </tr>


        <tr>
            <td> City/Town</td>
            <td><input type="text" name="citytown" value="<?php echo $citytown;?>"required></td>
        </tr>

        <tr>


            <td><label>User ID: <?php echo $id;?></label>
            <label type="text" name="id" value="<?php echo $id;?>"></td>

            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
            <td><input  class="button button2"type="submit" name="update" value="Update" onclick="myFunction()"></td>
        </tr>
    </table>

    <script>
        function myFunction() {
            alert( <?php echo $_GET['id'];?>);
          //alert(<?php //echo $_GET['id'];?>//);
        }
    </script>
</form>
</body>
</html>