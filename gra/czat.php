<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
require_once("../connect.php");
$sql = "SELECT * FROM czat,czat2 where id=idczat";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     while($row = mysqli_fetch_assoc($result)) {
      $sql = "UPDATE czat SET gracz=".'"'.$row[nowy_gracz].'"'.' WHERE id='.$row['id'];
      if ($conn->query($sql) === TRUE) {
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
        };
     };
    $sql = "SELECT * FROM czat,czat2 where id=idczat";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
      while($row = mysqli_fetch_assoc($result)) {
      $sql = "UPDATE czat SET wiadomosc=".'"'.$row[nowa_wiadomosc].'"'.' WHERE id='.$row['id'];
      if ($conn->query($sql) === TRUE) {
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
        };
    $sql = "SELECT * FROM czat,czat2 where id2=idczat+1";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    
         while($row = mysqli_fetch_assoc($result)) {
      $sql = "UPDATE czat2 SET nowy_gracz=".'"'.$row[gracz].'"'.' WHERE idczat='.$row['id'].'+1';
      if ($conn->query($sql) === TRUE) {
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
        };
        $sql = "SELECT * FROM czat,czat2 where id2=idczat+1";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
      while($row = mysqli_fetch_assoc($result)) {
      $sql = "UPDATE czat2 SET nowa_wiadomosc=".'"'.$row[wiadomosc].'"'.' WHERE idczat='.$row['id'].'+1';
      if ($conn->query($sql) === TRUE) {
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }
       $conn->close();
        };
?>
</body>
</html>
