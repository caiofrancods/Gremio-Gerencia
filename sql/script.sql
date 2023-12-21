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

-- Criação da tabela Documento
CREATE TABLE Documento (
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(255),
    situacao VARCHAR(255),
    caminho VARCHAR(255),
    nome VARCHAR(255)
);

-- Criação da tabela Assinatura
CREATE TABLE Assinatura (
    codUsuario INT,
    codDocumento INT,
    horaAssinatura VARCHAR(255),
    PRIMARY KEY (codUsuario, codDocumento),
    FOREIGN KEY (codUsuario) REFERENCES Usuario(codigo),
    FOREIGN KEY (codDocumento) REFERENCES Documento(codigo)
);

-- Criação da tabela Movimentacao
CREATE TABLE Movimentacao (
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    valor DECIMAL(10, 2),
    tipo INT,
    codigoDocumento INT,
    descricao VARCHAR(255)
);

-- Criação da tabela Acervo
CREATE TABLE Acervo (
    codigo INT PRIMARY KEY,
    codDocumento INT,
    descricao VARCHAR(255),
    situacao INT,
    documentoBaixa INT,
    justificativa VARCHAR(500);
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
    titulo VARCHAR(255),
    subtitulo VARCHAR(255),
    texto VARCHAR(5000),
    dataHorario VARCHAR(255),
    edicao VARCHAR(255);
);

CREATE TABLE Imagem (
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255),
    caminho VARCHAR (500)
);

-- Inserção de dados na tabela Usuario
INSERT INTO Usuario (codigo, cargo, senha, email, nome) VALUES
(1, 'Administrador', 'senha123', 'admin@example.com', 'Admin'),
(2, 'Usuário Comum', 'senha456', 'usuario@example.com', 'Usuário');

-- Inserção de dados na tabela Documento
INSERT INTO Documento (codigo, tipo, situacao, caminho, nome) VALUES
(101, 'Contrato', 'Ativo', '/caminho/contrato.pdf', 'Contrato de Serviços'),
(102, 'Nota Fiscal', 'Concluído', '/caminho/nf123.pdf', 'Nota Fiscal 123');

-- Inserção de dados na tabela Assinatura
INSERT INTO Assinatura (codUsuario, codDocumento, horaAssinatura) VALUES
(1, 101, '20/03/2019 16:58'),
(2, 101, '20/03/2019 16:58');

-- Inserção de dados na tabela Movimentacao
INSERT INTO Movimentacao (codigo, valor, tipo, codigoDocumento, descricao) VALUES
(201, 500.00, 1, 101, 'Pagamento de Serviços'),
(202, 100.00, 2, 102, 'Venda de Rifas');

-- Inserção de dados na tabela Acervo
INSERT INTO Acervo (codigo, codDocumento, descricao) VALUES
(301, 102, 'Acervo de Documentos Fiscais'),
(302, 101, 'Acervo de Contratos');

-- Inserção de dados na tabela Evento
INSERT INTO Evento (codigo, nome, responsavel, dataHorario, descricao) VALUES
(401, 'Evento A', 'Organizador A', '2023-02-01', 'Descrição do Evento A'),
(402, 'Evento B', 'Organizador B', '2023-03-15', 'Descrição do Evento B');

-- Inserção de dados na tabela Noticia
INSERT INTO Noticia (codigo, titulo, subtitulo, texto, dataHorario) VALUES
(501, 'Notícia Importante', 'Subtítulo da Notícia', 'Conteúdo da notícia...', '2023-01-10');


