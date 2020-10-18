create database pdo;

use pdo;

create table users (id int(11) auto_increment primary key, name varchar(50) not null,  email varchar(50) not null unique key, password varchar(150) null, create_at  timestamp null default current_timestamp);

create table posts (id int(11) auto_increment primary key, title varchar(50) not null, user int(11) not null, description text not null, create_at  timestamp null default current_timestamp);

insert into users (name,email,password) values('Teste','teste@teste.com.br', '123');