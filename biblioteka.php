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
require_once("connect.php");
echo ('</br>');
echo ('<div class="Dane1">');
echo ('<h1 class="zielone">Dodawanie Danych:</h1>');
echo ('</div>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane4">');
echo ('<h3 class="szare">Dodawanie Książki</h3>');
echo ('<form action="biblioteka_ksiazka.php" method="POST">');
echo ('<div>Tytuł Książki: <input type="text" name="tytul"></div>');
echo ('</br>');
echo ('<div><input type="submit" value="Dodaj Książkę"></div>');
echo ('</form>');
echo ('</div>');
echo ('</div>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane4">');
echo ('<h3 class="szare">Dodawanie Autora</h3>');
echo ('<form action="biblioteka_autor.php" method="POST">');
echo ('<div>Autor: <input type="text" name="autor"></div>');
echo ('</br>');
echo ('<div><input type="submit" value="Dodaj Autora"></div>');
echo ('</form>');
echo ('</div>');
echo ('</div>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane4">');
$sql ="select * from biblTytul";
$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    };
echo ('<h3 class="szare">Dodawanie Do Tabelki</h3>');
echo ('<form action="biblioteka_tab.php" method="POST">');
echo ('<div>Tytuł Książki: <select name="tytul">');
	while($row = mysqli_fetch_assoc($result)) {
            echo ('<option value="'.$row['tytul'].'">');
	    echo ($row['tytul']);
 	    echo ("</option>");
	};
echo ('</select>');
echo ('</div>');
echo ('</br>');
$sql ="select * from biblAutor";
$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    };
echo ('<form action="biblioteka_tab.php" method="POST">');
echo ('Autor: <select name="autor">');
	while($row = mysqli_fetch_assoc($result)) {
            echo ('<option value="'.$row['autor'].'">');
	    echo ($row['autor']);
 	    echo ("</option>");
	};
echo ('</select>');
echo ('</br>');
echo ('<div><input type="submit" value="Dodaj Do Tabelki"></div>');
echo ('</form>');
echo ('</div>');
echo ('</div>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane4">');
$sql ="select * from biblTytul";
$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    };
echo ('<h3 class="szare">Wypożyczenie Książki</h3>');
echo ('<form action="biblioteka_tab.php" method="POST">');
echo ('Tytuł Książki: <select name="tytul">');
	while($row = mysqli_fetch_assoc($result)) {
            echo ('<option value="'.$row['tytul'].'">');
	    echo ($row['tytul']);
 	    echo ("</option>");
	};
echo ('</select>');
echo ('</br>');
$sql ="select * from biblAutor";
$result = mysqli_query($conn, $sql);
if ( $result) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    };
echo ('<form action="biblioteka_tab.php" method="POST">');
echo ('Autor: <select name="autor">');
	while($row = mysqli_fetch_assoc($result)) {
            echo ('<option value="'.$row['autor'].'">');
	    echo ($row['autor']);
 	    echo ("</option>");
	};
echo ('</select>');
echo ('</br>');
echo ('<div><input type="submit" value="Wypożycz Książkę"></div>');
echo ('</form>');
echo ('<h3 class="szare">Wypożyczenie Książki po ID</h3>');
echo ('<form action="biblioteka_autor.php" method="POST">');
echo ('<div>Autor: <input type="text" name="autor"></div>');
echo ('<div><input type="submit" value="Wypożycz Książkę"></div>');
echo ('</form>');
echo ('</div>');
echo ('</div>');
?>
</body>
</html>
