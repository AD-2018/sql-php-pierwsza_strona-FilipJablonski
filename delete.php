<?php
require_once("connect.php");
echo("Delete<br>");
echo $_POST['id'];

$sql = "DELETE FROM Pracownik WHERE id= $_POST['id'];";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
