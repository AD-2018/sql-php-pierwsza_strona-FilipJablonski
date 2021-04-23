<!DOCTYPE html>
<html>

<head>
	<title>Filip Jabłoński 3Ti</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="Grid.css">
</head>
<body>
    <strong>
    <div class="str4">
        <div class="str4A">
            <h1>Auta</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("auta", "2", "id", "auto");
            id_del_male("auta", "2");
            ?>
        </div>
        <div class="str4B">
            <h1>Mechanicy</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Osoby", "1", "id", "Imie_Nazwisko");
            id_del_male("Osoby", "1");
            ?>
        </div>
        <div class="str4C">
            <?php
                require_once("funkcje.php");
                niefajne("WDW", "auta", "Osoby", "id", "dane_1", "dane_2", "Imie_Nazwisko", "auto");
                id_del_duze("WDW");
            ?>
        </div>
        <div class="str4D">4</div>
        <div class="str4E">Serwis Samochodowy</div>
    </div>
    </strong>
</body>
</html>
