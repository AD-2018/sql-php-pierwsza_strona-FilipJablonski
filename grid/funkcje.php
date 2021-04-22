<?php
function tab_del_male($tab_name, $tab_opcja, $tab_kolumna1, $tab_kolumna2){
    require("../connect.php");
    $sql = "Select ".$tab_kolumna1.", ".$tab_kolumna2." from " .$tab_name;
    $result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>".$tab_kolumna1."</th><th>".$tab_kolumna2."</th><th>Usuń</th>");
    while( $row = $result->fetch_assoc()  ){
        echo("<tr>");
        echo("<td>".$row[$tab_kolumna1]."</td><td>".$row[$tab_kolumna2]."</td>");
        echo('<td>');
        echo('<form action="delete.php" method="POST">');
        echo('<input name="id" value="'.$row[$tab_kolumna1].'" hidden>');
        echo('<input name="tabela" value="'.$tab_name.'" hidden>');
        echo('<input name="opcja" value="'.$tab_opcja.'" hidden>');
        echo('<input type="submit" class="button_x" value="X">');
        echo('</form>');
        echo('</td>');
        echo("</tr>");
    }
    echo("</table>");
    echo ("<br>");
}
function id_del_male($tabela, $opcja){
    echo('<h3>Usuwanie po ID</h3>');
    echo('<form action="delete.php" method="POST">');
    echo('<input type="number" name="id">');
    echo('<input name="tabela" value="'.$tabela.'" hidden>');
    echo('<input name="opcja" value="'.$opcja.'" hidden>');
    echo('<input type="submit" class="button_x" value="USUŃ">');
    echo('</form>');
}
?>