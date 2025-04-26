<?php
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');

?>

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
        
        <h2 class="mb-4">TechImóvel <p>Cadastro</p>
        </h2>
        <form action="cadastro_usuarios.php" method="post">
            <div class="mb-3 text-start">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" required>
            </div>
            <div class="mb-4 text-start">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-4 text-start">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" name="login" id="login" required>
            </div>
            <div class="mb-4 text-start">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" required>
            </div>
            <button type="submit" class="btn btn-green w-100">Entrar</button>
        </form>
        <p>Já possui cadastro? <a href="login.php">Clique aqui</a></p>
    </div>
</body>

</html>


<!--
<div>
    <h2>Cadastro</h2>
    <p>Preencha o formulário de cadastro.</p>
    <form action="cadastro_usuarios.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>

        <label for="login">Login</label>
        <input type="text" name="login" id="login" required>

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>

        <input type="submit" value="Cadastrar">
    </form>
</div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>