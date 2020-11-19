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
         <a href="pracownicy_organizacja.php">Pracownicy i Organizacja</a>   
         <a href="funkcje_agregujace.php">Funkcje Agregujace</a>  
         <a href="data_czas.php">Data i Czas</a>
         <a href="nieobecnosci.php">Nieobecności Pracowników</a>
         <a href="strona.php">Strona</a>
    </div>
    <br>
</nav> 
<form action="strona.php" method="POST">
   <br></br>
   <input type="text" name="imie">
   <input type="text" name="nazwisko"></br>
   <input type="submit" value="wyślij do strona.php">
</form>
<?php
	echo("jesteś na stronie.php");
	
	echo("<ul>");
	
	echo("<li>".$_POST["imie"]);
	echo("<li>".$_POST["nazwisko"]);
	
	echo("<ul>");
?>
</body>
</html>
