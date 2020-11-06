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
echo("<h2>Pracownicy</h2>");
    $sql ="select * from pracownicy,organizacja where id_org=dzial and dzial=2 group by imie"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");        
  echo("<td>".$row['imie']."</td><td>".$row['dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
  
    $sql ="select * from pracownicy,organizacja where id_org=dzial and dzial=2 or dzial=3 group by imie"; 
echo("<h3>Zadanie 2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");       
  echo("<td>".$row['imie']."</td><td>".$row['dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
    
      $sql ="select * from pracownicy,organizacja where id_org=dzial group by imie having zarobki<30"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql); 
if ( $result) {
        echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Zarobki</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td>");     
  echo("</tr>"); } 
echo('</table>');   
    
?>
</body>
</html>
