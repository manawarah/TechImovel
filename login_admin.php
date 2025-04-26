<?php
session_start();
include_once('./includes/conexao.php'); // Conexão com o banco ./includes/conexao.php
include_once('./includes/bootstrap.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = hash('sha256', $_POST['senha']);

    $sql = "SELECT * FROM administradores WHERE usuario = ? AND senha = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $usuario, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['admin_logado'] = true;
        $_SESSION['admin'] = $usuario;
        header("Location: ./includes/painel_admin.php");
        exit;
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - TechImóvel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #0F123F;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .login-box {
      background-color: #1B1E3F;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(0, 255, 102, 0.3);
      width: 100%;
      max-width: 400px;
    }
    .btn-green {
      background-color: #00FF66;
      border: none;
      color: #000;
    }
    .btn-green:hover {
      background-color: #00cc55;
    }
    .logo {
      width: 120px;
      display: block;
      margin: 0 auto 1rem;
    }
  </style>
</head>
<body>

  <div class="login-box text-center">
    <img src="./assets/logo/logo-techimovel.jfif" alt="Logo TechImóvel" class="logo" style="border-radius: 80px;">
    <h2 class="mb-4">TechImóvel <p>Administrador</p></h2>
    <form  method="POST">
      <div class="mb-3 text-start">
        <label for="usuario" for="usuario" class="form-label">Login</label>
        <input type="text" class="form-control" id="usuario" name="usuario" required>
      </div>
      <div class="mb-4 text-start">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" required>
      </div>
      <button type="submit" class="btn btn-green w-100">Entrar</button>
    </form>
  </div>
</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>