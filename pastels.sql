DROP DATABASE IF EXISTS pastels;
CREATE DATABASE pastels CHARACTER SET utf8mb4;
USE pastels;

CREATE TABLE pastels(
  id INT auto_increment not null,
  titulo varchar(100) not null,
  ingredientes varchar(100) not null,
  preparacion varchar(100) not null,
  fecha DATE not null,
  CONSTRAINT pk_pastels PRIMARY KEY(id)
);
