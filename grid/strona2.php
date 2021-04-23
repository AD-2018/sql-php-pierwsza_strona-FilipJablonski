<!DOCTYPE html>
<html>

<head>
    <title>Filip Jabłoński 3Ti</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Grid.css">
</head>

<body>
    <strong>
    <div class="str2">
        <div class="str2A">
            <?php
                require_once("funkcje.php");
                niefajne("WDW", "Klasa", "Osoby", "id", "dane_1", "dane_2", "Imie_Nazwisko", "Klasa");
                id_del_duze("WDW");
            ?>
        </div>
        <div class="str2B">
            <h1>Nauczyciele</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Osoby", "1", "id", "Imie_Nazwisko");
            id_del_male("Osoby", "1");
            ?>
        </div>
        <div class="str2C">
            <h1>Klasa</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Klasa", "2", "id", "Klasa");
            id_del_male("Klasa", "2");
            ?>
        </div>
        <div class="str2D">4</div>
        <div class="str2E">5</div>
        <div class="str2F">Szkoła</div>
    </div>
    </strong>
</body>

</html>