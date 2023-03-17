<?php
$servername = "db";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,'laraapp_db');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>