<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
require_once("../connect.php");
$liczenie = "SELECT count(osoby_id) FROM `jablonski-filip_pbd`.WDW where osoby_id=4;"
if (query($liczenie)>1){
    echo ("więcej");
} else {
    echo ('mniej');
}
?>
</body>
</html>