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
        <?php
                require_once("../connect.php");
                $sql = "SELECT * FROM Firma";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h1>Firma</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Firma</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['ID']."</td><td>".$row['firma']."</td>".'<td>
	    
                            <form action="delete.php" method="POST">
                             <input name="id" value="'.$row['ID_TAB'].'" hidden>
                             <input name="tabela" value="Firma" hidden>
                              <input type="submit" class="button_x" value="X">
                            </form>
                            
                            </td>');
                           echo('</tr>');
                       }
                    echo("</table>");
                    echo ("<br>");
            ?>
        </div>
        <div class="str6B">
        <?php
                require_once("../connect.php");
                $sql = "SELECT * FROM artykuly";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h1>Artykuły</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Artykuł</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['id']."</td><td>".$row['artykul']."</td>".'<td>
	    
                            <form action="delete.php" method="POST">
                             <input name="id" value="'.$row['ID_TAB'].'" hidden>
                             <input name="tabela" value="artykuly" hidden>
                              <input type="submit" class="button_x" value="X">
                            </form>
                            
                            </td>');
                           echo('</tr>');
                       }
                    echo("</table>");
                    echo ("<br>");
            ?>
        </div>
        <div class="str6C">
        <?php
                        require_once("../connect.php");
                        $sql = "select artykul, firma, (`WDW`.ID) as ID_TAB from `jablonski-filip_pbd`.WDW, `jablonski-filip_pbd`.Firma, `jablonski-filip_pbd`.artykuly where Firma.ID=osoby_id and artykuly.id=klasa_id order by ID_TAB asc";
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
                            echo("<th>ID</th><th>Firma</th><th>Artykuł</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['firma']."</td><td>".$row['artykul']."</td>".'<td>
	    
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
        <div class="str6D">4</div>
        <div class="str6E">5</div>
        <div class="str6F">Sklep</div>
    </div>
    </strong>
</body>

</html>