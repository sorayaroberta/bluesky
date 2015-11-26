create database bluesky;

use bluesky;

create table usuario (
nome varchar(50) not null,
email varchar(50) not null,
cpf varchar(11) primary key not null,
data_nasc date not null,
telefone varchar(10) not null,
endereco varchar(50) not null,
senha varchar(8) not null
);

create table aeronave (
id_aeronave int primary key not null auto_increment,
nome varchar(10) not null,
quant_assentos int not null,
cidade_origem varchar(20),
cidade_destino varchar(20)
);


create table voo (
id_voo int auto_increment primary key not null,
id_aeronave int not null,
foreign key (id_aeronave) references aeronave (id_aeronave),
hora_voo time,
data_saída date
);

create table passagens (
id_passagens int auto_increment primary key not null,
local_origem varchar(20) not null,
local_destino varchar(20) not null,
horario_saída time not null,
horario_chegada time not null,
situacao varchar(15),
data_saída date not null,
data_chegada date not null,
num_assentos int not null
);



