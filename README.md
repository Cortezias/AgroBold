# AgroBold
AVALIAÇÃO PARA DESENVOLVEDOR WEB PHP

O código MySQL foi testado localmente, utilizando o seguinte código:

CREATE DATABASE cadastro_clientes;

USE cadastro_clientes;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    estado VARCHAR(2)
);

