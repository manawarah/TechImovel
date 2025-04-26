<?php
session_start();
if (!isset($_SESSION['admin_logado'])) {
    header("Location: login_admin.php");
    exit;
}
include_once('./includes/conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $construtora = $_POST['construtora'];
    $metragem = $_POST['metragem'];
    $localizacao = $_POST['localizacao'];
    $preco = $_POST['preco'];
    $link_mais_info = $_POST['link_mais_info'];

    $imagem = $_FILES['imagem']['name'];
    $caminho = './assets/imoveis/' . basename($imagem);
    move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);

    $stmt = $conexao->prepare("INSERT INTO imoveis (titulo, construtora, metragem, localizacao, preco, imagem, link_mais_info) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $titulo, $construtora, $metragem, $localizacao, $preco, $imagem, $link_mais_info);
    $stmt->execute();
    $stmt->close();

    header("Location: ./includes/painel_admin.php");
    exit;
}
?>

<!-- Formulário -->
<form method="post" enctype="multipart/form-data">
    <h2>Adicionar Imóvel</h2>
    <input name="titulo" placeholder="Título" required><br>
    <input name="construtora" placeholder="Construtora" required><br>
    <input name="metragem" placeholder="Metragem" required><br>
    <input name="localizacao" placeholder="Localização" required><br>
    <input name="preco" placeholder="Preço" required><br>
    <input type="file" name="imagem" required><br>
    <input name="link_mais_info" placeholder="Link mais info"><br>
    <button type="submit">Adicionar</button>
</form>
