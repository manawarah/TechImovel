<?php
session_start();
if (!isset($_SESSION['admin_logado'])) {
    header("Location: login_admin.php");
    exit;
}
include_once('./includes/conexao.php');

$id = $_GET['id'] ?? null;

if ($id) {
    $select = $conexao->prepare("SELECT imagem FROM imoveis WHERE id = ?");
    $select->bind_param("i", $id);
    $select->execute();
    $result = $select->get_result()->fetch_assoc();

    if ($result && file_exists('./assets/imoveis/' . $result['imagem'])) {
        unlink('./assets/imoveis/' . $result['imagem']);
    }

    $stmt = $conexao->prepare("DELETE FROM imoveis WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: ./includes/painel_admin.php");
exit;
?>
