DROP DATABASE IF EXISTS projeto1;

CREATE DATABASE projeto1;
USE projeto1;

CREATE TABLE usuario
(
	id_usuario    int(4) NOT NULL PRIMARY KEY auto_increment,
	nome_usuario  varchar(50) NOT NULL,
    email_usuario varchar(50) NOT NULL,
    fone_usuario  varchar(50) NULL,
    senha 		  varchar(30) NOT NULL,
    foto          varchar(100) NULL
);