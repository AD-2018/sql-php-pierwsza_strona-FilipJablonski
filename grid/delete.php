<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
require_once("../connect.php");
echo("Delete" . "<br>");
echo $_POST['id'];
echo $_POST['tabela'];
echo $_POST['opcja'];
if ($_POST['opcja']==1 and $_POST['tabela']=="WDW"){
    $opcja = "osoby_id";
} elseif ($_POST['opcja']==2 and $_POST['tabela']=="WDW"){
    $opcja = "klasa_id";
} elseif ($_POST['opcja']==1 and $_POST['tabela']=="biblAutor_biblTytul"){
    $opcja = "biblAutor_id";
} elseif ($_POST['opcja']==2 and $_POST['tabela']=="biblAutor_biblTytul"){
    $opcja = "biblTytul_id";
}
echo "<br>";

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>