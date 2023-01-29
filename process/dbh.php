<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ems";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>
