<?php

$servername = "192.168.64.2";
$username = "khubaib";
$password = "summer";
$dbname = "myDB";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


