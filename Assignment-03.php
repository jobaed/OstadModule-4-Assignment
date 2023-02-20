<?php


/*
*
*   Write a PHP function to remove the first and last
*   element from an array and return the remaining 
*   elements as a new array.
*
**/

function removeFirstLastElements($cars){
    if(array_pop($cars) && array_shift($cars)){
        return $cars;
    }    
}

$cars = array("Volvo", "BMW", "Toyota","Hundai", "Marcitise");

$newCars = removeFirstLastElements($cars);
print_r($newCars);