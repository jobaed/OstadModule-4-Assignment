<?php

function removeFirstLastElements($cars){
    if(array_pop($cars) && array_shift($cars)){
        return $cars;
    }    
}

$cars = array("Volvo", "BMW", "Toyota","Hundai", "Marcitise");

$newCars = removeFirstLastElements($cars);
print_r($newCars);