<!DOCTYPE html>
<html>

<head>
    <title>Filip Jabłoński 3Ti</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Grid.css">
</head>

<body>
    <strong>
    <div class="str8">
        <div class="str8A">
            <h1>Rola</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("rola", "1", "id", "rola");
            id_del_male("rola", "1");
            ?>
        </div>
        <div class="str8B">
            <?php
                require_once("funkcje.php");
                niefajne("WDW", "rola", "Osoby", "id", "dane_1", "dane_2", "rola", "Imie_Nazwisko");
                id_del_duze("WDW");
            ?>
        </div>
        <div class="str8C">3</div>
        <div class="str8D">
            <h1>Pracownicy</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Osoby", "2", "id", "Imie_Nazwisko");
            id_del_male("Osoby", "2");
            ?>
        </div>
        <div class="str8E">5</div>
        <div class="str8F">System Informatyczny</div>
    </div>
    </strong>
</body>

</html>