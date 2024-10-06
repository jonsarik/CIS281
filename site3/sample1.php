<?php

function jonathan() {
    echo "<h1>This is Jonathan!!!</h1>";
}

function calcTriArea($base, $height) {
    $area = $base * $height / 2;
    echo "The area of the triangle is ==> $area<br>";
}

function calcTriArea2 ($base, $height) {
    $area = $base * $height / 2;
    return $area;
}

$names=array("Jonathan", "Samira", "Crenguta", "Su", "Travis");
function PrintNames($names) {
    foreach($names as $n) {
        echo "$n<br>";
    }
}

jonathan();
calcTriArea(20, 10);
$area = calcTriArea2(30, 15);
echo "The area of the second triangle is ==> $area<br>";
echo "The area of the third triangle is ==> ".calcTriArea2(40, 20)."<br>";
echo "<br>";
PrintNames($names);
?>