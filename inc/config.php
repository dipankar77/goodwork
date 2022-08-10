<?php
$DB_SERVER = "localhost"; // Database credentials
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "skills";
$link = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME); //Connect to DB
if($link === false){ // Check connection
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>