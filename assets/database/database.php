<?php
$servername = "db.tecnico.ulisboa.pt"; // Replace with your database host (e.g., localhost or remote server)
$username = "ist1106966";       // Replace with your MySQL username
$password = "ryhb6550";       // Replace with your MySQL password
$dbname = "ist1106966";    // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Database Connection Failed: " . $conn->connect_error); // Logs error instead of displaying
    exit("Database connection error. Please try again later.");
}
?>
