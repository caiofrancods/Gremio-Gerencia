-- Inserções sql para teste

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


