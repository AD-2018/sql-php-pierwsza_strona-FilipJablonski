<!DOCTYPE html>
<html>

<head>
    <title>Filip Jabłoński 3Ti</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Grid.css">
</head>

<body>
    <strong>
    <div class="str6">
        <div class="str6A">
            <h1>Firma</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Firma", "1", "id", "firma");
            id_del_male("Firma", "1");
            ?>
        </div>
        <div class="str6B">
            <h1>Artykuł</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("artykuly", "2", "id", "artykul");
            id_del_male("artykuly", "2");
            ?>
        </div>
        <div class="str6C">
            <?php
                require_once("funkcje.php");
                niefajne("WDW", "Firma", "artykuly", "id", "dane_1", "dane_2", "firma", "artykul");
                id_del_duze("WDW");
            ?>
        </div>
        <div class="str6D">4</div>
        <div class="str6E">5</div>
        <div class="str6F">Sklep</div>
    </div>
    </strong>
</body>

</html>