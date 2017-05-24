/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  vagner
 * Created: 18/05/2017
 */

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
`id_avalaidor` INT NOT NULL ,
`observacao` VARCHAR(100) NOT NULL ,
CONSTRAINT `fk_aval`
    FOREIGN KEY (id_avalaidor) REFERENCES login (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  ) ENGINE = InnoDB


