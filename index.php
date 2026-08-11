<?php
include 'conexao.php';
$sql = "SELECT * FROM roupas ORDER BY id DESC"; 
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de roupas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Cadastro de Roupas</h1>

        <form class="formulario" action="salvar.php" method="POST">
            <input class="cores" type="text" name="nome" placeholder="Nome da roupa" required>
            <input class="cores" type="text" name="tamanho" placeholder="Tamanho" required>
            <input class="cores" type="text" name="cor" placeholder="Cor" required>
            <input class="cores" type="number" step="0.01" name="preco" placeholder="Preço" required>
            <input class="cores" type="text" name="categoria" placeholder="Categoria" required>
            <button class="botao" type="submit">Cadastrar</button>
        </form>
    </div>
    <table>
        <tr class="tabela">
            <th>ID</th>
            <th>Nome</th>
            <th>Tamanho</th>
            <th>Cor</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>
        <?php while($dados = mysqli_fetch_assoc($resultado)) { ?>

        <tr class="tabela2">
            <td><?php echo $dados['id']; ?></td>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['tamanho']; ?></td>
            <td><?php echo $dados['cor']; ?></td>
            <td>R$<?php echo number_format($dados['preco'],2, ',' , '.'); ?></td>
            <td><?php echo $dados['categoria']; ?></td>
            <td><a class="link" href="editar.php?id=<?php echo $dados['id']; ?>">Editar</a></td>
            <td><a  class="link" href="excluir.php?id=<?php echo $dados['id']; ?>">Excluir</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>