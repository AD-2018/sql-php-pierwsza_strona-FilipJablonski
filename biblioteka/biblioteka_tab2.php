<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
require_once("../connect.php");

$sql = "UPDATE biblAutor_biblTytul INNER JOIN biblAutor ON biblAutor.id=biblAutor_biblTytul.biblAutor_id SET biblWypoz= if (biblWypoz='0' , '1','0') WHERE autor=".'"'.$_POST['autor'].'"'.' and biblTytul_id='.$_POST['tytul'];


if ($conn->query($sql) === TRUE) {
  header('Location: https://jablonski-filip.herokuapp.com/biblioteka/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
