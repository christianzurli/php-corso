<?php
$arr = array();
$arr = array('red','green','blu');
$arr[] = 'Pink';
$arr[9] = 'Grey';
$arr[] = 'Yellow';
$arr[4] = [1,2,3,4];
$arr['yellow'] = ['Giallo']; 
// per le chiavi solo numeri e stringhe altrimenti fa il cast
$arr['5'] = 'Black';
$arr[6.2] = 'White';
//modificare il valore di un array
array_push($arr['yellow'], 'jiallo'); // primo valore array
$arr['yellow'] = 'Giulietto'; // cambia il valore dell'array
$arr2 = ['a','b','c','d'];
unset ($arr2[2]);
$arr2 = array_values($arr2); // ordina le chiavi numeriche
//echo '<pre>'; var_dump($arr2); echo '</pre>';
