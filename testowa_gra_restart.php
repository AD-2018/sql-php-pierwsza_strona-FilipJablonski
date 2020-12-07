    
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("connect.php");

$sql = "UPDATE gra_nr_1 SET Kolumna1= ' ', Kolumna2= ' ', Kolumna3= ' ' WHERE X = 'Wiersz 1' or X = 'Wiersz 2' or X = 'Wiersz 3';"

if ($conn->query($sql) === TRUE) {
  echo("</br>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "UPDATE gra_nr_1 SET tura= 'x' WHERE X = 'Wiersz 1';"

if ($conn->query($sql) === TRUE) {
  header('Location: https://jablonski-filip.herokuapp.com/testowa_gra.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>
