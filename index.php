<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Filip Jabłoński 3Ti</title>
</head>
<body>
<nav>
    <div class="nav">
    <strong>
    	 <li><a class="GitHub" href="https://github.com/AD-2018/sql-php-pierwsza_strona-FilipJablonski">Github</a></li>
         <li><a href="index.php">Strona Główna</a></li>
         <li><a href="pracownicy_organizacja_czas/pracownicy.php">Pracownicy</a></li>
         <li><a href="pracownicy_organizacja_czas/pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>   
         <li><a href="pracownicy_organizacja_czas/funkcje_agregujace.php">Funkcje Agregujace</a></li>
         <li><a href="pracownicy_organizacja_czas/data_czas.php">Data i Czas</a></li>
         <li><a href="pracownicy_organizacja_czas/nieobecnosci.php">Nieobecności Pracowników</a></li>
         <li><a href="strona.php">Strona</a></li>
         <li><a href="pracownicy_organizacja_czas/daneDoBazy.php">Dane Do Bazy</a></li>
         <li><a href="gra/testowa_gra.php">Testowa Gra</a></li>
         <li><a href="biblioteka/biblioteka.php">Biblioteka | Książki</a></li>
         <li><a href="grid/index.html">Grid</a></li>
    </strong>
    </div>
	</br></br></br>
</nav>
    <h1>Filip Jabłoński</h1>

<?php
require_once("connect.php");
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
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzialu</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");
            echo("</tr>");
        };
    echo("</table>");
    echo ("<br>");
    $hostname = $_SERVER['HTTP_HOST'];
    echo("<li> hostname: ".$hostname."</li>");
?>
</body>
</html>
