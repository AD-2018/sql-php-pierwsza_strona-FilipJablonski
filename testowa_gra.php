<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
  <title>Dane do Bazy</title>
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

    echo("<h1>Tabelka</h1>");

    echo("<table border='1' class='tabela_kik'>");
    echo("<th class="tr_kik">\</th><th>Kolumna 1</th><th>Kolumna 3</th><th>Kolumna 3</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo('<tr class="tr_kik">');
            echo('<td class="tlo_zielony">'.$row[X].'</td><td>'.$row['Kolumna1'].'</td><td>'.$row['Kolumna2'].'</td><td>'.$row['Kolumna3'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>
