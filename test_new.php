<?php
$servername = "localhost"; // Replace with your database server if needed
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "study-buddy";     // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!";
}

// Close the connection
$conn->close();
?>
