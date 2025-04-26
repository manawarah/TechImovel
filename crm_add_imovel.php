<?php
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
include_once('./includes/header.php');
?>

<form method="post">
    Título: <input name="titulo"><br>
    Descrição: <input name="descricao"><br>
    Valor: <input name="valor"><br>
    Pretenção: <input name="pretencao"><br>
    <button type="submit">Salvar</button>
</form>

<?php
if ($_POST) {
    include_once('./includes/conexao.php');
    $sql = "INSERT INTO crm_imoveis (titulo, descricao, valor, pretencao)
          VALUES ('{$_POST['titulo']}', '{$_POST['descricao']}', '{$_POST['valor']}', '{$_POST['pretencao']}')";
    $conexao->query($sql);
    header("Location: ./crm_cliente.php");
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>