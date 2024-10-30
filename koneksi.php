<?php
// connection.php

$host = 'localhost';  // Your database host
$user = 'root';  // Your database username
$pass = '';  // Your database password
$dbname = 'app_report';  // Your database name

// Create a connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
