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
                        require_once("../connect.php");
                        $sql = "select Klasa, Imie_Nazwisko, (`WDW`.ID) as ID_TAB from `jablonski-filip_pbd`.WDW, `jablonski-filip_pbd`.Klasa, `jablonski-filip_pbd`.Osoby where Osoby.ID=osoby_id and Klasa.ID=klasa_id order by ID_TAB asc";
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
                            echo("<th>ID</th><th>Nauczyciel</th><th>Klasa</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['Imie_Nazwisko']."</td><td>".$row['Klasa']."</td>".'<td>
	    
                                    <form action="delete.php" method="POST">
                                     <input name="id" value="'.$row['ID_TAB'].'" hidden>
                                     <input name="tabela" value="WDW" hidden>
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
                    <input name="tabela" value="WDW" hidden>
                    <input type="submit" class="button_x" value="USUŃ">
                </form>
        </div>
        <div class="str2B">
            <h1>Nauczyciele</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Osoby", "1", "ID", "Imie_Nazwisko");
            id_del_male("Osoby", "1");
            ?>
        </div>
        <div class="str2C">
            <h1>Klasa</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Klasa", "2", "ID", "Klasa");
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