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

CREATE DATABASE webgbd;

USE webgbd;

CREATE TABLE usuario(
   idusuario int(11) not null auto_increment,
    nomeusuario varchar(60) not null,
    email varchar(60) not null,
    senha varchar(60) not null,
    cpf varchar(60) not null,
    datadenascimento varchar(10) not null,
    sexo varchar(60) not null,
    tipousuario varchar(5) not null,
    PRIMARY KEY (idusuario)
);

CREATE TABLE endereco(
idendereco int(11) not null auto_increment,
idusuario int(11) not null,
logradouro varchar(60) not null,
numero varchar(7) not null,
complemento varchar(60) not null,
bairro varchar(60) not null,
cidade varchar(60) not null,
cep varchar(60) not null,
primary key(idendereco),
foreign key(idusuario) references usuario (idusuario) on delete cascade on update cascade
);

CREATE TABLE produto(
    idproduto integer not null auto_increment,
    idcategoria int not null,
    preco double not null,
    nome varchar(30) not null,
    descricao varchar(60) not null,
    imagem varchar(60) not null,
    estoque_minimo int(11) not null,
    estoque_maximo int(11) not null,
    quant_estoque integer not null,
    
    foreign key (idcategoria) references categoria (idcategoria) on delete cascade on update cascade,
    primary key(idProduto)
);

CREATE TABLE categoria(
    idcategoria int not null auto_increment,
    descricao varchar(50) not null,
    primary key(idcategoria)
);


CREATE TABLE cupom(
idcupom int(11) not null auto_increment,
nomecupom varchar(60) not null,
desconto int(11) not null,
primary key(idcupom)
);

CREATE TABLE log_produto(
ID_LOG int(11) not null auto_increment,
TABELA varchar(45) not null,
USUARIO varchar(45) not null,
DATA_HORA datetime not null,
ACAO varchar(45) not null,
DADOS varchar(1000) not null,
primary key(ID_LOG)
);

CREATE TABLE estoque(
idestoque int(11) not null auto_increment,
idproduto int(11) not null,
qtde int(11) not null,
primary key(idestoque),
foreign key(idproduto) references produtos (idproduto) on delete cascade on update cascade
);

CREATE TABLE pedido(
idpedido int(11) not null auto_increment,
idusuario int(11) not null,
idendereco int(11) not null,
datacompra date not null,
primary key(idpedido),
foreign key(idusuario) references usuario (idusuario) on delete cascade on update cascade,
foreign key(idendereco) references endereco (idendereco) on delete cascade on update cascade
);

CREATE TABLE pedido_produto(
idproduto int(11) not null,
idpedido int(11) not null,
primary key (idproduto, idpedido), 
foreign key (idproduto) references produtos (idproduto) on delete cascade on update cascade,
foreign key (idpedido) references pedido (idpedido) on delete cascade on update cascade
); 

CREATE TABLE formapagamento(
    idFormaPagamento int not null auto_increment,
    descricao varchar(45) not null,
    primary key(idFormaPagamento)
);


