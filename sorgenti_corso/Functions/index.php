<h1>
<?php

/**
 * <p>
 * Il nome di una funzione deve seguire le regole di nome di php
 * cominciare con lettere o _ ( trattino basso) seguita da lettere, numeri e
 * trattino passo. Il nome non è case sensitive
 * Deve essere preceduta dalla keyword function:
 * </p>
 * 
<pre>
 * <code>
 function foo($arg_1, $arg_2, $arg_n)
{
    echo "Example function.\n";
    return $retval;
}
 * </code>
</pre>
*
 * 
 * <p><ul>
 * <li>Possono essere chiamate prima della definizione</li>
 * <li>Possono essere annidate ma la funzione interna non
 * esiste funché non si chiama la funzione padre.</li>
 * <li>Tutte le funzioni hanno visibilità globale</li>
 * <li> Hanno parametri variabili e parametri di default</li>
 * <li>Possono essere chiamate ricorsivamente</li>
 * </ul>
 * </p>
 */
// FUNZIONI
?>
    
    <?php
 //$result = test();
// var_dump($result);
    function test(){
        echo "funzione chiamata<br>";
        return [3, 5 ,6 ,7];
    }
     function summ($val1, $val2 , $val3 = 10, $val4=null ){
           return $val1 + $val2 + $val3 + $val4;
         
     }
    // $result = summ(2, 5);
   //  var_dump($result);
   //  
     // parametri variabili
      function summVar(){
          
          
           if(!func_num_args()){
               return null;
           }
            $result = 0;
           // return array_sum(func_get_args());
          foreach (func_get_args() as $val){
             $result += $val; 
          }
         // return $result;
          $total = func_num_args();
          $result = 0;
          for($tot =0; $tot < $total; $tot++){
              $result += func_get_arg($tot);
          }
          return $result;
     }
      $result = summVar(2, 5, 7, 9, 11);
      var_dump($result);
    ?>
</h1>
