USE kids_world_festas;

CREATE TABLE usuario(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(30) NOT NULL,
    senha VARCHAR(16) NOT NULL
);

CREATE TABLE administrador(
    id INT NOT NULL PRIMARY KEY,
    FOREIGN KEY(id) REFERENCES usuario(id)
);

CREATE TABLE cliente(
    id INT NOT NULL PRIMARY KEY,
    cpf VARCHAR(11) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    FOREIGN KEY(id) REFERENCES usuario(id)
);

CREATE TABLE endereco(
    id INT PRIMARY KEY AUTO_INCREMENT,
    logradouro VARCHAR(100),
    numero VARCHAR(10),
    cep VARCHAR(7),
    complemento VARCHAR(100),
    cidade VARCHAR(50),
    UF VARCHAR(2)
);

CREATE TABLE locacao(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    id_endereco INT NOT NULL,
    data DATE NOT NULL,
    FOREIGN KEY(id_cliente) REFERENCES cliente(id),
    FOREIGN KEY(id_endereco) REFERENCES endereco(id)
);

CREATE TABLE produto(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    descricao VARCHAR(200),
    preco DOUBLE NOT NULL
);

CREATE TABLE locacao_produto(
	id_locacao INT,
    id_produto INT,
    preco_pago DOUBLE,
    quantidade INT,
    PRIMARY KEY(id_locacao, id_produto),
    FOREIGN KEY(id_locacao) REFERENCES locacao(id),
    FOREIGN KEY(id_produto) REFERENCES produto(id)
);