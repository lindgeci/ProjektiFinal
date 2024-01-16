<?php

$hostname = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "lg";

$conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>