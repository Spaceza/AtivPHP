<?php
$senhaCorreta = "root";
$senhaInserida = "Admin";

$usuarioCorreto = "Admin";
$usuarioInserido = "Admin";


echo"Digite o seu usuario: ". $usuarioInserido;
echo "<br>Digite sua senha: ". $senhaInserida;

if ($usuarioInserido == $usuarioCorreto and $senhaInserida == $senhaCorreta) {
    echo "<br>Você acabou de logar";
} else  {
 echo "<br>Alguma das credencias está invalida, login mal sucedido!";
}

?>