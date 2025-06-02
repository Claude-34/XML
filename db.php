<?php
$host = 'localhost';
$dbname = 'car_rental';
$username = 'root'; // Change if needed
$password = ''; // Change if needed

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>