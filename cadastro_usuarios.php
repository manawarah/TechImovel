<?php 
include_once('./includes/conexao.php');
include_once('./includes/bootstrap.php');
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $login = trim($_POST['login']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO cadastro_usuarios (nome, email, login, senha)
            VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssss", $nome, $email, $login, $senha);

    if ($stmt->execute()) {
        echo "<p>Cadastro realizado com sucesso!</p>";
        echo "<a href='index.php'>Ir para login</a>";
    } else {
        echo "<p>Erro: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conexao->close();
}
?>