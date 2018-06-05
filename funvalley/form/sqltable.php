<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="sqltable.css" />
</head>
<body>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search customer using ID" title="Type in a name" style="
    width: 400px;
    height: 36px;">
<?php
/**
 * Created by IntelliJ IDEA.
 * User: khubaib
 * Date: 19/04/2018
 * Time: 13:53
 */

$servername = "192.168.64.2";
$username = "khubaib";
$password = "summer";
$dbname = "phpmultipage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user_id,partydate,partytime,partybag,partyfoodselection1,partyfoodselection2,icecream,foodplatters,springrolls,sandwiches,childsname,childrenattending,childsage,morf,email,address1,contact,postcode,name,adultsinattendance,citytown FROM funvalley";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div style=\"overflow-x:auto;\"><table id=\"myTable\"><tr><th>ID</th><th>partydate</th><th>partytime</th><th>partybag</th><th>partyfoodselection1</th><th>partyfoodselection2</th><th>icecream</th><th>foodplatters</th><th>childrenattending</th><th>springrolls</th><th>sandwiches</th><th>childsname</th><th>childsage</th><th>morf</th><th>email</th><th>address1</th><th>contact</th><th>postcode</th><th>name</th><th>adultsinattendance</th><th>citytown</th></tr></div>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["partydate"]. "</td><td> " . $row["partytime"]. "</td><td> " . $row["partybag"]. "</td><td> " . $row["partyfoodselection1"]. "</td><td> " . $row["partyfoodselection2"]. "</td><td> " . $row["icecream"]. "</td><td> " . $row["foodplatters"]. "</td><td> " . $row["childrenattending"]. "</td><td> " . $row["springrolls"]. "</td><td> " . $row["sandwiches"]. "</td><td> " . $row["childsname"]. "</td><td> " . $row["childsage"]. "</td><td> " . $row["morf"]. "</td><td> " . $row["email"]. "</td><td> " . $row["address1"]. "</td><td> " . $row["contact"]. "</td><td> " . $row["postcode"]. "</td><td> " . $row["name"]. "</td><td> " . $row["adultsinattendance"]. "</td><td> " . $row["citytown"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
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
<!--<script>-->
<!--    function sortTable(n) {-->
<!--        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;-->
<!--        table = document.getElementById("myTable");-->
<!--        switching = true;-->
<!--        //Set the sorting direction to ascending:-->
<!--        dir = "asc";-->
<!--        /*Make a loop that will continue until-->
<!--        no switching has been done:*/-->
<!--        while (switching) {-->
<!--            //start by saying: no switching is done:-->
<!--            switching = false;-->
<!--            rows = table.getElementsByTagName("TR");-->
<!--            /*Loop through all table rows (except the-->
<!--            first, which contains table headers):*/-->
<!--            for (i = 1; i < (rows.length - 1); i++) {-->
<!--                //start by saying there should be no switching:-->
<!--                shouldSwitch = false;-->
<!--                /*Get the two elements you want to compare,-->
<!--                one from current row and one from the next:*/-->
<!--                x = rows[i].getElementsByTagName("TD")[n];-->
<!--                y = rows[i + 1].getElementsByTagName("TD")[n];-->
<!--                /*check if the two rows should switch place,-->
<!--                based on the direction, asc or desc:*/-->
<!--                if (dir == "asc") {-->
<!--                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {-->
<!--                        //if so, mark as a switch and break the loop:-->
<!--                        shouldSwitch= true;-->
<!--                        break;-->
<!--                    }-->
<!--                } else if (dir == "desc") {-->
<!--                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {-->
<!--                        //if so, mark as a switch and break the loop:-->
<!--                        shouldSwitch= true;-->
<!--                        break;-->
<!--                    }-->
<!--                }-->
<!--            }-->
<!--            if (shouldSwitch) {-->
<!--                /*If a switch has been marked, make the switch-->
<!--                and mark that a switch has been done:*/-->
<!--                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);-->
<!--                switching = true;-->
<!--                //Each time a switch is done, increase this count by 1:-->
<!--                switchcount ++;-->
<!--            } else {-->
<!--                /*If no switching has been done AND the direction is "asc",-->
<!--                set the direction to "desc" and run the while loop again.*/-->
<!--                if (switchcount == 0 && dir == "asc") {-->
<!--                    dir = "desc";-->
<!--                    switching = true;-->
<!--                }-->
<!--            }-->
<!--        }-->
<!--    }-->
<!--</script>-->
</body>
</html>

