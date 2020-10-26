<?php
// by reference or by val
//array
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

function modifyVal($val)
{
    if (is_object($val)) {
        $val->name = "Francesco";
    } elseif (is_array($val)) {
        $val['name'] = "Francesco";
    } else {
        $val = "Christian";
    }
    echo "Interno funzione";
    var_dump($val);
}
echo "prima della funzione";
var_dump($name);
modifyVal($name);
echo "dopo della funzione";
// se si passa un oggetto, l'handler modifica l'oggetto
// se si passa un array, l'handler modifica l'oggetto sono nella funzione ma l'array rimane invariato
// se si passa una variabile l'handler modifica l'oggetto sono nella funzione non la variabile stessa
// se si vuole passare coome riferimento si usa sempre & prima dell'argomento, ad esempio function modifyVal(&$val)
var_dump($name);