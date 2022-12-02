<?php
$host     = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name  = "dbgym"; // Database name 

// Connect to server and select databse.
$con = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
?>