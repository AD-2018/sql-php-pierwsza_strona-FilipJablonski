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
if ($_POST['tabela']=="WDW" or $_POST['tabela']=="biblAutor_biblTytul"){
    $sql = "DELETE FROM ".$_POST['tabela']." WHERE id=".$_POST['id'];
} else {
    $liczenie = mysqli_query("SELECT count($opcja) as wynik FROM $_POST['tabela'] where $opcja=$_POST['id'];");
    $liczenie2 = mysqli_fetch_assoc($liczenie);
    $liczenie_wynik = $liczenie2['wynik'];
    if ($_POST['tabela']=="WDW" and $liczenie_wynik<1){
        $sql = "DELETE FROM ".$_POST['tabela']." WHERE id=".$_POST['id'];
    } elseif if ($_POST['tabela']=="biblAutor_biblTytul" and $liczenie<1){
        $sql = "DELETE FROM ".$_POST['tabela']." WHERE id=".$_POST['id'];
    }
}

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>