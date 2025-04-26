<?php
session_start();
if (!isset($_SESSION['admin_logado'])) {
    header("Location: login_admin.php");
    exit;
}
include_once('./includes/conexao.php');

$id = $_GET['id'];
$query = $conexao->prepare("SELECT * FROM imoveis WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();
$result = $query->get_result()->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $construtora = $_POST['construtora'];
    $metragem = $_POST['metragem'];
    $localizacao = $_POST['localizacao'];
    $preco = $_POST['preco'];
    $link_mais_info = $_POST['link_mais_info'];

    if (!empty($_FILES['imagem']['name'])) {
        $imagem = $_FILES['imagem']['name'];
        move_uploaded_file($_FILES['imagem']['tmp_name'], './assets/imoveis/' . $imagem);
    } else {
        $imagem = $result['imagem'];
    }

    $stmt = $conexao->prepare("UPDATE imoveis SET titulo=?, construtora=?, metragem=?, localizacao=?, preco=?, imagem=?, link_mais_info=? WHERE id=?");
    $stmt->bind_param("sssssssi", $titulo, $construtora, $metragem, $localizacao, $preco, $imagem, $link_mais_info, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: ./includes/painel_admin.php");
    exit;
}
?>

<form method="post" enctype="multipart/form-data">
    <h2>Editar Imóvel</h2>
    <input name="titulo" value="<?= $result['titulo'] ?>" required><br>
    <input name="construtora" value="<?= $result['construtora'] ?>" required><br>
    <input name="metragem" value="<?= $result['metragem'] ?>" required><br>
    <input name="localizacao" value="<?= $result['localizacao'] ?>" required><br>
    <input name="preco" value="<?= $result['preco'] ?>" required><br>
    <input type="file" name="imagem"><br>
    <input name="link_mais_info" value="<?= $result['link_mais_info'] ?>"><br>
    <button type="submit">Salvar</button>
</form>
