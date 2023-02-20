<?php

function Order($str1, $str2)    // Callback Function For usort.
{
    return strlen($str2) - strlen($str1);
}

function sortString($strings)   // Sort elements as ascending order using usot.
{
    usort($strings, "Order");
    return $strings;
}


$strings = array("apple", "pinapple", "cherry", "banana", "grap");
$sortStrings = sortStringArray($strings);   // Call the user define function

print_r($sortStrings);  // Print New Array .
