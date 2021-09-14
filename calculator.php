<?php

function calculator($valeur1, $valeur2, $operation = ""){
    //si rien preciser pour l'operation,
    //par defaut doit faire une addition
   
    switch($operation){
        case "*":
            return $valeur1 * $valeur2;
            break;
        case "/":
            return $valeur1 / $valeur2;
            break;
        case "-":
            return $valeur1 - $valeur2;
            break;
        case "+":
        default:
            return $valeur1 + $valeur2;
            break;
    }
}

echo calculator(10, 5);