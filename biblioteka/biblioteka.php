<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="../style.css">
  <title>Dane do Bazy</title>
</head>
<body>
<nav>
    <div class="nav">
    <strong>
    	 <li><a class="GitHub" href="https://github.com/AD-2018/sql-php-pierwsza_strona-FilipJablonski">Github</a></li>
         <li><a href="../index.php">Strona Główna</a></li>
         <li><a href="../pracownicy_organizacja_czas/pracownicy.php">Pracownicy</a></li>
         <li><a href="../pracownicy_organizacja_czas/pracownicy_organizacja.php">Pracownicy i Organizacja</a></li>   
         <li><a href="../pracownicy_organizacja_czas/funkcje_agregujace.php">Funkcje Agregujace</a></li>
         <li><a href="../pracownicy_organizacja_czas/data_czas.php">Data i Czas</a></li>
         <li><a href="../pracownicy_organizacja_czas/nieobecnosci.php">Nieobecności Pracowników</a></li>
         <li><a href="../strona.php">Strona</a></li>
         <li><a href="../pracownicy_organizacja_czas/daneDoBazy.php">Dane Do Bazy</a></li>
         <li><a href="../gra/testowa_gra.php">Testowa Gra</a></li>
	 <li><a href="biblioteka.php">Biblioteka | Książki</a></li>
    </strong>
    </div>
	</br>
</nav>
</br></br></br>
<?php
// Kradnąc ten kod spisujesz swoją stronę na straty.
// Spędziłem nad tym dużo czasu i jeśli chcesz mieć coś podobnego to zrób to po swojemu.                                     <-------- Dla tych co chcą coś zabrać C:
// Jeśli nie potrafisz tego zrobić to zrób to tak jak w innych plikach.
require_once("../connect.php");
echo ('<div class="do_lewej">');
echo ('</div>');
echo ('<div class="Dane6">');
echo ('<div class="do_lewej">');
echo ('<div class="Dane4">');
echo ('<h3 class="zielone">Dodawanie Książki</h3>');
echo ('<form action="biblioteka_ksiazka.php" method="POST">');
echo ('<div>Tytuł Książki: <input type="text" name="tytul"></div>');
echo ('</br><br><br>');
echo ('<div><input type="submit" class="button_bibl" value="Dodaj Książkę"></div>');
echo ('</form>');
echo ('</div>');
echo ('</div>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane4">');
echo ('<h3 class="zielone">Dodawanie Autora</h3>');
echo ('<form action="biblioteka_autor.php" method="POST">');
echo ('<div>Autor: <input type="text" name="autor"></div>');
echo ('</br><br><br>');
echo ('<div><input type="submit" class="button_bibl" value="Dodaj Autora"></div>');
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
echo ('<h3 class="zielone">Dodawanie Do Tabelki</h3>');
echo ('<form action="biblioteka_tab.php" method="POST">');
echo ('<div>Tytuł Książki: <select name="tytul">');
	while($row = mysqli_fetch_assoc($result)) {
            echo ('<option value="'.$row['id'].'">');
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
echo ('<div>Autor: <select name="autor" class="do_prawej">');
	while($row = mysqli_fetch_assoc($result)) {
            echo ('<option value="'.$row['id'].'">');
	    echo ($row['autor']);
 	    echo ("</option>");
	};
echo ('</select>');
echo ('</div>');
echo ('</br>');
echo ('<div><input type="submit" class="button_bibl" value="Dodaj Do Tabelki"></div>');
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
echo ('<h3 class="zielone">Wypożyczenie Książki</h3>');
echo ('<form action="biblioteka_tab2.php" method="POST">');
echo ('<div>Tytuł Książki: <select name="tytul">');
	while($row = mysqli_fetch_assoc($result)) {
            echo ('<option value="'.$row['id'].'">');
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
echo ('<div>Autor: <select name="autor" class="do_prawej">');
	while($row = mysqli_fetch_assoc($result)) {
            echo ('<option value="'.$row['id'].'">');
	    echo ($row['autor']);
 	    echo ("</option>");
	};
echo ('</select>');
echo ('</div>');
echo ('</br>');
echo ('<div><input type="submit" class="button_bibl" value="Wypożycz Książkę"></div>');
echo ('</form>');
echo ('</div>');
echo ('</div>');
echo ('<div class="do_lewej">');
echo ('<div class="Dane4">');
echo ('<h3 class="zielone">Wypożyczenie Książki po ID</h3>');
echo ('<form action="biblioteka_tab3.php" method="POST">');
echo ('<div>ID: <input type="number" name="id" class="do_prawej"></div>');
echo ('<br><br><br>');
echo ('<div><input type="submit" class="button_bibl" value="Wypożycz Książkę"></div>');
echo ('</form>');
echo ('</div>');
echo ('</div>');
echo ('<div>');
echo ('</div>');
echo ('<div class="Dane5">');
$sql = "select (`biblAutor_biblTytul`.id) as ID_TAB, autor, tytul, biblWypoz from biblAutor_biblTytul,biblAutor,biblTytul where biblAutor.id=biblAutor_id and biblTytul.id=biblTytul_id order by autor,ID_TAB asc";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo("<table border='1' class='tab_bibl'>");
    echo("<th>ID</th><th>Autor</th><th>Tytuł</th><th>Wypożyczona</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['ID_TAB']."</td><td>".$row['autor']."</td><td>".$row['tytul']."</td><td>");
	    if ( $row['biblWypoz'] == "0") {
		    echo("NIE</td>");
	    } else {
		    echo("TAK</td>");
	    };
            echo("</tr>");
        };
    echo("</table>");
echo ('</div>');
?>
</body>
</html>
