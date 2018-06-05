<?php
/**
 * Created by IntelliJ IDEA.
 * User: khubaib
 * Date: 22/03/2018
 * Time: 14:57
 */

Class dbObj{
    /* Database connection start */
    var $dbhost = "192.168.64.2";
    var $username = "khubaib";
    var $password = "summer";
    var $dbname = "phpmultipage";
    var $conn;
    function getConnstring() {
        $con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        } else {
            $this->conn = $con;
        }
        return $this->conn;
    }
}