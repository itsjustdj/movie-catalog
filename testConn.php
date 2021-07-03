<?php
$servername = "localhost";
$username = "root";
$password = "root";
$result = "movie_catalog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $result);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 