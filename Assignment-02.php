<?php

/*
*
*   Write a PHP function to concatenate two strings, 
*   but with the second string starting from the end 
*   of the first string.
*
**/


function concateString($s1, $s2){
    return $s1 . $s2;
}

// Two String
$str1 = "Hello World,";
$str2 = "I'm Jobaed";

echo concateString($str1, $str2);
