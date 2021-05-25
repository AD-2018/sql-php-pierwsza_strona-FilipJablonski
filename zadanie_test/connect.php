<?php
$servername = $_SERVER['servername'];  // Tu mają być $servername = "to co wylosujesz";
$username = $_SERVER['username'];
$password = $_SERVER['password'];
$dbname = $_SERVER['dbname']; 
$conn = new mysqli($servername, $username, $password, $dbname);
?>