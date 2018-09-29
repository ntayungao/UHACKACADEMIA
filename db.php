<?php
$servername = "localhost";
$username = "nka";
$password = "nka09";
$dbname = "fortify";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>