CREATE DATABASE if not exists crud_estoque;
USE crud_estoque;

CREATE TABLE produtos (
    id INT PRIMARY KEY auto_increment,
    nome VARCHAR(20) NOT NULL,
    categoria VARCHAR(20) NOT NULL,
    descricao VARCHAR(20) NOT NULL,
    preco INT NOT NULL,
    quantidade INT NOT NULL,
    dataValidade date
);