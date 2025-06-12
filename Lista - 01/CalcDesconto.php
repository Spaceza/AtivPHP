<?php

$preco = "412";
$desconto = "50";


echo "O produto custa R$" . $preco . "<br>";
echo "O desconto desejado é de " . $desconto . "%<br>";
echo "Então o desconto é: R$" . $preco * $desconto / 100 . "<br><br>";

echo "Valor total, já descontado: R$". $preco - ($preco * $desconto /100);

?>