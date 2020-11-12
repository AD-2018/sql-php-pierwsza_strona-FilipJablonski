<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Filip Jabłoński</h1>
<nav>
    <br>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-FilipJablonski">Github</a>
    
    <div class="nav">
         <a href="index.php">Strona Główna</a>  
         <a href="pracownicy.php">Pracownicy</a>
         <a href="pracownicy_organizacja.php">Pracow. i Org.</a>   
         <a href="funkcje_agregujace.php">Funkcje Agregujace</a>  
         <a href="data_czas.php">Data i Czas</a>
    </div>
    <br>
</nav>  
<?php
require_once("connect.php");
echo("<h2>Data i Czas</h2>");
    
    $sql ="select *,YEAR(curdate())-YEAR(data_urodzenia) AS wiek from pracownicy,organizacja where id_org=dzial"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dzial</th><th>Wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
              
    $sql ="select *,YEAR(curdate())-YEAR(data_urodzenia) AS wiek from pracownicy,organizacja where id_org=dzial and dzial=1"; 
echo("<h3>Zadanie 2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dzial</th><th>Wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
          
    $sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Suma']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
     
?>
</body>
</html>
