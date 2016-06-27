<?php
$servername = "localhost";
$username = "rtsql";
$password = "FI4FKYCcu3A86jMK";
$dbname = "rtsql_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
"Connected successfully";
?>
