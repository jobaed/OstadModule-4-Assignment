<?php

/*
*
*   Write a PHP function to check if a 
*   string contains only letters and whitespace.
*
**/


function isWhitespaceAndChar($string){
    return preg_match('/^[a-zA-Z\s]+$/', $string);
}

$string1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit";  // Only Charecter And Whitspace
$string2 = "Hello World, Lorem ipsam dollar."; // With Others Charecter

$result = isWhitespaceAndChar($string1);    // Output 1
// $result = isWhitespaceAndChar($string2);    // Output 0

if($result){
   echo "This string have only charecters and whitspace";
}else{
    echo "This string have others charecters";
}

