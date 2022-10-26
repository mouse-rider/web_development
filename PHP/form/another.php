<link rel="stylesheet" href="style.css">

<?php
        include("conn.php");
        echo "<table>";
        foreach ($_GET as $key=>$value){
            echo "<tr>";
            echo "<td><b>";
            echo ($key).":";
            echo "</b></td>";
            echo "<td>";
            echo $value;
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";

        
    ?>
?>