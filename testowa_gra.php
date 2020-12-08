<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="refresh" content="15;url=testowa_gra.php">
  <link rel="stylesheet" href="style.css">
  <title>Gra</title>
</head>
<body>
<nav>
    <div class="nav">
    <strong>
    	 <li><a class="GitHub" href="https://github.com/AD-2018/sql-php-pierwsza_strona-FilipJablonski">Github</a></li>
         <li><a href="index.php">Strona Główna</a></li>
         <li><a href="pracownicy.php">Pracownicy</a></li>
         <li><a href="pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>   
         <li><a href="funkcje_agregujace.php">Funkcje Agregujace</a></li>
         <li><a href="data_czas.php">Data i Czas</a></li>
         <li><a href="nieobecnosci.php">Nieobecności Pracowników</a></li>
         <li><a href="strona.php">Strona</a></li>
         <li><a href="daneDoBazy.php">Dane Do Bazy</a></li>
         <li><a href="testowa_gra.php">Testowa Gra</a></li>
    </strong>
    </div>
	</br></br></br>
</nav>
<form action="testowa_gra_restart.php">
   <br><br>
   <input type="submit" class="button_kik" value="Nowa Gra">
</form>
<div class="do_lewej">
<?php
require_once("connect.php");
$sql = "SELECT * FROM gra_nr_1";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
         echo "<br>";
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo("<h1>Kółko i Krzyżyk</h1>");

    echo("<table border='1' class='tabela_kik'>");
    echo("<th class='tr_kik'>\</th><th class='tr_kik'>Kolumna 1</th><th class='tr_kik'>Kolumna 2</th><th class='tr_kik'>Kolumna 3</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo('<tr class="tr_kik">');
            echo('<td class="tlo_zielony">'.$row[X].'</td><td class="big_kik">'.$row['Kolumna1'].'</td><td class="big_kik">'.$row['Kolumna2'].'</td><td class="big_kik">'.$row['Kolumna3'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>
</br></br>
<form action="testowa_gra_tura.php" method="POST">
  Kolumna<br>
  <input type="radio" id="Kolumna1" name="Kolumna" value="Kolumna1">
  <label for="Kolumna1">1</label>
  <input type="radio" id="Kolumna2" name="Kolumna" value="Kolumna2">
  <label for="Kolumna2">2</label>
  <input type="radio" id="Kolumna3" name="Kolumna" value="Kolumna3">
  <label for="Kolumna3">3</label><br><br>
  Wiersz<br>
  <input type="radio" id="Wiersz 1" name="Wiersz" value="Wiersz 1">
  <label for="Wiersz 1">1</label>
  <input type="radio" id="Wiersz 2" name="Wiersz" value="Wiersz 2">
  <label for="Wiersz 2">2</label>
  <input type="radio" id="Wiersz 3" name="Wiersz" value="Wiersz 3">
  <label for="Wiersz 3">3</label><br><br>
  <input type="submit" value="Nowa Tura">
</form>
</div>
</body>
</html>
