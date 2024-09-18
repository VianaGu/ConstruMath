-- Criação do banco de dados
CREATE DATABASE login
CHARACTER SET utf8mb4
COLLATE utf8mb4_bin;

-- Seleciona o banco de dados
USE login;

-- Criação da tabela com collation case-sensitive para a coluna 'usuario'
CREATE TABLE usuario (
  usuario_id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(255) NOT NULL, 
  usuario VARCHAR(255) COLLATE utf8mb4_bin NOT NULL, -- Definido COLLATE utf8mb4_bin para case-sensitive
  senha VARCHAR(32) NOT NULL,
  PRIMARY KEY (usuario_id)
);
