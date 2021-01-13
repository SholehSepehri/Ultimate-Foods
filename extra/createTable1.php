<?php
$servername = "localhost";
$username = "s5sepehr";
$password = "DyWriuc`";
$dbname = "s5sepehr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_errno) {
  echo "Connection failed to MySQL: " . $conn-> connect_error;
  exit();
}

$sql="create table ultimateFoodContactForm(
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
phoneNumber VARCHAR(100) NOT NULL,
inquiryType VARCHAR(100) NOT NULL,
comment  TEXT NOT NULL,
PRIMARY KEY( id ))"; 

if ($conn->query($sql) === TRUE) {
  echo "Table ultimateFoodContactForm created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
