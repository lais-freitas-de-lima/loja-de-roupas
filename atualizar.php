<?php
include 'conexao.php';

$id = $_POST ['id'];
$nome = $_POST ['nome'];
$tamanho = $_POST ['tamanho'];
$cor = $_POST ['cor'];
$preco = $_POST ['preco'];
$categoria = $_POST ['categoria'];

$sql = "UPDATE roupas SET
    nome = '$nome',
    tamanho = '$tamanho',
    cor = '$cor',
    preco = '$preco',
    categoria = '$categoria'
WHERE id = $id ";

mysqli_query($conexao, $sql);

header('Location: index.php');
?>

