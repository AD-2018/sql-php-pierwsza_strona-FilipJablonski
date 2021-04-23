<!DOCTYPE html>
<html>

<head>
    <title>Filip Jabłoński 3Ti</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Grid.css">
</head>

<body>
    <strong>
    <div class="str5">
        <div class="str5A">
            <h1>Fryzjerzy</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("osoby_v2", "1", "id", "imiona");
            id_del_male("osoby_v2", "1");
            ?>
        </div>
        <div class="str5B">
            <h1>Klienci</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Osoby", "2", "id", "Imie_Nazwisko");
            id_del_male("Osoby", "2");
            ?>
        </div>
        <div class="str5C">
            <?php
                require_once("funkcje.php");
                niefajne("WDW", "osoby_v2", "Osoby", "id", "dane_1", "dane_2", "imiona", "Imie_Nazwisko");
                id_del_duze("WDW");
            ?>
        </div>
        <div class="str5D">SPA</div>
    </div>
    </strong>
</body>

</html>