-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema buscacep_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema buscacep_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `buscacep_db` DEFAULT CHARACTER SET utf8 ;
USE `buscacep_db` ;

-- -----------------------------------------------------
-- Table `buscacep_db`.`CEP`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `buscacep_db`.`CEP` (
  `cep` VARCHAR(11) NOT NULL,
  `rua` VARCHAR(255) NULL DEFAULT NULL,
  `bairro` VARCHAR(255) NULL DEFAULT NULL,
  `cidade` VARCHAR(100) NULL DEFAULT NULL,
  `estado` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`cep`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
