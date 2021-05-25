<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style-test.css">
	<meta charset="UTF-8">
	<title>Filip Jabłoński 3Ti Test</title>
</head>
<body class="uklad_grida">
<?php    

include("menu.php");			//łączenie z menu
require_once("connect.php");		//łączenie z connect
echo ('<div class="grid_c">');
$sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";
$result = mysqli_query($conn, $sql);

    echo("<h1>Tabelka</h1>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzialu</th>"); 		//do th wpisujesz nazwy kolumn
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td>");	//$row['nazwa kolumny z tabelki']
            echo("</tr>");
        };
    echo("</table>");
    echo ("<br>");

?>
</div>
</body>
</html>