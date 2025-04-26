<?php
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
include_once('./includes/header.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $conexao->query("DELETE FROM crm_imoveis WHERE id = $id");
}

header("Location: crm_cliente.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>