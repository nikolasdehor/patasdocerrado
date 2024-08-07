SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- CRIAÇÃO DO BANCO DE DADOS
DROP SCHEMA IF EXISTS `PatasDoCerrado` ;
CREATE SCHEMA IF NOT EXISTS `PatasDoCerrado` DEFAULT CHARACTER SET utf8 ;
USE `PatasDoCerrado` ;

-- -----------------------------------------------------
-- TABELA CIDADE
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`cidade` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA TIPO DE USUÁRIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`tipoUsuario` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA USUÁRIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`usuario` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `telefone` VARCHAR(20) NOT NULL,
    `cpf` VARCHAR(11) NOT NULL,
    `senha` VARCHAR(100) NOT NULL,
    `foto` BLOB NULL,
    `descricao` VARCHAR(200) NULL,
    `cidade_ID` INT NOT NULL,
    `tipoUsuario_ID` INT NOT NULL,
    PRIMARY KEY (`ID`),
    CONSTRAINT `fk_usuario_cidade`
        FOREIGN KEY (`cidade_ID`)
        REFERENCES `PatasDoCerrado`.`cidade` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_usuario_TipoUsuario1`
        FOREIGN KEY (`tipoUsuario_ID`)
        REFERENCES `PatasDoCerrado`.`tipoUsuario` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA PORTE DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`porte` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA IDADE DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`idade` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA ESPÉCIE DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`especie` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA GÊNERO DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`genero` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA STATUS DE ADOÇÃO DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`statusAdocao` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`ID`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- TABELA DE TIPO DE SOCIABILIDADE
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`tipoSociabilidade` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`ID`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- TABELA TIPO DE CONVÍVIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`tipoConvivio` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NULL,
    PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table TABELA TIPO DE TEMPERAMENTO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`tipoTemperamento` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NULL,
    PRIMARY KEY (`ID`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- TABELA DE TIPO DE CUIDADO VETERINÁRIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`tipoCuidadoVeterinario` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NULL,
    PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`animal` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `foto` BLOB NULL,
    `descricao` VARCHAR(200) NULL,
    `usuario_ID` INT NOT NULL,
    `cidade_ID` INT NOT NULL,
    `porte_ID` INT NOT NULL,
    `idade_ID` INT NOT NULL,
    `especie_ID` INT NOT NULL,
    `genero_ID` INT NOT NULL,
    `animalcol` VARCHAR(45) NULL,
    `statusAdocao_ID` INT NOT NULL,
    PRIMARY KEY (`ID`),
    CONSTRAINT `fk_animal_usuario1`
        FOREIGN KEY (`usuario_ID`)
        REFERENCES `PatasDoCerrado`.`usuario` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
	CONSTRAINT `fk_animal_cidade`
        FOREIGN KEY (`cidade_ID`)
        REFERENCES `PatasDoCerrado`.`cidade` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_porte1`
        FOREIGN KEY (`porte_ID`)
        REFERENCES `PatasDoCerrado`.`porte` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_idade1`
        FOREIGN KEY (`idade_ID`)
        REFERENCES `PatasDoCerrado`.`idade` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_especie1`
        FOREIGN KEY (`especie_ID`)
        REFERENCES `PatasDoCerrado`.`especie` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_genero1`
        FOREIGN KEY (`genero_ID`)
        REFERENCES `PatasDoCerrado`.`genero` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_statusAdoção1`
        FOREIGN KEY (`statusAdocao_ID`)
        REFERENCES `PatasDoCerrado`.`statusAdocao` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA SOCIABILIDADE DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`sociabilidade` (
    `tipoSociabilidade_ID` INT NOT NULL,
    `animal_ID` INT NOT NULL,
    PRIMARY KEY (`tipoSociabilidade_ID`, `animal_ID`),
    CONSTRAINT `fk_tipoSociabilidade_has_animal_tipoSociabilidade1`
        FOREIGN KEY (`tipoSociabilidade_ID`)
        REFERENCES `PatasDoCerrado`.`tipoSociabilidade` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_tipoSociabilidade_has_animal_animal1`
        FOREIGN KEY (`animal_ID`)
        REFERENCES `PatasDoCerrado`.`animal` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA CONVÍVIO DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`convivio` (
    `tipoConvivio_ID` INT NOT NULL,
    `animal_ID` INT NOT NULL,
    PRIMARY KEY (`tipoConvivio_ID`, `animal_ID`),
    CONSTRAINT `fk_tipoConvivio_has_animal_tipoConvivio1`
        FOREIGN KEY (`tipoConvivio_ID`)
        REFERENCES `PatasDoCerrado`.`tipoConvivio` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_tipoConvivio_has_animal_animal1`
        FOREIGN KEY (`animal_ID`)
        REFERENCES `PatasDoCerrado`.`animal` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA TEMPERAMENTO DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`temperamento` (
    `tipoTemperamento_ID` INT NOT NULL,
    `animal_ID` INT NOT NULL,
    PRIMARY KEY (`tipoTemperamento_ID`, `animal_ID`),
    CONSTRAINT `fk_tipoTemperamento_has_animal_tipoTemperamento1`
        FOREIGN KEY (`tipoTemperamento_ID`)
        REFERENCES `PatasDoCerrado`.`tipoTemperamento` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_tipoTemperamento_has_animal_animal1`
        FOREIGN KEY (`animal_ID`)
        REFERENCES `PatasDoCerrado`.`animal` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA CUIDADO VETERINÁRIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`cuidadoVeterinario` (
    `animal_ID` INT NOT NULL,
    `tipoCuidadoVeterinario_ID` INT NOT NULL,
    PRIMARY KEY (`animal_ID`, `tipoCuidadoVeterinario_ID`),
    CONSTRAINT `fk_animal_has_tipoCuidadoVeterinario_animal1`
        FOREIGN KEY (`animal_ID`)
        REFERENCES `PatasDoCerrado`.`animal` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_has_tipoCuidadoVeterinario_tipoCuidadoVeterinario1`
        FOREIGN KEY (`tipoCuidadoVeterinario_ID`)
        REFERENCES `PatasDoCerrado`.`tipoCuidadoVeterinario` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA FOTO DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`fotoAdocao` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `foto` BLOB NOT NULL,
    `animal_ID` INT NOT NULL,
    PRIMARY KEY (`ID`),
    CONSTRAINT `fk_fotoAdoção_animal1`
        FOREIGN KEY (`animal_ID`)
        REFERENCES `PatasDoCerrado`.`animal` (`ID`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;