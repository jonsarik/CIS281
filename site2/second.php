<?php
$names=array("Gustavo", "James", "Luke", "Laurie");
foreach($names as $n)
{
    echo "$n <br>";
}

$numbers=array(array(10,11,12),array(20,21,22),array(30,31,32));
foreach ($numbers as $row) {
    foreach ($row as $cols) {
        echo "$cols"." ";
    }
    echo "<br>";
}
?>