<?php

$nota1 = "10";
$nota2 = "8";
$nota3 = "9";
$media = ($nota1+$nota2+$nota3)/3;
echo"A média de susa notas é: " . $media . "<br>";

if ($media >= 7) {
    echo "Você foi aprovado.";
} else {
    echo "Você foi reprovado";
}
?>