create database agenda;
use agenda;

create table usuario(
id int primary key auto_increment,
nomeCompleto varchar(45) not null,
telefone varchar(45) not null,
email varchar(45) not null,
senha varchar(45) not null
);

insert into usuario(nomeCompleto, telefone, email, senha)values('erick', '11948490854','erickcaique@email.com','1234');
select * from usuario;