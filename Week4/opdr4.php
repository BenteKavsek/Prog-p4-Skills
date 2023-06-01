<?php

function opdr4($randomNMR=6){
    $number = array();
    
    for ($i = 0; $i < $randomNMR; $i++) {
        $number[] = rand(1, 10);
    }
    return $number;
}

function showArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$nummerlijst = opdr4(rand(1, 10));
showArray($nummerlijst);
?>