CREATE DATABASE techimovel;
USE techimovel;

CREATE TABLE cadastro_usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
login VARCHAR(50) NOT NULL UNIQUE,
senha VARCHAR(255) NOT NULL,
criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
select * from cadastro_usuarios; 

CREATE TABLE administradores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
INSERT INTO administradores (usuario, senha) VALUES (
    'techimovel', 
    SHA2('admintech25', 256)
);
select*from administradores;

CREATE TABLE imoveis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    construtora VARCHAR(255),
    metragem VARCHAR(50),
    localizacao VARCHAR(100),
    preco VARCHAR(50),
    imagem VARCHAR(255),
    link_mais_info VARCHAR(10000)
);

CREATE TABLE crm_cliente (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  email VARCHAR(100),
  contato VARCHAR(20),
  interesse VARCHAR(100),
  valor DECIMAL(10,2)
);
SELECT * FROM crm_cliente;

CREATE TABLE crm_imoveis (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(100),
  descricao TEXT,
  valor DECIMAL(10,2),
  pretencao VARCHAR(50)
);
SELECT * FROM crm_imoveis;



DROP DATABASE techimovel;
SELECT * FROM cadastro_usuarios;
