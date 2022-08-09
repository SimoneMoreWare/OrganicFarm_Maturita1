drop database if exists ciociola_db;
create database if not exists ciociola_db;
use ciociola_db;
create table settori(
	cod_settori int auto_increment primary key,
	nome char (100)not null
);
create table sedi(
	cod_sedi int auto_increment primary key,
	nome char (100)not null
);
create table Articoli(
	cod_articoli int auto_increment primary key,
	nome char (100)not null,
	prezzo float not null,
	cod_settori int not null,
	foreign key (cod_settori)references settori(cod_settori)
);
create table formatore(
	cod_formatore int auto_increment primary key,
	nome char (100)not null,
	cognome char (100),
	cod_sedi int not null,
	foreign key (cod_sedi)references sedi(cod_sedi)
);
create table vendite(
	cod_vendite int auto_increment primary key,
	sconto float,
	importo float not null,
	data date not null,
	cod_formatore int not null,
	foreign key (cod_formatore)references formatore(cod_formatore)
);
create table venditaarticoli(
	cod_venditearticolo int auto_increment primary key,
	cod_articoli int not null,
	foreign key (cod_articoli)references articoli(cod_articoli),
	cod_vendite int not null,
	foreign key (cod_vendite)references vendite(cod_vendite),
	numero int not null
);
