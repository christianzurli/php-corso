<?php
// By Reference e ByVal
//array
$data = [
    'name'=>' John',
    'lastname'=>'Dow'
];
//object
$obj = new stdClass();
$obj->name='John';
$obj->lastname =' dow';

// Scalar
$name ='John Dow';

function modifyVal(&$val){
    
     if(is_object($val)){
         $val->name ='HIDRAN';
     } else if(is_array($val)){
         $val['name']  ='HIDRAN';
     } else {
       $val = 'HIDRAN';  
     }
     echo "<h1>Interno funzione</h1>";
     var_dump($val);
}
var_dump($data);
modifyVal($data);
 echo "<h1>Dopo funzione</h1>";
var_dump($data);