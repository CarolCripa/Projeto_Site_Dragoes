CREATE DATABASE  projeto_dragoes;

USE  projeto_dragoes;

CREATE TABLE info_usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  data_nascimento VARCHAR(15) NOT NULL,
  email VARCHAR(50) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  senha VARCHAR(30) NOT NULL
);

CREATE TABLE imagens_cards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imagem VARCHAR(100)
);

INSERT INTO imagens_cards (imagem) VALUES ('fogo01.jpg');