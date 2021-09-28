<?php
// Database configuration
$servername = "localhost";
$username = "root";
$pass = "";
$dbName = "testdarbas";
$charset = "utf8mb4";
// Create database connection
$db = new mysqli($servername, $username, $pass, $dbName);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} else {
    echo 'Connection succeeded';
}
?>