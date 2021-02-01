<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="../style.css">
  <title>Filip Jabłoński 3Ti</title>
</head>
<body>
<nav>
    <div class="nav">
    <strong>
    	 <li><a class="GitHub" href="https://github.com/AD-2018/sql-php-pierwsza_strona-FilipJablonski">Github</a></li>
         <li><a href="../index.php">Strona Główna</a></li>
         <li><a href="pracownicy.php">Pracownicy</a></li>
         <li><a href="pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>   
         <li><a href="funkcje_agregujace.php">Funkcje Agregujace</a></li>
         <li><a href="data_czas.php">Data i Czas</a></li>
         <li><a href="nieobecnosci.php">Nieobecności Pracowników</a></li>
         <li><a href="../strona.php">Strona</a></li>
         <li><a href="daneDoBazy.php">Dane Do Bazy</a></li>
         <li><a href="../gra/testowa_gra.php">Testowa Gra</a></li>
	 <li><a href="../biblioteka/biblioteka.php">Biblioteka | Książki</a></li>
    </strong>
    </div>
	</br></br></br>
</nav>
</br>
<div class="Dane1">
<h1 class="zielone">Dodawanie i usuwanie</h1>
<h3 class="szare">Dodawanie pracownika</h3>
	<form action="insert.php" method="POST">
		<tr>Imie:<input class="myInput" type="text" name="imie"></tr>
		<tr>Dział:<input class="myInput" type="number" name="dzial"></tr>
		<tr>Zarobki:<input class="myInput" type="number" name="zarobki"></tr>
		<tr>Data Urodzenia:<input class="myInput" type="date" name="data_urodzenia"></tr>
		<tr><input type="submit" value="Dodaj Pracownika"></tr>
	</form>
<h3 class="szare">Usuwanie pracownika po ID</h3>
<form action="delete.php" method="POST">
   <input type="number" name="id">
   <input type="submit" value="USUŃ">
</form>
</div>
</br>
<?php
require_once("../connect.php");
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
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzialu</th><th>Usuń Pracownika</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>'.
	     '<td>
	    
	     <form action="delete.php" method="POST">
  		<input name="id" value="'.$row['id_pracownicy'].'" hidden>
   		<input type="submit" class="button_x" value="X">
	     </form>
	     
	     </td>');
        echo('</tr>');
    }

    echo('</table>');
?>
</body>
</html>
