<?php
session_start();
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro_usuarios WHERE login = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($usuario = $result->fetch_assoc()) {
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario'] = $usuario['nome'];
            header("Location: painel.php");
            exit();
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Usuário não encontrado!";
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
    <h2 class="mb-4">TechImóvel <p>Acesso ao Sistema</p></h2>
    <form action="index.php" method="POST">
      <div class="mb-3 text-start">
        <label for="usuario" for="login" class="form-label">Login</label>
        <input type="text" class="form-control" id="login" name="login" required>
      </div>
      <div class="mb-4 text-start">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" required>
      </div>
      <button type="submit" class="btn btn-green w-100">Entrar</button>
    </form>
    <p>Não possui cadastro? <a href="cadastro.php">Clique aqui</a></p>
  </div>
</body>
</html>


<!--
<div>
    <h2>Login</h2>
  
    <p>Venda mais rápido. Com tecnologia, estratégia e praticidade.</p>
     Formulário login 
    <?php if (!empty($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
    <form action="./painel_usuario.php" method="POST">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" required>

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>

        <input type="submit" value="Entrar">
    </form>
    <p>Não possui cadastro? <a href="cadastro.php">Clique aqui</a></p>
</div>
-->









<!-- <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  -->