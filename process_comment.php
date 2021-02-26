<?php

    $userName=$_POST["username"];
    echo "Hello <b>$userName<b>!<br>";

    // fetch rows in the table
while( $row = $result->fetch_assoc() ) {
    echo "<tr>\n";
    foreach ($row as $cell){
        echo "<td> $cell </td>";
    }
     echo "</tr>\n"; 
}


?>
