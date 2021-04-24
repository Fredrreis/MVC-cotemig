CREATE DATABASE cadastroPet;
USE cadastroPet;

CREATE TABLE `cadastroPet`.`animal` (
  `animal_id` INT NOT NULL AUTO_INCREMENT,
  `nomeDono` VARCHAR(40) NOT NULL,
  `nomeAnimal` VARCHAR(40) NOT NULL,
  `tipoAnimal` VARCHAR(100) NOT NULL,
  `peso` INT NOT NULL,
  PRIMARY KEY (`animal_id`));
