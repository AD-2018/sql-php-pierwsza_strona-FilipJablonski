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
                        require_once("../connect.php");
                        $sql = "select (`biblAutor_biblTytul`.id) as ID_TAB, autor, tytul, biblWypoz from biblAutor_biblTytul,biblAutor,biblTytul where biblAutor.id=biblAutor_id and biblTytul.id=biblTytul_id order by autor,ID_TAB asc";
                            if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                             }
                                $result = mysqli_query($conn, $sql);
                            if ( $result) {
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        
                            echo("<h1>Wiele do Wielu</h1>");
                        
                            echo("<table border='1'>");
                            echo("<th>ID</th><th>Tytuł</th><th>Autor</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['tytul']."</td><td>".$row['autor']."</td>".'<td>
	    
                                    <form action="delete.php" method="POST">
                                     <input name="id" value="'.$row['ID_TAB'].'" hidden>
                                     <input name="tabela" value="biblAutor_biblTytul" hidden>
                                      <input type="submit" class="button_x" value="X">
                                    </form>
                                    
                                    </td>');
                                   echo('</tr>');
                               }
                            echo("</table>");
                            echo ("<br>");
                ?>
                <h3>Usuwanie po ID</h3>
                <form action="delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="biblAutor_biblTytul" hidden>
                    <input type="submit" class="button_x" value="USUŃ">
                </form>
        </div>
        <div class="str1E">Biblioteka</div>
    </div>
    </strong>
</body>

</html>