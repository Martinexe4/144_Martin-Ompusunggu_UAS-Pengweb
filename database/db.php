<?php

// THIS IS USE EVERYTIME YOU CONNECT

$servername = "localhost"; // LOCALHOST KAY XAMPP
$username = "martin123"; // BY DEFAULT ITS ROOT
$password = "123"; // BY DEFAULT ITS EMPTY
$dbname = "insal"; // NAME OF YOUR DATABASE

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>