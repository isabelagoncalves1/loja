DROP DATABASE IF EXISTS webloja;
CREATE DATABASE webloja;

USE webloja;

CREATE TABLE cadastrocliente(
    idCliente integer not null auto_increment,
    email varchar(40) not null,
    senha varchar(15) not null,
    senha_confirma varchar(15) not null,
    nome varchar(70) not null,
    cpf varchar(11) not null,
    sexo varchar(20) not null,
    datan varchar(8) not null,
    tipousuario varchar(5) not null,
    PRIMARY KEY (idCliente)
);

CREATE TABLE lAdm(
    idAdm integer not null auto_increment,
    email varchar(40) not null,
    senha varchar(15) not null,
    primary key(idAdm)
);

CREATE TABLE newsletter(
    idnews integer not null auto_increment, 
    nome varchar(100) not null,
    email varchar(40) not null,
   
    primary key(idnews)
);

CREATE TABLE lCliente(
    idclient integer not null auto_increment,
    email varchar(40) not null,
    senha varchar(15),
    primary key(idclient)
);

CREATE TABLE categoria(
    idcategoria int not null auto_increment,
    descricao varchar(50) not null,
    primary key(idcategoria)
);


CREATE TABLE addproduto(
    idProduto integer not null auto_increment,
    idcategoria int not null,
    preco double not null,
    nome varchar(100) not null,
    descricao varchar(200) not null,
    imagem varchar(200) not null,
    estoque_minimo int(11) not null,
    estoque_maximo int(11) not null,
    quant_estoque integer not null,
    
    foreign key (idcategoria) references categoria (idcategoria) on delete cascade on update cascade,
    primary key(idProduto)
);

CREATE TABLE endereco(
    idendereco INT(11) not null auto_increment,
    idCliente integer not null,
    logradouro varchar(60) not null,
    numero varchar(7) not null,
    complemento varchar(60) not null,
    bairro varchar(60) not null,
    cidade varchar(60) not null,
    cep varchar(60) not null,
    foreign key (idCliente) references cadastrocliente (idCliente) on delete cascade on update cascade,
    primary key(idendereco)
);


CREATE TABLE formapagamento(
    idFormaP int not null auto_increment,
    descricao varchar(50) not null,
    primary key(idFormaP)
);

CREATE TABLE IF NOT EXISTS cupom(
    idcupom INT(11) NOT NULL AUTO_INCREMENT,
    nomecupom VARCHAR(60) NOT NULL,
    desconto INT(11) NOT NULL,
    PRIMARY KEY(idcupom)
);

INSERT INTO cadastrocliente (email, senha, senha_confirma, nome, tipousuario, cpf, sexo, datan) 
    VALUES ('admin@admin.com', '123', '123', 'admin', 'admin', '12345678910', 'f', '10101989');

CREATE TABLE pedido(
idpedido int(11) not null auto_increment,
idCliente integer not null,
idendereco int(11) not null,
idFormaP int not null,
datacompra date not null,
primary key(idpedido),
foreign key(idCliente) references cadastrocliente (idCliente) on delete cascade on update cascade,
foreign key(idFormaP) references formapagamento (idFormaP) on delete cascade on update cascade,
foreign key(idendereco) references endereco (idendereco) on delete cascade on update cascade
);
