<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
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
    </strong>
    </div>
    </br>
</nav>
<?php

require_once("connect.php");
echo("<h2>Pracownicy</h2>");
    $sql ="select * from pracownicy,organizacja where id_org=dzial and dzial=2 group by imie"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
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
        echo "<li>".$sql."</li>";
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
        echo "<li>".$sql."</li>";
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
