<?php
// creo le tabelline
for ($i = 0; $i <= 10; $i++) {
    for ($j = 0; $j <= 10; $j++) {
        echo "$i X $j = " . $i * $j . "<br>";
        if ($j == 10) {
            echo "<hr>";
        }
    }
}