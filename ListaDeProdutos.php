<?php

$produtos = [
    "Cebola" => 10,
    "Maçã" => 8,
    "Pera" => 12,
];

foreach ($produtos as $produto => $preco) {
    echo "Produto: [{$produto}] Preço: R$ [{$preco}] <br>";
}
?>