<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("connect.php");

$sql = "INSERT INTO biblAutor_biblTytul (id,biblAutor_id,biblTytul_id,biblWypoz) 
       VALUES (null,".'"'.$_POST['ida'].'"'.','.'"'.$_POST['idt'].'"'.','.'0'.')';


if ($conn->query($sql) === TRUE) {
  header('Location: https://jablonski-filip.herokuapp.com/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
