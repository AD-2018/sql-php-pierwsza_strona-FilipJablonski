<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
  <title>Dane do Bazy</title>
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
         <li><a href="testowa_gra.php">Testowa Gra</a></li>
	 <li><a href="biblioteka.php">Biblioteka | Książki</a></li>
    </strong>
    </div>
	</br></br></br>
</nav>
<?php
echo ('</br>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane1">');
echo ('<h1 class="zielone">Dodawanie Danych:</h1>');
echo ('<div>');
echo ('<h3 class="szare">Dodawanie Książki</h3>');
echo ('<form action="biblioteka_ksiazka.php" method="POST">');
echo ('<div>Tytuł Książki: <input type="text" name="tytul"></div>');
echo ('<div><input type="submit" value="Dodaj Książkę"></div>');
echo ('</form>');
echo ('</div>')
?>
</div>
</div>
</body>
</html>
