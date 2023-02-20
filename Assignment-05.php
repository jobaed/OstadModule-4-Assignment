<?php

function findSecondLargeNumber($array){
    sort($array);
    $index =  count($array)-2;
    return $array[$index];
}

$numbers = [12,5,48,6,6,9,98,9,99,100];
$result = findSecondLargeNumber($numbers);

echo "The second large number is: {$result}";