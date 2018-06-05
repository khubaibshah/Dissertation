<?php
/**
 * Created by IntelliJ IDEA.
 * User: khubaib
 * Date: 21/04/2018
 * Time: 22:33
 */
//including the database connection file
include("db_connect.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM funvalley WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
