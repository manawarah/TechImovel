<?php
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
include_once('./includes/header.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $imovel = $conexao->query("SELECT * FROM crm_imoveis WHERE id = $id")->fetch_assoc();
}

if ($_POST) {
  $sql = "UPDATE crm_imoveis SET 
            titulo = '{$_POST['titulo']}', 
            descricao = '{$_POST['descricao']}',
            valor = '{$_POST['valor']}'
          WHERE id = $id";
  $conexao->query($sql);
  header("Location: crm_cliente.php");
}
?>
<a href="./includes/painel_admin.php"></a>

<form method="post">
  Título: <input name="titulo" value="<?= $imovel['titulo'] ?>"><br>
  Descrição: <textarea name="descricao"><?= $imovel['descricao'] ?></textarea><br>
  Valor: <input name="valor" value="<?= $imovel['valor'] ?>"><br>
  <button type="submit">Atualizar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>