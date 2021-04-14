<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Filip Jabłoński 3Ti</title>
</head>
<body>
<?php include"menu.php" ?>
<div class="zawartosc">
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
</div>
</body>
</html>
