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
    </strong>
    </div>
	</br></br></br>
</nav>
<form action="strona.php" method="POST">
   </br>
	<tr><th>
   <input type="text" name="imie">
   <input type="text" name="nazwisko">
   <input type="text" name="city">
   <input type="text" name="phone">
   <input type="text" name="poscode"></br>
   <input type="submit" value="wyślij do strona.php">
	</th></tr>
</form>
<?php
	echo("jesteś na stronie.php");
	
	echo("<ul>");
	
	echo("<li>".$_POST["imie"]);
	echo("<li>".$_POST["nazwisko"]);
	echo("<li>".$_POST["city"]);
	echo("<li>".$_POST["phone"]);
	echo("<li>".$_POST["poscode"]);
	echo("<ul>");
?>
</body>
</html>
