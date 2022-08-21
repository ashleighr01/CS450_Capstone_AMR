<?php
$servername = "localhost";
$username = "root";
$password = "Keeper!1028";
$dBname = "teamelite";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dBname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
