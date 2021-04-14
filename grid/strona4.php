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
        <div class="str4A">1</div>
        <div class="str4B">
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
                
                    echo("<h1>Mechanicy</h1>");
                
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
        <div class="str4C">3</div>
        <div class="str4D">4</div>
        <div class="str4E">Serwis Samochodowy</div>
    </div>
    </strong>
</body>
</html>
