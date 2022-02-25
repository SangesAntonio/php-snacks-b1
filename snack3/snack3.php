<?php
/*Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.*/
$numbers = [];
while (count($numbers) < 15) {

    $randNumb = rand(1, 100);

    if (!in_array($randNumb, $numbers)) {

        $numbers[] = $randNumb;
    };
};
var_dump($numbers);
