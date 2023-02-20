<?php

/*
*
*   Write a PHP function to find the second largest 
*   number in an array of numbers.
*
**/

function findSecondLargeNumber($array){
    sort($array);
    $index =  count($array)-2;
    return $array[$index];
}

$numbers = [12,5,48,6,6,9,98,9,99,100];
$result = findSecondLargeNumber($numbers);

echo "The second large number is: {$result}";