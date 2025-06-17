<?php

$alunosNota = [
    "Joao" => "8",
    "Maria" => "10",
    "Pedro" => "8",
];

$total = 0;

foreach ($alunosNota as $aluno => $nota) {
    echo "Aluno: [{$aluno}] Nota: [{$nota}] <br>";
    $total += $nota;
    $media = $total/3;
}

echo "<br>";
echo "A média das notas é: " . number_format($media,2) . "<br>";
?>