<?php
$somma = function ($a, $b) {
    echo $a + $b;
};
// la variabile somma deve essere settata per prima, non come una funzione che si può settare dopo essere stata richiamata
//$somma (2,3);
function test(Closure $function) {
    $function(5,5);
}

//test($somma);

// le funzioni anonime sono utili come callback
$array = [2,4,6];
$double = function(&$val) { // la & passa la variabile come riferimento quindi cambia i valori originali
    echo $val *= 2;
};
array_walk($array, $double);

// se devo fare una funzione riutilizzabile la funzione anonima non è indicata ma ci vuole una funzione normalmente definita