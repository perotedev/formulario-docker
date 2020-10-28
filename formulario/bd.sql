CREATE DATABASE bd_quartaloca;

CREATE TABLE tb_clientes 
(
    id INTEGER AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    idade INTEGER NOT NULL,

    PRIMARY KEY(id)
);

CREATE TABLE tb_cadastros
(
	cpf INTEGER NOT NULL,
    nome VARCHAR(50) NOT NULL,
    registro INTEGER NOT NULL,
    nascimento DATE NOT NULL,
    telefone INTEGER NOT NULL,
    celular INTEGER NOT NULL,
    email VARCHAR(30) NOT NULL,
    
    PRIMARY KEY(cpf)
);

DROP TABLE xxxxxxxxxxxxxxx     - apaga a tabela

CREATE TABLE tb_cadastros
(
	cpf VARCHAR(11) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    nascimento DATE NOT NULL,
    nacionalidade VARCHAR(30) NOT NULL,
    telefone VARCHAR(10),
    celular VARCHAR(11) NOT NULL,
    email VARCHAR(30) NOT NULL,
    
    PRIMARY KEY(cpf)
);