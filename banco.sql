/*conectar com o mysql*/

mysql -u root

 

create database dentinac;

use dentinac;

create table paciente(

     idpaciente int primary key auto_increment,

     nome varchar(50) not null,
     cpf int,
     email varchar(50) not null,
     datanascimento date null,
     endereco varchar(50) not null,
     telefone char(9),     
     tipoatendimento varchar(20)
);

 

insert into cliente values

(null,'fabio','','fabio2@gmail.com',25,'','casado');

 

select * from cliente;