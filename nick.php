<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("connect.php");

$sql = "UPDATE gracze SET gracz=".'"'.$_POST['nick'].'"'.' WHERE id='.$_POST['id'];

if ($conn->query($sql) === TRUE) {
  header('Location: https://jablonski-filip.herokuapp.com/testowa_gra.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>
