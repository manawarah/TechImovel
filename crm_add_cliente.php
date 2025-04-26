<?php
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
include_once('./includes/header.php');
?>

<form method="post">
    Nome: <input name="nome"><br>
    Email: <input name="email"><br>
    Contato: <input name="contato"><br>
    Interesse: <input name="interesse"><br>
    Valor: <input name="valor"><br>
    <button type="submit">Salvar</button>
</form>

<?php
if ($_POST) {
    include_once('./includes/conexao.php');
    $sql = "INSERT INTO crm_cliente (nome, email, contato, interesse, valor)
          VALUES ('{$_POST['nome']}', '{$_POST['email']}', '{$_POST['contato']}', '{$_POST['interesse']}', '{$_POST['valor']}')";
    $conexao->query($sql);
    header("Location: crm_cliente.php");
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>