<?php
function tab_del_male($tab_name, $tab_opcja, $tab_kolumny[]){
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
        echo('<td>
	    
        <form action="delete.php" method="POST">
            <input name="id" value="'.$row[$tab_kolumny[0]].'" hidden>
            <input name="tabela" value="'.$tab_name.'" hidden>
            <input name="opcja" value="'.$tab_opcja.'" hidden>
            <input type="submit" class="button_x" value="X">
        </form>
        
        </td>');
        echo("</tr>");
    }
    echo("</table>");
    echo ("<br>");
}
?>