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
    <br>
    <br>
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
        echo "<li>".$sql."</li>";
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
        echo "<li>".$sql."</li>";
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
        echo "<li>".$sql."</li>";
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
               
    $sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial and dzial=2"; 
echo("<h3>Zadanie 4</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat Dzialu Handel</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Suma']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
               
    $sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial and imie like'%a'"; 
echo("<h3>Zadanie 5</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat Kobiet</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Suma']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
               
    $sql ="select *,AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia from pracownicy,organizacja where id_org=dzial group by dzial"; 
echo("<h3>Zadanie 6</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Wieku</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
               
    $sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial group by dzial"; 
echo("<h3>Zadanie 7</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Suma']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                    
    $sql ="select *,MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial group by dzial"; 
echo("<h3>Zadanie 8</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                
    $sql ="select *,MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and dzial=1 or dzial=2 group by dzial"; 
echo("<h3>Zadanie 9</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                         
    $sql ="select *,MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and dzial=1 or dzial=2 group by dzial"; 
echo("<h3>Zadanie 10</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                                  
    $sql ="select *,DATEDIFF(CURDATE(),data_urodzenia) as wiek from pracownicy,organizacja where id_org=dzial"; 
echo("<h3>Zadanie 11</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dlugosc Zycia w Dniach</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                             
    $sql ="select *,MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and imie not like '%a'"; 
echo("<h3>Zadanie 12</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Najstarsz Pracownik</th><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    echo("<h2>Formatowanie Dat</h2>");
                                 
    $sql ="select *,DATE_FORMAT(data_urodzenia,'%W-%m-%Y') as wiek from pracownicy,organizacja where id_org=dzial"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                      
$sql1 =  "SET lc_time_names = 'pl_PL';"
$sql2 =  "SELECT DATE_FORMAT(CURDATE(), '%W');"
echo("<h3>Zadanie 2</h3>"); 
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
if ( $result2) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result2)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
     
?>
</body>
</html>
