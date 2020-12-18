<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("connect.php");
$sql = "SELECT * FROM czat";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     while($row = mysqli_fetch_assoc($result)) {
      $gracz = $row[gracz];
      $wiadomosc = $row[wiadomosc];
      $gracz1 = $row[gracz1];
      $wiadomosc1 = $row[wiadomosc1];
      $sql = "UPDATE gracze SET gracz=".'"'.$gracz1.'"'.' WHERE id='.$row['id'];
      if ($conn->query($sql) === TRUE) {
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
      $sql = "UPDATE gracze SET gracz=".'"'.$wiadomosc1.'"'.' WHERE id='.$row['id'];
      if ($conn->query($sql) === TRUE) {
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
         header('Location: https://jablonski-filip.herokuapp.com/testowa_gra.php');
?>
</body>
</html>
