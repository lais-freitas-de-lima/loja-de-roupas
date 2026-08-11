<?php
include 'conexao.php';

$nome = $_POST ['nome'];
$tamanho = $_POST ['tamanho'];
$cor = $_POST ['cor'];
$preco = $_POST ['preco'];
$categoria = $_POST ['categoria'];

$sql = "INSERT INTO roupas(nome, tamanho, cor, preco, categoria)
VALUES('$nome', '$tamanho', '$cor', '$preco', '$categoria')";

mysqli_query($conexao, $sql);

header('Location: index.php');

?>

