/* 
 * Aqui esta todo sql usado
 */
/**
 * Author:  vagner
 * Created: 18/05/2017
 */
//////////mYSQL///////////////////
CREATE DATABASE myteam_db;

CREATE TABLE `login` (
`id` INT NOT NULL AUTO_INCREMENT ,
`nome` VARCHAR(50) NOT NULL ,
`senha` VARCHAR(50) NOT NULL ,
`email` VARCHAR(50) NOT NULL ,
`organizacao` VARCHAR(50) NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE filial (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nome` VARCHAR(50) NOT NULL , 
`fone` VARCHAR(15) NOT NULL , 
`id_avaliador` INT NOT NULL ,
`observacao` VARCHAR(100) NOT NULL ,
CONSTRAINT `fk_aval`
    FOREIGN KEY (id_avaliador) REFERENCES login (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  ) ENGINE = InnoDB;

CREATE TABLE criterio (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nome` VARCHAR(50) NOT NULL , 
`descricao` VARCHAR(80) NOT NULL , 
`id_avaliador` INT NOT NULL ,
CONSTRAINT `fk_crite`
    FOREIGN KEY (id_avaliador) REFERENCES login (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  ) ENGINE = InnoDB;

CREATE TABLE funcionario (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nome` VARCHAR(50) NOT NULL , 
`sobrenome` VARCHAR(50) NOT NULL , 
`sexo` VARCHAR(10) NOT NULL , 
`email` VARCHAR(40) NOT NULL , 
`funcao` VARCHAR(40) NOT NULL , 
`fone` VARCHAR(40) NOT NULL , 
`id_avaliador` INT NOT NULL ,
`id_filial` INT NOT NULL ,
CONSTRAINT `fk_funcio`
    FOREIGN KEY (id_avaliador) REFERENCES login (id),
    FOREIGN KEY (id_filial) REFERENCES filial (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  ) ENGINE = InnoDB;

CREATE TABLE avaliacao (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nota` INT NOT NULL , 
`id_funcionario` INT NOT NULL , 
`id_avaliador` INT NOT NULL , 
`id_criterio` INT NOT NULL , 
`obs`   VARCHAR(80) ,
`data`   DATE NOT NULL,
CONSTRAINT `fks_avalicao`
    FOREIGN KEY (id_funcionario) REFERENCES funcionario (id),
    FOREIGN KEY (id_avaliador) REFERENCES login (id),
    FOREIGN KEY (id_criterio) REFERENCES criterio (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  ) ENGINE = InnoDB;

//////////////////// POSTGRESS////////////////////////
CREATE TABLE login (
id SERIAL,
nome VARCHAR(50) NOT NULL ,
senha VARCHAR(100) NOT NULL ,
email VARCHAR(50) NOT NULL ,
organizacao VARCHAR(50) NOT NULL ,
PRIMARY KEY (id));


CREATE TABLE filial (
id serial PRIMARY KEY ,
nome VARCHAR(50) NOT NULL , 
fone VARCHAR(15) NOT NULL , 
id_avaliador INT NOT NULL ,
observacao VARCHAR(100) NOT NULL ,
CONSTRAINT fk_aval
    FOREIGN KEY (id_avaliador) REFERENCES login (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  );

CREATE TABLE criterio (
id  serial PRIMARY KEY ,
nome VARCHAR(50) NOT NULL , 
descricao VARCHAR(80) NOT NULL , 
id_avaliador INT NOT NULL ,
CONSTRAINT fk_crite
    FOREIGN KEY (id_avaliador) REFERENCES login (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  );

CREATE TABLE funcionario (
id serial PRIMARY KEY ,
nome VARCHAR(50) NOT NULL , 
sobrenome VARCHAR(50) NOT NULL , 
sexo VARCHAR(10) NOT NULL , 
email VARCHAR(40) NOT NULL , 
funcao VARCHAR(40) NOT NULL , 
fone VARCHAR(40) NOT NULL , 
id_avaliador INT NOT NULL ,
id_filial INT NOT NULL ,
CONSTRAINT fk_funcio
    FOREIGN KEY (id_avaliador) REFERENCES login (id),
    FOREIGN KEY (id_filial) REFERENCES filial (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  );