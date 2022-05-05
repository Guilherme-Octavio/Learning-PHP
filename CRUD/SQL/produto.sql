use test;

CREATE TABLE produto
(
    idProduto int PRIMARY KEY AUTO_INCREMENT,
    nomeProduto varchar(11) not null,
    precoProduto decimal not null,
    fk_idCategoria int not null,

    Foreign key (fk_idCategoria) REFERENCES categoria(idCategoria)
);

