<?php
/* 
class Corso extends stdClass {
    public function __construct($name)
    {
        $this->name = $name;
        return 'Mi chiamo'.$this->name;
    }
}

$var = new Corso('Christian');
echo $var->name;
*/
// isset() se la variabile è stata impostata e non ha valore null
// empty() // stringa "" o "0" come stringa, 0 oppure 0.0, null, false , array vuoto - array()
// is_null() verifica solo il null ma da 'notice' se la variabile non è stata dichiarata, isset invece non da notice

// funzioni parametri variabili
function sum() {
    //$num_params = func_num_args();
    //array_sum(func_get_args());
    $result = 0;
    foreach (func_get_args() as $val) {
        $result += $val;
    }
    $result = 0;
    $total = func_num_args(); //array
    for ($i=0; $i < $total; $i++) {
        $result += func_get_arg($i); // questa funzione ha bisogno di un indice
    }
    // spread operator

    return $result;
}
//var_dump(sum(2,4,5));

// spread operator
function mathOp($op, ...$args) { // come argomento di una funzione lo spread operator restituisce un array
    if (empty($args)) {
        return null;
    }
    $ret = 0;
    switch ($op)  {
        case '+':
            $ret = array_sum($args);
            break;
        case '*':
            $ret =1; //sarebbe sempre 0 la moltiplicazione
            foreach ($args as $arg) {
                $ret *= $arg;
            }
            break;
        case '-':
            $ret = $args[0];
            $vals = array_slice($args,1);
            foreach ($vals as $val) {
                $ret -= $val;
            }
            break;
        case '/':
            $ret = $args[0];
            $vals = array_slice($args,1);
            foreach ($vals as $val) {
                $ret /= $val;
            }
            break;




    }
    return $ret;
}
$vals = [2,4,6];
//echo mathOp('*',...$vals); // passando lo spread come argomento ... scompone l'array

