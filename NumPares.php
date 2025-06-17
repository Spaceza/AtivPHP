<?php

$num = 0;
$par = 0;

while ($num <= 100) {
    if ($num % 2 == 0) {
        $par += $num;
    }
    $num++;
}

echo"Resultado da soma dos numeros pares até 100 é: " . $par;


?>