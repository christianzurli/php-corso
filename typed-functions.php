<?php
declare(strict_types=1); // non fa il cast

class B {

}

$test = function () {
    echo "funzione variabile";
};

function somma(int $a, int $b, callable $c) :int  { // in php 7 si possono accettare altri tipi di formati (oltre obj, array e string) e con :int gli si dice il formato del ritorno
    return $a + $b;
}
//callable può essere qualsiasi funzione standard closure anonima e variabile
//echo somma(5,4, $test); //

// NULL
function somma2(?int $a, ?int $b) : ?int  { // dall 7.1 con il ? si può passare null, ma si può mewtterlo anche al valore di ritorno ?int
    return $a + $b;
}
var_dump(somma2(null, null));