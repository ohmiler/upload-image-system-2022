<?php 

// Database configuration
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "upload_db";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>