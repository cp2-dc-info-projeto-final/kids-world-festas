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


CREATE TABLE locacao(
    id INT NOT NULL PRIMARY KEY,
    data DATE
);

CREATE TABLE 