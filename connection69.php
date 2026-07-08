<?php
$servername = "localhost";  // or 127.0.0.1
$username   = "root";       // default XAMPP username
$password   = "";           // default XAMPP password is empty
$dbname     = "bookworld";  // <-- replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
