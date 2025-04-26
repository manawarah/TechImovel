<?php
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
include_once('./includes/header.php');
?>

<!-- crm_cliente.php -->
<h1 class="mb-4">Lista de Clientes</h1>
<a href="crm_add_cliente.php">Adicionar Cliente</a>
<table class="table table-hover table-bordered align-middle bg-white">
  <thead class="table-dark">
    <tr>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Contato</th>
      <th>Interesse</th>
      <th>Valor</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>

    <!-- Repetir com PHP e MySQL -->
    <?php
  $result = $conexao->query("SELECT * FROM crm_cliente");
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['nome']}</td>
        <td>{$row['email']}</td>
        <td>{$row['contato']}</td>
        <td>{$row['interesse']}</td>
        <td>R$ {$row['valor']}</td>
        <td>
          <a href='crm_edit_cliente.php?id={$row['id']}'><span class='btn btn-sm btn-primary'><i class='bi bi-pencil'></i></span></a> |
          <a href='crm_delete_cliente.php?id={$row['id']}'><span class='btn btn-sm btn-danger'><i class='bi bi-pencil'></i></span></a>
        </td>
    </tr>";
  }
  ?>
  </tbody>
</table>


<h1 class="mb-4">Lista de Imóveis</h1>
<table class="table table-hover table-bordered align-middle bg-white">
  <thead class="table-dark">
    <tr>
      <th>Título</th>
      <th>Quartos</th>
      <th>Valor</th>
      <th>Bairro</th>
      <th>Valor</th>
      <th>Status</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Apartamento 3 Quartos</td>
      <td>Apartamento</td>
      <td>Centro</td>
      <td>R$ 350.000</td>
      <td><span class="badge bg-success">Disponível</span></td>
      <td>
        <button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></button>
        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
      </td>
    </tr>
    
    <!-- Repetir com PHP e MySQL -->
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
  </tbody>
</table>







////


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

