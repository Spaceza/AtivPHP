<?php

$pontos = 100;
$vitoria = 20;
$derrota = -15;

$pw = $pontos + $vitoria;
$pl = $pontos + $derrota;

echo"Você tem : " . $pontos . " pontos";

echo "<br>Você ganhou! Parabéns";

echo "<br>Total De Pontos: " . $pw;
?>