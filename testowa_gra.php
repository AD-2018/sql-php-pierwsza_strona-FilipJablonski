<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="refresh" content="10000;url=testowa_gra.php">
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
	 <li><a href="biblioteka.php">Biblioteka | Książki</a></li>
    </strong>
    </div>
	</br></br></br>
</nav>
</br>
<?php
require_once("connect.php");
echo ('<div class="Dane6">');
echo ('<ul class="Dane7">');
echo ('<div class="do_lewej">');
echo ('<div class="Dane2">');
echo ('<form action="testowa_gra_restart.php">');
echo ('   <input type="submit" class="button_kik" value="Nowa Gra">');
echo ('</form>');
echo ('<form action="testowa_gra_tura.php" method="POST">');
echo ('  <h3>Kolumna</h3><br>');
echo ('  <input type="radio" id="Kolumna1" name="Kolumna" value="Kolumna1">');
echo ('  <label for="Kolumna1">1</label>');
echo ('  <input type="radio" id="Kolumna2" name="Kolumna" value="Kolumna2">');
echo ('  <label for="Kolumna2">2</label>');
echo ('  <input type="radio" id="Kolumna3" name="Kolumna" value="Kolumna3">');
echo ('  <label for="Kolumna3">3</label><br><br>');
echo ('  <h3>Wiersz</h3><br>');
echo ('  <input type="radio" id="Wiersz 1" name="Wiersz" value="Wiersz 1">');
echo ('  <label for="Wiersz 1">1</label>');
echo ('  <input type="radio" id="Wiersz 2" name="Wiersz" value="Wiersz 2">');
echo ('  <label for="Wiersz 2">2</label>');
echo ('  <input type="radio" id="Wiersz 3" name="Wiersz" value="Wiersz 3">');
echo ('  <label for="Wiersz 3">3</label><br><br>');
echo ('  <input type="submit" value="Nowa Tura">');
echo ('</form>');
echo ('</div>');
echo ('</div>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane3">');
$sql = "SELECT * FROM gra_nr_1";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo("<h1>Kółko i Krzyżyk</h1>");

    echo("<table border='1' class='tabela_kik'>");
    echo("<th class='tr_kik'>\</th><th class='tr_kik'>Kolumna 1</th><th class='tr_kik'>Kolumna 2</th><th class='tr_kik'>Kolumna 3</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo('<tr class="tr_kik">');
            echo('<th class="tlo_zielony">'.$row[X].'</th><td class="big_kik">'.$row['Kolumna1'].'</td><td class="big_kik">'.$row['Kolumna2'].'</td><td class="big_kik">'.$row['Kolumna3'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
echo('</div>');
echo ('</div>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane3">');
$sql = "SELECT * FROM gracze";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     while($row = mysqli_fetch_assoc($result)) {
	     echo("<h2>Gracz ".$row[id].": ".$row[gracz]."<h1>");
	     echo ('<form action="nick.php" method="POST">');
	     echo ('<div><input type="text" name="nick"></div>');
	     echo ('<div><input name="id" value="'.$row['id'].'" hidden></div>');
	     echo ('<div><input type="submit" value="Zmień Nick"></div>');
	     echo ('</form>');
     };
echo('</div>');
echo ('</div>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane3">');
$sql = "SELECT * FROM czat";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo("<table border='1'");
    echo("<th>Czat</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo('<tr>');
            echo('<td>'.$row['gracz'].' :'.$row['wiadomosc'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
echo('</div>');
echo('</div>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane3">');
echo('</div>');
echo('</div>');
echo('</ul>');
echo('</div>');
?>
</body>
</html>
