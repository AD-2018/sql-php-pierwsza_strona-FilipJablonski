<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="../style.css">
  <title>Filip Jabłoński 3Ti</title>
</head>
<body>
<?php include"../menu.php" ?>
<div class="zawartosc">
<div class="Dane1">
<h1 class="zielone">Dodawanie i usuwanie</h1>
<h3 class="szare">Dodawanie pracownika</h3>
	<form action="insert.php" method="POST">
		<tr>Imie:<input class="myInput" type="text" name="imie"></tr>
		<tr>Dział:<input class="myInput" type="number" name="dzial"></tr>
		<tr>Zarobki:<input class="myInput" type="number" name="zarobki"></tr>
		<tr>Data Urodzenia:<input class="myInput" type="date" name="data_urodzenia"></tr>
		<tr><input type="submit" value="Dodaj Pracownika"></tr>
	</form>
<h3 class="szare">Usuwanie pracownika po ID</h3>
<form action="delete.php" method="POST">
   <input type="number" name="id">
   <input type="submit" value="USUŃ">
</form>
</div>
</br>
<?php
require_once("../connect.php");
$sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
         echo "<br>";
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

    echo("<h1>Tabelka</h1>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzialu</th><th>Usuń Pracownika</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>'.
	     '<td>
	    
	     <form action="delete.php" method="POST">
  		<input name="id" value="'.$row['id_pracownicy'].'" hidden>
   		<input type="submit" class="button_x" value="X">
	     </form>
	     
	     </td>');
        echo('</tr>');
    }

    echo('</table>');
?>
</div>
</body>
</html>
