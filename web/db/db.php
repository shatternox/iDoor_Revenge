<?php
$dbhost = "db";
$dbuser = "root";
$dbpass = "6^Si2OtDU2f8zD2H1Zd7&a";
$dbname = "idoor";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>