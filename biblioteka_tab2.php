<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("connect.php");

$sql = "UPDATE biblAutor_biblTytul SET biblWypoz= if (biblWypoz='0' , '1','0') WHERE  autor=".'"'.$_POST['autor'].'"'.' and tytul='.'"'.$_POST['tytul'];


if ($conn->query($sql) === TRUE) {
  header('Location: https://jablonski-filip.herokuapp.com/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
