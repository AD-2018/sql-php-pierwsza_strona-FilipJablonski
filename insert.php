<?php
require_once("connect.php");

$sql = "INSERT INTO Pracownik (id,imie, dzial, zarobki,data_urodzenia) 
       VALUES (null,'".$_POST['name']."', '".$_POST['dzial']."', '".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";

$conn->query($sql);

$conn->close();
?>
