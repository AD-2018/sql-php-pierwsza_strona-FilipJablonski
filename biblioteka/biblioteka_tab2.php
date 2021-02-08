<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
require_once("../connect.php");

$sql = "UPDATE biblAutor_biblTytul SET biblAutor_biblTytul.biblWypoz= if (biblWypoz='0' , '1','0') FROM biblAutor_biblTytul,biblAutor  WHERE biblAutor.id=biblAutor_biblTytul.biblAutor_id and autor=".'"'.$_POST['autor'].'"'.' and biblAutor_biblTytul.biblTytul_id='.'"'.$_POST['tytul'].'"';


if ($conn->query($sql) === TRUE) {
  header('Location: https://jablonski-filip.herokuapp.com/biblioteka/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
