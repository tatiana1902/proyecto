<?php
$servername = "localhost";
$database = "proyecto";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//print "Connected successfully";
//mysqli_close($conn);
?>