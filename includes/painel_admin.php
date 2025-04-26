<?php
session_start();
if (!isset($_SESSION['admin_logado'])) {
    header("Location: login_admin.php");
    exit;
}


include_once('../includes/conexao.php');
include_once('../includes/bootstrap_script.php');
include_once('../includes/header_admin.php');
include_once('../includes/bootstrap.php');

// Consulta os imóveis
$sql = "SELECT * FROM imoveis ORDER BY id DESC";
$result = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Painel de Imóveis</h2>
    <p>Bem-vindo, <?= $_SESSION['admin']; ?> | <a href="../logout.php">Sair</a></p>

    <a href="../admin_adicionar.php" class="btn btn-success mb-3">+ Adicionar Imóvel</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>

                <th>ID</th>
                <th>Título</th>
                <th>Construtora</th>
                <th>Metragem</th>
                <th>Localização</th>
                <th>Preço</th>
                <th>Imagem</th>
                <th>Link</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($imovel = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $imovel['id']; ?></td>
                    <td><?= $imovel['titulo']; ?></td>
                    <td><?= $imovel['construtora']; ?></td>
                    <td><?= $imovel['metragem']; ?></td>
                    <td><?= $imovel['localizacao']; ?></td>
                    <td><?= $imovel['preco']; ?></td>
                    <td><img src="../assets/imoveis/<?= $imovel['imagem']; ?>" width="100"></td>
                    <td><a href="<?= $imovel['link_mais_info']; ?>" target="_blank">Ver</a></td>
                    <td>
                        
                        <a href="../admin_editar.php?id=<?= $imovel['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="../admin_deletar.php?id=<?= $imovel['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
