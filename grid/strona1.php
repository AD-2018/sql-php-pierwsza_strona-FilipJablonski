<!DOCTYPE html>
<html>

<head>
    <title>Filip Jabłoński 3Ti</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Grid.css">
</head>

<body>
    <strong>
    <div class="str1">
        <div class="str1A">
            <h1>Tytuł</h1>
            <?php
                require_once("funkcje.php");
                tab_del_male("biblTytul", "1", "id", "tytul");
                id_del_male("biblTytul", "1");
            ?>
        </div>
        <div class="str1B">
            <h1>Autor</h1>
            <?php
                require_once("funkcje.php");
                tab_del_male("biblAutor", "2", "id", "autor");
                id_del_male("biblAutor", "2");
            ?>
        </div>
        <div class="str1C">3</div>
        <div class="str1D">
            <?php
                require_once("funkcje.php");
                tab_del_duze("biblAutor_biblTytul", "biblTytul", "biblAutor", "id", "biblTytul_id", "biblAutor_id", "tytul", "autor");
                id_del_duze("biblAutor_biblTytul");
            ?>
        </div>
        <div class="str1E">Biblioteka</div>
    </div>
    </strong>
</body>

</html>