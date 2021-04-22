<!DOCTYPE html>
<html>

<head>
	<title>Filip Jabłoński 3Ti</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="Grid.css">
</head>
<body>
    <strong>
    <div class="str4">
        <div class="str4A">
            <h1>Auta</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("auta", "2", "id", "auto");
            id_del_male("auta", "2");
            ?>
        </div>
        <div class="str4B">
            <h1>Mechanicy</h1>
            <?php
            require_once("funkcje.php");
            tab_del_male("Osoby", "1", "ID", "`Imie-Nazwisko`");
            id_del_male("Osoby", "1");
            ?>
        </div>
        <div class="str4C">
        <?php
                        require_once("../connect.php");
                        $sql = "select auto, `Imie-Nazwisko`, (`WDW`.ID) as ID_TAB from `jablonski-filip_pbd`.WDW, `jablonski-filip_pbd`.auta, `jablonski-filip_pbd`.Osoby where Osoby.ID=osoby_id and auta.id=klasa_id order by ID_TAB asc";
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
                            echo("<th>ID</th><th>Mechanik</th><th>Auto</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['Imie-Nazwisko']."</td><td>".$row['auto']."</td>".'<td>
	    
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
        <div class="str4D">4</div>
        <div class="str4E">Serwis Samochodowy</div>
    </div>
    </strong>
</body>
</html>
