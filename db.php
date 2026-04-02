<?php
// Simple Database Connection Script
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "streetzen_db";

// Connect to MySQL
$conn = mysqli_connect($host, $user, $pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
