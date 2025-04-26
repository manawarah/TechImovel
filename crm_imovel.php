<?php
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
include_once('./includes/header.php');
?>
<h2>Imóveis Captados</h2>
<a href="crm_add_imovel.php">Adicionar Imóvel</a>
<table border="1">
<tr>
  <th>Título</th><th>Descrição</th><th>Valor</th><th>Ações</th>
</tr>
<?php
$result = $conexao->query("SELECT * FROM crm_imoveis");
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['titulo']}</td>
        <td>{$row['descricao']}</td>
        <td>{$row['valor']}</td>
        <td>
          <a href='crm_edit_imovel.php?id={$row['id']}'>Editar</a> |
          <a href='crm_delete_imovel.php?id={$row['id']}'>Remover</a>
        </td>
    </tr>";
}
?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>