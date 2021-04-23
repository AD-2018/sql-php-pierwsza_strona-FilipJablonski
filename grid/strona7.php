<!DOCTYPE html>
<html>

<head>
    <title>Filip Jabłoński 3Ti</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Grid.css">
</head>

<body>
    <strong>
    <div class="str7">
        <div class="str7A">
            <h1>Sprawa</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Sprawa", "1", "id", "sprawa");
            id_del_male("Sprawa", "1");
            ?>
        </div>
        <div class="str7B">
            <h1>Prawnik</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Osoby", "2", "id", "Imie_Nazwisko");
            id_del_male("Osoby", "2");
            ?>
        </div>
        <div class="str7C">
            <?php
                require_once("funkcje.php");
                niefajne("WDW", "Sprawa", "Osoby", "id", "dane_1", "dane_2", "sprawa", "Imie_Nazwisko");
                id_del_duze("WDW");
            ?>
        </div>
        <div class="str7D">4</div>
        <div class="str7E">5</div>
        <div class="str7F">6</div>
        <div class="str7G">Kancelaria Prawna</div>
    </div>
    </strong>
</body>

</html>