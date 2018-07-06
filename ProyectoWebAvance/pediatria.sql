create database pediatria;
use pediatria;

create table users(
idUser int auto_increment primary key,
FirstName varchar(45) not null,
LastName varchar(45) not null,
username varchar(45) not null,
email varchar(255) not null,
password char(40) not null,
tipo char(6)
);


create table products(
idProduct int auto_increment primary key,
productName varchar(45) not null,
precio int(3) not null,
existencia int(3) not null
);

select*from products;
drop table products;
show tables;

insert into users value
(null,'Jesús','García Páramo','chuy','el_chuy@gmail.com',sha1('chuy'),'Admin');

