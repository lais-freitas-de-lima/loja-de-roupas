<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM roupas WHERE id = $id"; 
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de roupas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Roupas</h1>

        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" required>
            <input type="text" name="tamanho" value="<?php echo $dados['tamanho']; ?>" required>
            <input type="text" name="cor" value="<?php echo $dados['cor']; ?>">
            <input type="number" step="0.01" name="preco" value="<? echo $dados['preco']; ?>" required>
            <input type="text" name="categoria" value="<?php echo $dados['categoria']; ?>" required>
            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>