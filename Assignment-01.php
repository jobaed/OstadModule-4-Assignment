<?php

/*
*
*   Write a PHP function to sort an array of strings by their length,
*   in ascending order. (Hint: You can use the usort() function to 
*   define a custom sorting function.)
*
**/

function Order($str1, $str2)    // Callback Function For usort.
{
    return strlen($str1) - strlen($str2);
}

function sortStringArray($strings)   // Sort elements as ascending order using usot.
{
    usort($strings, "Order");
    return $strings;
}


$strings = array("apple", "pinapple", "cherry", "banana", "grap");
$sortStrings = sortStringArray($strings);   // Call the user define function

print_r($sortStrings);  // Print New Array .
