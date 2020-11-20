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
         <a href="daneDoBazy.html">Dane Do Bazy</a>
         <a href="insert.php">insert.php</a>
    </div>
    <br>
</nav> 
<?php
echo("jestes w insert.php <br>");
echo $_POST['name'];
echo $_POST['dzial'];
echo $_POST['zarobki'];
echo $_POST['data_urodzenia'];

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "INSERT INTO Pracownik (null, name, dzial,zarobki,data_urodzenia)
	      VALUES (
					null, 
					$_POST['name'], 
					$_POST['dzial'], 
					$_POST['zarobki'],
					$_POST['data_urodzenia']
				";
if ($conn->query($sql) === TRUE) {
  echo ($sql);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
