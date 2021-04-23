<!DOCTYPE html>
<html>

<head>
    <title>Filip Jabłoński 3Ti</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Grid.css">
</head>

<body>
    <strong>
    <div class="str9">
        <div class="str9A">
            <h1>Pracownicy</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Osoby", "2", "id", "Imie_Nazwisko");
            id_del_male("Osoby", "2");
            ?>
        </div>
        <div class="str9B">
            <h1>Projekty</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("projekt", "1", "id", "projekt");
            id_del_male("projekt", "1");
            ?>
        </div>
        <div class="str9C">
        <?php
                require_once("funkcje.php");
                niefajne("WDW", "projekt", "Osoby", "id", "dane_1", "dane_2", "projekt", "Imie_Nazwisko");
                id_del_duze("WDW");
            ?>
        </div>
        <div class="str9D">4</div>
        <div class="str9E">Firma</div>
    </div>
    </strong>
</body>

</html>