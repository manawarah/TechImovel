<?php 
// Criando conexão com banco de dados;
$host = 'localhost';
$usuario = 'root';
$senha = 'sqladmin';
$banco = 'techimovel';

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error){
    die("Erro na conexão: " . $conexao->connect_error);
} else
    // Se quiser saber se está conectado na página.
    //echo "Conectado" . $conexao->connect_error;
?>