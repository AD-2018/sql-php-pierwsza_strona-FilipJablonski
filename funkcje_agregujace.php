<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Filip Jabłoński</h1>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-FilipJablonski">Github</a>
    
    <div class="nav">
         <a href="index.php">Strona Główna</a>   
         <a href="pracownicy_organizacja.php">Pracow. i Org.</a>   
         <a href="funkcje_agregujace.php">Funkcje Agregujace</a>   
    </div>
    
<?php

require_once("connect.php");
    
    $sql ="select imie,dzial from pracownicy,organizacja where id_org=dzial and dzial=2 group by imie"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
  
    $sql ="select imie,dzial from pracownicy,organizacja where id_org=dzial and dzial=2 or dzial=3 group by imie"; 
echo("<h3>Zadanie 2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>dzial</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['dzial']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
      $sql ="select imie, zarobki from pracownicy,organizacja where id_org=dzial group by imie having zarobki<30"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql); 
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>zarobki</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>');   
    
?>
</body>
</html>