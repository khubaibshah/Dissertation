
<?php
//including the database connection file
include_once("db_connect.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM funvalley ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="sqltable.css" />
</head>

<body>
 <a href="../home.php" style="text-decoration: none;" class="button button2">Admin home page</a><a href="add.html" style="text-decoration: none;" class="button button2">Add New Booking</a>

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search customer using ID" title="Type in a id" style="
    width: 420px;
    height: 60px; float: right; margin-top: 5px"><br/><br/>
<div style="overflow-x:auto;">
    <table id="myTable" style="border-radius: 25px;">
        <tr>
            <th>Update</th>
            <th>ID</th>
            <th>Party date</th>
            <th>Party time</th>
            <th>Party bag</th>
            <th>Party food selection 1</th>
            <th>Party food selection 2</th>
            <th>Ice cream</th>
            <th>Food platters</th>
            <th>Spring rolls</th>
            <th>Sandwiches</th>
            <th>Child sname</th>
            <th>Child sage</th>
            <th>Male or female</th>
            <th>Children attending</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Postcode</th>
            <th>Adults in attendance</th>
            <th>City/town</th>
        </tr>
</div>


    </div>
        <?php
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
        while($res = mysqli_fetch_array($result)) {

            echo "<tr>";
            echo "<td><a  class=\"button button2\" style=\"text-decoration: none;\" href=\"edit.php?id=$res[id]\">Edit</a>  <a class=\"button button2\"style=\"text-decoration: none;\" href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['partydate']."</td>";
            echo "<td>".$res['partytime']."</td>";
            echo "<td>".$res['partybag']."</td>";
            echo "<td>".$res['partyfoodselection1']."</td>";
            echo "<td>".$res['partyfoodselection2']."</td>";
            echo "<td>".$res['icecream']."</td>";
            echo "<td>".$res['foodplatters']."</td>";
            echo "<td>".$res['springrolls']."</td>";
            echo "<td>".$res['sandwiches']."</td>";
            echo "<td>".$res['childsname']."</td>";
            echo "<td>".$res['childsage']."</td>";
            echo "<td>".$res['morf']."</td>";
            echo "<td>".$res['childrenattending']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['contact']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['address1']."</td>";
            echo "<td>".$res['postcode']."</td>";
            echo "<td>".$res['adultsinattendance']."</td>";
            echo "<td>".$res['citytown']."</td>";

        }
        ?>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    </table>
</body>
</html>