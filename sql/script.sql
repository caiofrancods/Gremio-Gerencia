-- Criação do banco de dados
CREATE DATABASE GremioGerencia;

-- Seleciona o banco de dados
USE GremioGerencia;

-- Criação da tabela Usuario
CREATE TABLE Usuario (
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    cargo VARCHAR(255),
    senha VARCHAR(255),
    email VARCHAR(255),
    nome VARCHAR(255)
);

-- Criação da tabela Movimentacao
CREATE TABLE Movimentacao (
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    valor DECIMAL(10, 2),
    tipo INT,
    documento VARCHAR(500),
    descricao VARCHAR(255)
);

-- Criação da tabela Acervo
CREATE TABLE Acervo (
    codigo INT PRIMARY KEY,
    documento VARCHAR(500),
    descricao VARCHAR(255),
    situacao INT,
    documentoBaixa VARCHAR(500),
    justificativa VARCHAR(500)
);

-- Criação da tabela Evento
CREATE TABLE Evento (
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255),
    responsavel VARCHAR(255),
    dataHorario DATE,
    descricao VARCHAR(255)
);

-- Criação da tabela Noticia
CREATE TABLE Noticia (
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(60),
    subtitulo VARCHAR(40),
    texto VARCHAR(5000),
    dataHorario VARCHAR(50),
    edicao VARCHAR(50)
);

CREATE TABLE Imagem (
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255),
    caminho VARCHAR (500)
);