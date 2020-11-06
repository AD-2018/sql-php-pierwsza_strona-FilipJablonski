<?php
$servername = "mysql-jablonski-filip.alwaysdata.net";
$username = "217189";
$password = "4CM@rD.M6Bvc3Bx";
$dbname = "jablonski-filip_pbd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
