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
                        require_once("../connect.php");
                        $sql = "select rola, Imie_Nazwisko, (`WDW`.ID) as ID_TAB from `jablonski-filip_pbd`.WDW, `jablonski-filip_pbd`.rola, `jablonski-filip_pbd`.Osoby where Osoby.ID=osoby_id and rola.id=klasa_id order by ID_TAB asc";
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
                            echo("<th>ID</th><th>Rola</th><th>Pracownik</th>");
                            while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['rola']."</td><td>".$row['Imie_Nazwisko']."</td>".'<td>
	    
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