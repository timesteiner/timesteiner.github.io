create database anfitriones;

use anfitriones;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Anfitriones
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Anfitriones
-- -----------------------------------------------------
-- CREATE SCHEMA IF NOT EXISTS `Anfitriones` DEFAULT CHARACTER SET utf8 ;
-- USE `Anfitriones` ;

-- -----------------------------------------------------
-- Table `Anfitriones`.`nft_Anfitrion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS nft_Anfitrion (
  id INT NOT NULL AUTO_INCREMENT,
  grado VARCHAR(45) NOT NULL,
  nombre VARCHAR(45) NOT NULL,
  paterno VARCHAR(45) NOT NULL,
  materno VARCHAR(45) NOT NULL,
  cargo VARCHAR(255) NOT NULL,
  dependencia VARCHAR(255) NOT NULL,
  telefono VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  extension VARCHAR(45) NOT NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table nft_Anfitrion
-- -----------------------------------------------------
START TRANSACTION;
-- USE Anfitriones;
INSERT INTO nft_Anfitrion (id, grado, nombre, paterno, materno, cargo, dependencia, telefono, email, extension) VALUES (1, 'Mtro.', 'Jose Antonio', 'Pacheco', 'Medina', 'Director', 'Información y Sistemas', '1111', 'pacheco@examen.com', 'ext1');
INSERT INTO nft_Anfitrion (id, grado, nombre, paterno, materno, cargo, dependencia, telefono, email, extension) VALUES (2, 'Lic.', 'Francisco', 'Hernandez', 'Maldonado', 'Análista', 'Información y Sistemas', '1112', 'fher@examen.com', 'ext2');
INSERT INTO nft_Anfitrion (id, grado, nombre, paterno, materno, cargo, dependencia, telefono, email, extension) VALUES (3, 'Dr', 'Luis Heriberto', 'García', 'Islas', 'Operaciones', 'Información y Sistemas', '1113', 'luish@examen.com', 'ext3');

COMMIT;



