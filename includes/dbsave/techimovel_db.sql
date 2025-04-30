CREATE DATABASE techimovel;
USE techimovel;

CREATE TABLE cadastro_usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
contato VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
login VARCHAR(50) NOT NULL UNIQUE,
senha VARCHAR(255) NOT NULL,
creci VARCHAR(255) NOT NULL,
regiao CHAR(2) NOT NULL,
criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE administradores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
INSERT INTO administradores (usuario, senha) VALUES (
    'techimovel', 
    SHA2('admintech25', 256)
);


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


CREATE TABLE crm_imoveis (
  id INT AUTO_INCREMENT PRIMARY KEY,
  residencial VARCHAR(100),
  quartos VARCHAR(100),
  valor DECIMAL(10,2),
  bairro VARCHAR(100),
  pretencao VARCHAR(100)
);	




DROP DATABASE techimovel;
SELECT * FROM cadastro_usuarios;
SELECT * FROM crm_imoveis;
SELECT * FROM crm_cliente;
SELECT * FROM administradores;
SELECT * FROM cadastro_usuarios; 