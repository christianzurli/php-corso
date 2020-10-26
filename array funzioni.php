<?php
$arr = [
    [
        'name' => 'Christian',
        'age' => '43',
        'city' => 'Siena'
    ]
];
$prefix = "suffisso"; // nel caso specifico questa variabile globale non esiste nella funzione sotto e $prefix non viene riconosciuta, si aggiunge USE
$arr_new = array_map(function ($arr_v) use ($prefix) { // come se fosse una lambda function o anonima
    foreach ($arr_v as $key => $value) {
        $arr_v[$key] = strtoupper($value).' '.$prefix;
    }
    return $arr_v;
}, $arr);
var_dump($arr_new);

$arr2 = [
        'name' => 'Christian',
        'age' => '43',
        'city' => 'Siena'
];

//array functions php 7.4
$prefix = "suffisso"; // con le array functions la funzione sotto eredita le variabili dell'ambiente circostante/scope
$arr2_new = array_map(fn($v) => strtoupper($v).' '.$prefix, $arr2);
var_dump($arr2_new);