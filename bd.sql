USE bd_quartaloca;

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

CREATE TABLE tb_usuarios
(
    email VARCHAR(50) NOT NULL,
    senha VARCHAR(8) NOT NULL,

    PRIMARY KEY(email)
);


-- CREATE DATABASE bd_quartaloca;    - cria banco de dados
-- DROP TABLE xxxxxxxxxxxxxxx  - apaga a tabela
