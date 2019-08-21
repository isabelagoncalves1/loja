DROP DATABASE mvcd;
CREATE DATABASE mvcd;

USE mvcd;

CREATE TABLE IF NOT EXISTS `mvcd`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `papel` VARCHAR(100) NOT NULL DEFAULT 'usuario'
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8

INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('admin', '123', 'admin@admin', 'admin');
INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('usuario', '123', 'usuario@usuario', 'usuario');

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
    imagem varchar(60) not null,
    estoque_minimo int(11) not null,
    estoque_maximo int(11) not null,
    
    foreign key (idcategoria) references categoria (idcategoria) on delete cascade on update cascade,
    primary key(idProduto)
);

CREATE TABLE endereco(
    idendereco INT(11) not null auto_increment,
    idCliente integer not null
    logradouro varchar(60) not null,
    numero varchar(7) not null,
    complemento varchar(60) not null,
    bairro varchar(60) not null,
    cidade varchar(60) not null,
    cep varchar(60),
    foreign key (idCliente) references cadastrocliente (idCliente) on delete cascade on update cascade,
    primary key(idCliente)
);


