<?php 
    // Start Session
    session_start(); 

    // define some contants here
    define('SITEURL', 'http://localhost/food-order');
    define('LOCALHOST', 'localhost'); 
    define('DB_USERNAME', 'root'); 
    define('DB_PASSWORD', ''); 
    define('DB_NAME', 'food-order'); 
    

    // Database Connection
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); 

    // use database xxx
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

?>