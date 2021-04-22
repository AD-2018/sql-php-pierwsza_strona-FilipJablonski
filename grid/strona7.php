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
                        require_once("../connect.php");
                        $sql = "select sprawa, Imie_Nazwisko, (`WDW`.ID) as ID_TAB from `jablonski-filip_pbd`.WDW, `jablonski-filip_pbd`.Sprawa, `jablonski-filip_pbd`.Osoby where Osoby.ID=osoby_id and Sprawa.id=klasa_id order by ID_TAB asc";
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
                            echo("<th>ID</th><th>Sprawa Sądowa</th><th>Prawnik</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['sprawa']."</td><td>".$row['Imie_Nazwisko']."</td>".'<td>
	    
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
                                <h3">Usuwanie po ID</h3>
                <form action="delete.php" method="POST">
                    <input type="number" name="id">
                    <input name="tabela" value="WDW" hidden>
                    <input type="submit" class="button_x" value="USUŃ">
                </form>
        </div>
        <div class="str7D">4</div>
        <div class="str7E">5</div>
        <div class="str7F">6</div>
        <div class="str7G">Kancelaria Prawna</div>
    </div>
    </strong>
</body>

</html>