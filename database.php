<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_registration";

// create connection
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

//check connection
if (!$conn) {
    die("Something went wrong;");
}
    // echo "connected successfully";
?>