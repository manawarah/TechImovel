<?php
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
include_once('./includes/header.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $cliente = $conexao->query("SELECT * FROM crm_cliente WHERE id = $id")->fetch_assoc();
}

if ($_POST) {
  $sql = "UPDATE crm_cliente SET 
            nome = '{$_POST['nome']}', 
            email = '{$_POST['email']}',
            contato = '{$_POST['contato']}',
            interesse = '{$_POST['interesse']}',
            valor = '{$_POST['valor']}'
          WHERE id = $id";
  $conexao->query($sql);
  header("Location: crm_cliente.php");
}
?>

<form method="post">
  Nome: <input name="nome" value="<?= $cliente['nome'] ?>"><br>
  Email: <input name="email" value="<?= $cliente['email'] ?>"><br>
  Contato: <input name="contato" value="<?= $cliente['contato'] ?>"><br>
  Interesse: <input name="interesse" value="<?= $cliente['interesse'] ?>"><br>
  Valor: <input name="valor" value="<?= $cliente['valor'] ?>"><br>
  <button type="submit">Atualizar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>