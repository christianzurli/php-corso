<?php
$data = [
    'name' => 'Christian',
    'lastname' => 'Zurli'
];

//object
$obj = new stdClass();
$obj->name = 'Christian';
$obj->surname = 'Zurli';

//scalar
$name = 'Christian Zurli';

function modifyVal($val=null)
{
    //var_dump($GLOBALS);
    global $data; // con global la sto importanto e sovrascrivendo e posso accedere alle variabili globali di $GLOBALS
    $data['name']='Francesco';
    var_dump($data);
}

var_dump(modifyVal($data));
var_dump($data);