<?php
$servername = "localhost"; // Replace with your database server if needed
$username = "root";        // Replace with your DB username
$password = "";            // Replace with your DB password
$dbname = "study-buddy";     // Replace with your DB name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
