<?php
function tab_del_male($tab_name, $tab_opcja, $tab_kolumny[]){
    print_r($tab_kolumny);
    echo ($tab_kolumny[0]);
    echo ($tab_kolumny[1]);
    require("../connect.php");
    $select = implode(', ', $tab_kolumny);
    $sql = "Select ".$select." from " .$tab_name;
    $result = $conn->query($sql);
    echo("<table border=1>");
    echo("<tr>");
    for ($i=0; $i<count($tab_kolumny);$i++){
        echo("<th>".$tab_kolumny."</th>");
    }
    while( $row = $result->fetch_assoc()  ){
        echo("<tr>");
        for($i=0; $i<count($tab_kolumny);$i++){
            echo("<td>".$row[$tab_kolumny[$i]]."</td>");
        }
        echo('<td>');
        echo('<form action="delete.php" method="POST">');
        echo('<input name="id" value="'.$row[$tab_kolumny[0]].'" hidden>');
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
?>