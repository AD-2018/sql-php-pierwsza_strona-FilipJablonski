<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("connect.php");
$sql = "SELECT * FROM czat,czat2";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     while($row = mysqli_fetch_assoc($result)) {
      $sql = "UPDATE gracze SET gracz=".'"'.$row[nowy_gracz].'"'.' WHERE id='.$row['id']." and idczat=".$row['id'];
      if ($conn->query($sql) === TRUE) {
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
        };
      while($row = mysqli_fetch_assoc($result)) {
      $sql = "UPDATE gracze SET wiadomosc=".'"'.$row[nowa_wiadomosc].'"'.' WHERE id='.$row['id']." and idczat=".$row['id'];
      if ($conn->query($sql) === TRUE) {
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
        };
         while($row = mysqli_fetch_assoc($result)) {
      $sql = "UPDATE gracze SET nowy_gracz=".'"'.$row[gracz].'"'.' WHERE id2='.$row['id2']." and idczat=".$row['id'];
      if ($conn->query($sql) === TRUE) {
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
        };
      while($row = mysqli_fetch_assoc($result)) {
      $sql = "UPDATE gracze SET nowa_wiadomosc=".'"'.$row[wiadomosc].'"'.' WHERE id2='.$row['id2']." and idczat=".$row['id'];
      if ($conn->query($sql) === TRUE) {
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
        };
?>
</body>
</html>
