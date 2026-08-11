<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja_roupas";

$conexao =  mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("Erro na conexâo: " . mysqli_connect_error());
}

?>
