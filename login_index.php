<?php
session_start();
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
include_once('./includes/header.php');
include_once('./template.php');

$erro = "";

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
        $erro = "Login não encontrado!";
    }

    $stmt->close();
    $conexao->close();
}
?>

<div>
    <h2>Login</h2>
    <?php if ($erro): ?>
        <div class="alert alert-danger"><?= $erro ?></div>
    <?php endif; ?>
    <form method="post">
        <div >
            <label for="login" >Login:</label>
            <input type="text"  name="login" id="login" required>
        </div>
        <div >
            <label for="senha" >Senha:</label>
            <input type="password"  name="senha" id="senha" required>
        </div>
        <button type="submit" >Entrar</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
