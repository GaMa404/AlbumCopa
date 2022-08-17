CREATE DATABASE db_copa;
USE db_copa;

CREATE TABLE posicao (
    id INT AUTO_INCREMENT,
    nome VARCHAR(25) NOT NULL,
    sigla CHAR(3),
    PRIMARY KEY (id)
);

CREATE TABLE pais (
    id INT AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    sigla CHAR(3),
    PRIMARY KEY (id)
);

CREATE TABLE time_pais (
    id INT AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    id_pais INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_pais) REFERENCES pais(id)
);

CREATE TABLE jogador (
    id INT AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    apelido VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL,
    altura DOUBLE NOT NULL,
    peso DOUBLE NOT NULL,
    link VARCHAR(250) NOT NULL,
    id_posicao INT,
    id_pais INT,
    id_time_pais INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_posicao) REFERENCES posicao(id),
    FOREIGN KEY (id_pais) REFERENCES pais(id),
    FOREIGN KEY (id_time_pais) REFERENCES time_pais(id) 
);