<?php

$preco = [10,8,12,4,11];

echo"A cebola é: R$". $preco[0];
echo"<br>";
echo"A Maçã é: R$". $preco[1];
echo"<br>";
echo"A Pera é: R$". $preco[2];
echo"<br>";
echo"A Abobora é: R$". $preco[3];
echo"<br>";
echo"O Alho é: R$". $preco[4];
echo"<br>";

$total = 0; 
foreach ($preco as $valor) {
    $total += $valor;
}
echo"O total da compra é: R$" . $total;
?>