USE kids_world_festas;

CREATE TABLE usuario(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL

);

CREATE TABLE administrador(
    id INT NOT NULL PRIMARY KEY,
    FOREIGN KEY(id) REFERENCES usuario(id)
);

CREATE TABLE cliente(
    id INT NOT NULL PRIMARY KEY,
    cpf VARCHAR(11) NOT NULL UNIQUE,
    telefone VARCHAR(11) NOT NULL,
    FOREIGN KEY(id) REFERENCES usuario(id)
);

CREATE TABLE endereco(
    id INT PRIMARY KEY AUTO_INCREMENT,
    logradouro VARCHAR(100),
    numero VARCHAR(10),
    cep VARCHAR(9),
    complemento VARCHAR(100),
    cidade VARCHAR(50),
    UF VARCHAR(2)
);

CREATE TABLE locacao(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    id_endereco INT NOT NULL,
    dia DATE NOT NULL,
    hora_inicio TIME NOT NULL,
    FOREIGN KEY(id_cliente) REFERENCES cliente(id),
    FOREIGN KEY(id_endereco) REFERENCES endereco(id)
);

CREATE TABLE produto(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    imagem VARCHAR(200),
    descricao VARCHAR(200),
    preco DOUBLE NOT NULL
);

CREATE TABLE locacao_produto(
	     INT,
    id_produto INT,
    preco_pago FLOAT,
    quantidade INT,
    PRIMARY KEY(id_locacao, id_produto),
    FOREIGN KEY(id_locacao) REFERENCES locacao(id),
    FOREIGN KEY(id_produto) REFERENCES produto(id)
);

SELECT
produto.nome 

FROM
locacao

INNER JOIN
locacao_produto ON locacao.id = locacao_produto.id_locacao 

INNER JOIN
produto ON produto.id = locacao_produto.id_produto 

WHERE
locacao.dia = "$dia"
=====================================================================================================
SELECT nome
FROM produto 
WHERE produto.id NOT IN
    (
    SELECT id_produto FROM locacao_produto JOIN locacao ON locacao_produto.id_locacao = locacao.id WHERE locacao.dia = '2019-11-06'
    )
==========================================================================================================
                                        // Inserir produtos

INSERT INTO `produto`( `nome`, `descricao`, `preco`) VALUES ('Máquina de Algodão Doce', 'Estação de algodão doce para até 100 pessoas', 150);
INSERT INTO `produto`( `nome`, `descricao`, `preco`) VALUES ('Pipoqueira', 'Estação de pipoqueira de cinema para até 100 pessoas', 200);
INSERT INTO `produto`( `nome`, `descricao`, `preco`) VALUES ('Máquina de Crepe', 'Rodízio de crepe para até 100 pessoas', 550);
INSERT INTO `produto`( `nome`, `descricao`, `preco`) VALUES ('Máquina de Churros', 'Estação de churros gourmet para 100 pessoas', 150);
INSERT INTO `produto`( `nome`, `descricao`, `preco`) VALUES ('Trenzinho de Lanches', 'Lanchinhos: Batata frita, pão de queijo, mini hot dog, mini pizza, mini hamburguer e nuggets.', 500);
INSERT INTO `produto`( `nome`, `descricao`, `preco`) VALUES ('Pula-Pula', 'Categoria: Brinquedo Tamanho: 3,05m', 150)

INSERT INTO `usuario`(`nome`, `email`, `senha`) VALUES ('Leticia', 'leticiagatinha@gmail.com', '$2y$10$cyeMlImU8XE79FK3EeQjAOP6b.kiYl.7wTkQ/7DLd92jzD6putRoi')
INSERT INTO `cliente`(`id`, `cpf`, `telefone`) VALUES (3 ,'33352223133', '21954346541')
INSERT INTO `usuario`(`nome`, `email`, `senha`) VALUES ('Emanuel', 'ueitomep@gmail.com', '$2y$10$cyeMlImU8XE79FK3EeQjAOP6b.kiYl.7wTkQ/7DLd92jzD6putRoi')
INSERT INTO `cliente`(`id`, `cpf`, `telefone`) VALUES (2 ,'12312312312', '21012341234')
INSERT INTO `endereco`(`logradouro`, `numero`, `cep`, `complemento`, `cidade`, `UF`) VALUES ('Rua Aninha','1677','123-789','Atrás da árvore','Mauá', 'RJ')
INSERT INTO `locacao`(`id_cliente`, `id_endereco`, `dia`, `qtd_horas`, `hora_inicio`) VALUES (2, 1, '2019-11-06', 4, '12:12')
INSERT INTO `locacao_produto`(`id_locacao`, `id_produto`, `preco_pago`, `quantidade`) VALUES (1, 14, 500, 2)
INSERT INTO `locacao_produto`(`id_locacao`, `id_produto`, `preco_pago`, `quantidade`) VALUES (1, 15, 150, 1)
INSERT INTO `locacao_produto`(`id_locacao`, `id_produto`, `preco_pago`, `quantidade`) VALUES (1, 11, 200, 3)
INSERT INTO `endereco`(`logradouro`, `numero`, `cep`, `complemento`, `cidade`, `UF`) VALUES ('Av Jukinha','9999','1237890','Apartamento 2','Belford Roxo', 'RJ');
INSERT INTO `locacao`(`id_cliente`, `id_endereco`, `dia`, `qtd_horas`, `hora_inicio`) VALUES (3, 2, '2019-11-10', 4, '17:17');
INSERT INTO `locacao_produto`(`id_locacao`, `id_produto`, `preco_pago`, `quantidade`) VALUES (1, 12, 550, 2);
INSERT INTO `locacao_produto`(`id_locacao`, `id_produto`, `preco_pago`, `quantidade`) VALUES (1, 13, 150, 1);
INSERT INTO `locacao_produto`(`id_locacao`, `id_produto`, `preco_pago`, `quantidade`) VALUES (1, 10, 150, 3)