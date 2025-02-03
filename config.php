<?php
$host = "db"; // Docker MySQL service name
$username = "root";
$password = "root"; // Change this to "root" if that's your actual password
$database = "todo_db";

// Create a connection
$db = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
