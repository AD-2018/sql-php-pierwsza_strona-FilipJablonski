<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Filip Jabłoński</h1>
<nav>
    <br>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-FilipJablonski"> Github </a>
    
    <div class="nav">
         <a href="index.php"> Strona Główna </a>  
         <a href="pracownicy.php"> Pracownicy </a>
         <a href="pracownicy_organizacja.php"> Pracow. i Org. </a>   
         <a href="funkcje_agregujace.php"> Funkcje Agregujace </a>   
    </div>
    <br>
</nav>  
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
?>
</body>
</html>
