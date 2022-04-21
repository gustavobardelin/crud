
create database crud;

use crud;


create table tb_cliente(

    codCliente int not null auto_increment,
    nome varchar(100) not null,
    cpf varchar(14) not null,
    email varchar(100),
    data_nasc date,
    celular char(16),
    rua varchar(100),
    numero varchar(10),
    bairro varchar(70),
    cep char(14),
    cidade varchar(70),
    estado char(2),
    primary key (codCliente)
);


select * from tb_cliente;

DELETE FROM tb_cliente WHERE codCliente != 0;

    