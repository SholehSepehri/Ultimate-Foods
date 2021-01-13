<?php

$servername = "localhost";
$username = "s5sepehr";
$password = "DyWriuc`";
$dbname = "s5sepehr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_errno) {
  echo "Connection failed to MySQL: " . $conn->connect_error;
  exit();
}

