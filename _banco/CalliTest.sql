create database CalliTest;

use CalliTest;

create table administrador (
	ID int primary key,
    nome varchar(50),
    senha  varchar(50),
    sexo ENUM('F', 'M')
);

create table animal (
	ID int primary key,
    codigo varchar(40),
    gaiola varchar(40),
    marcacao varchar(100),
    nome varchar(40),
	nascimento date,
    sexo ENUM('F', 'M')
);

create table adm_ani (
	ID int primary key,
    ID_animal int,
    ID_adm int,
    foreign key (ID_animal)
    References animal(ID),
    foreign key (ID_adm)
    References administrador(ID)
);

create table membro(
	CPF varchar(14) primary key,
    nome varchar (50),
    RG varchar(20),
    matricula varchar(40),
    curso varchar (40),
    sexo ENUM('F', 'M')
);

create table adm_membro (
	ID int primary key,
    ID_membro varchar(14),
    ID_adm int,
    foreign key (ID_membro)
    references membro(CPF),
    foreign key (ID_adm)
    references administrador(ID)
);

create table mem_ani (
	ID int primary key,
    ID_membro varchar(14),
    ID_ani int,
    foreign key (ID_membro)
    references membro(CPF),
    foreign key (ID_ani)
    references animal(ID)
);

create table pesquisa (
	ID int primary key,
    nome varchar(40),
    ID_adm int,
    foreign key (ID_adm)
    references administrador(ID)
);

create table teste (
	ID int primary key,
    nome varchar(40),
    ID_pes int,
    foreign key (ID_pes)
    references pesquisa(ID)
);

create table bateria (
	ID int primary key,
    tipo ENUM('forma', 'cor', 'forma e cor'),
    numTetativas int,
    tempoTentativas int,
    tempoErro int,
    tempoRecompensa int,
    tempoApresentacao int,
    ID_tes int,
    foreign key (ID_tes)
    references teste(ID)
);

create table treinamento (
	ID int primary key,
    tipo ENUM('forma', 'cor', 'forma e cor'),
    numTetativas int,
    tempoTentativas int,
    tempoErro int,
    tempoRecompensa int,
    ID_tes int,
    foreign key (ID_tes)
    references teste(ID)
);

create table tentativa_bateria (
	ID int primary key,
    tipo ENUM('Treinamento', 'Bateria'),
    forma varchar(15),
    cor varchar(15),
    ID_bat int,
    foreign key (ID_bat)
    references bateria(ID)
);

create table resultado_bateria (
	ID int primary key,
	tempoErro int,
    tempoAcerto int,
    numToquesNaTela int,
    ID_bat int,
    foreign key (ID_bat)
    references bateria(ID)
);

create table resultado_tentativa_bateria (
	ID int primary key,
	tempoErro int,
    tempoAcerto int,
    numToquesNaTela int,
    ID_ten int,
    foreign key (ID_ten)
    references tentativa_bateria(ID)
);

create table tentativa_treinamento (
	ID int primary key,
    tipo ENUM('Treinamento', 'Bateria'),
    forma varchar(15),
    cor varchar(15),
    ID_tre int,
    foreign key (ID_tre)
    references treinamento(ID)
);

create table resultado_treinamento (
	ID int primary key,
	tempoErro int,
    tempoAcerto int,
    numToquesNaTela int,
    ID_tre int,
    foreign key (ID_tre)
    references treinamento(ID)
);

create table resultado_tentativa_treinamento (
	ID int primary key,
	tempoErro int,
    tempoAcerto int,
    numToquesNaTela int,
    ID_ten int,
    foreign key (ID_ten)
    references tentativa_treinamento(ID)
);