USE kids_world_festas;

DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL

);

DROP TABLE IF EXISTS administrador;
CREATE TABLE administrador(
    id INT NOT NULL PRIMARY KEY,
    FOREIGN KEY(id) REFERENCES usuario(id)
);

DROP TABLE IF EXISTS cliente;
CREATE TABLE cliente(
    id INT NOT NULL PRIMARY KEY,
    cpf VARCHAR(11),
    telefone VARCHAR(11) NOT NULL,
    FOREIGN KEY(id) REFERENCES usuario(id)
);

DROP TABLE IF EXISTS endereco;
CREATE TABLE endereco(
    id INT PRIMARY KEY AUTO_INCREMENT,
    logradouro VARCHAR(100),
    numero VARCHAR(10),
    cep VARCHAR(9),
    complemento VARCHAR(100),
    cidade VARCHAR(50)
);

DROP TABLE IF EXISTS locacao;
CREATE TABLE locacao(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    id_endereco INT NOT NULL,
    dia DATE NOT NULL,
    horario TIME NOT NULL,
    FOREIGN KEY(id_cliente) REFERENCES cliente(id),
    FOREIGN KEY(id_endereco) REFERENCES endereco(id)
);

DROP TABLE IF EXISTS produto;
CREATE TABLE produto(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    imagem VARCHAR(1024),
    descricao VARCHAR(200),
    preco DOUBLE NOT NULL,
    visibilidade BOOLEAN NOT NULL
);

DROP TABLE IF EXISTS locacao_produto;
CREATE TABLE locacao_produto(
	id_locacao INT,
    id_produto INT,
    preco_pago FLOAT,
    PRIMARY KEY(id_locacao, id_produto),
    FOREIGN KEY(id_locacao) REFERENCES locacao(id),
    FOREIGN KEY(id_produto) REFERENCES produto(id)
);

--                                        // Inserir produtos

INSERT INTO `produto`( `nome`, `descricao`, `preco`, `imagem`, `visibilidade`) VALUES 
                    ('Máquina de Algodão Doce', 'Estação de algodão doce para até 100 pessoas', 150, 'img/produto/1/maq_algdoceThumbnail.png', 1),
                    ('Pipoqueira', 'Estação de pipoqueira de cinema para até 100 pessoas', 200, 'img/produto/2/pipoqueiraThumbnail.png', 1),
                    ('Máquina de Crepe', 'Rodízio de crepe para até 100 pessoas', 550, 'img/produto/3/crepeThumbnail.png', 1),
                    ('Máquina de Churros', 'Estação de churros gourmet para 100 pessoas', 150, 'img/produto/4/churrosThumbnail.png', 1),
                    ('Trenzinho de Lanches', 'Lanchinhos: Batata frita, pão de queijo, mini hot dog, mini pizza, mini hamburguer e nuggets.', 500, 'img/produto/5/tremThumbnail.png', 1),
                    ('Pula-Pula', 'Categoria: Brinquedo Tamanho: 3,05m', 150, 'img/produto/6/pulaThumbnail.png', 1);

--                                        // Inserir Usuario
INSERT INTO `usuario`(`nome`, `email`, `senha`) VALUES 
                    ('Leticia', 'leticiagatinha@gmail.com', '$2y$10$cyeMlImU8XE79FK3EeQjAOP6b.kiYl.7wTkQ/7DLd92jzD6putRoi'),
                    ('Emanuel', 'ueitomep@gmail.com', '$2y$10$cyeMlImU8XE79FK3EeQjAOP6b.kiYl.7wTkQ/7DLd92jzD6putRoi');

INSERT INTO `cliente`(`id`, `cpf`, `telefone`) VALUES 
                    (1 ,'33352223133', '21954346541'),
                    (2 ,'12312312312', '21012341234');

--                                        // Finalizar Compra
INSERT INTO `endereco`(`logradouro`, `numero`, `cep`, `complemento`, `cidade`) VALUES 
('Rua Aninha','1677','123-789','Atrás da árvore','Mauá'),
('Av Jukinha','9999','1237890','Apartamento 2','Belford Roxo');

INSERT INTO `locacao`(`id_cliente`, `id_endereco`, `dia`, `horario`) VALUES 
(1, 1, '2019-11-15', '12:12'),
(2, 2, '2019-11-16', '17:17');

INSERT INTO `locacao_produto`(`id_locacao`, `id_produto`, `preco_pago`) VALUES
(1, 1, 500),
(1, 3, 150),
(1, 4, 200),
(2, 2, 550),
(2, 5, 150);