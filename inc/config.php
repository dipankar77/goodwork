<?php
$DB_SERVER = "localhost"; // Database credentials
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "skills";
$link = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME); //Connect to DB
if($link === false){ // Check connection
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
require_once 'class.Quiz.php';
$db = new Quiz(
        "localhost",
        "mquiz",
        "root",
        ""
    );
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>