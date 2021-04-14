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
        <div class="str2A">1</div>
        <div class="str2B">
        <?php
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
                
                    echo("<h1>Nauczyciele</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Imię i Nazwisko</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['ID']."</td><td>".$row['Imie-Nazwisko']."</td>");
                            echo("</tr>");
                        };
                    echo("</table>");
                    echo ("<br>");
            ?>
        </div>
        <div class="str2C">3</div>
        <div class="str2D">4</div>
        <div class="str2E">5</div>
        <div class="str2F">6</div>
    </div>
    </strong>
</body>

</html>