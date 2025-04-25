<?php
$host = 'localhost'; // Host name
$user = 'root';      // MySQL username (default is 'root')
$password = '';      // MySQL password (default is empty for local development)
$database = 'travelsphere'; // Your database name

// Create a connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
