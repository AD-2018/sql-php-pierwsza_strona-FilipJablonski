<!DOCTYPE html>
<html>

<head>
    <title>Filip Jabłoński 3Ti</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Grid.css">
</head>

<body>
    <strong>
    <div class="str3">
        <div class="str1A">
        <?php
                require_once("../connect.php");
                $sql = "SELECT * FROM osoby_v2";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h1>Lekarze</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Lekarz</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['id']."</td><td>".$row['imiona']."</td>".'<td>
	    
                            <form action="delete.php" method="POST">
                             <input name="id" value="'.$row['ID_TAB'].'" hidden>
                             <input name="tabela" value="osoby_v2" hidden>
                              <input type="submit" class="button_x" value="X">
                            </form>
                            
                            </td>');
                           echo('</tr>');
                       }
                    echo("</table>");
                    echo ("<br>");
                    ?>
        </div>
        <div class="str1B"><?php
                require_once("../connect.php");
                $sql = "SELECT * FROM Osoby";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h1>Pacjenci</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Imię i Nazwisko</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['ID']."</td><td>".$row['Imie-Nazwisko']."</td>".'<td>
	    
                            <form action="delete.php" method="POST">
                             <input name="id" value="'.$row['ID_TAB'].'" hidden>
                             <input name="tabela" value="Osoby" hidden>
                              <input type="submit" class="button_x" value="X">
                            </form>
                            
                            </td>');
                           echo('</tr>');
                       }
                    echo("</table>");
                    echo ("<br>");
            ?></div>
        <div class="str1C">
        <?php
                        require_once("../connect.php");
                        $sql = "select imiona, `Imie-Nazwisko`, (`WDW`.ID) as ID_TAB from `jablonski-filip_pbd`.WDW, `jablonski-filip_pbd`.osoby_v2, `jablonski-filip_pbd`.Osoby where Osoby.ID=osoby_id and osoby_v2.id=klasa_id order by ID_TAB asc";
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
                            echo("<th>ID</th><th>Lekarz</th><th>Pacjent</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['imiona']."</td><td>".$row['Imie-Nazwisko']."</td>".'<td>
	    
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
        </div>
        <div class="str1D">4</div>
        <div class="str1E">Przychodnia</div>
    </div>
    </strong>
</body>

</html>