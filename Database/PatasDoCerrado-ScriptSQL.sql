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
	`idcidade` INT NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`idcidade`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA TIPO DE USUÁRIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`tipoUsuario` (
	`idtipoUsuario` INT NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`idtipoUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA USUÁRIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`usuario` (
    `idusuario` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `telefone` VARCHAR(11) NOT NULL,
    `cpf` VARCHAR(11) NOT NULL,
    `senha` VARCHAR(100) NOT NULL,
    `foto` BLOB NULL,
    `descricao` VARCHAR(200) NULL,
    `cidade_idcidade` INT NOT NULL,
    `tipoUsuario_idtipoUsuario` INT NOT NULL,
    PRIMARY KEY (`idusuario`),
    CONSTRAINT `fk_usuario_cidade`
        FOREIGN KEY (`cidade_idcidade`)
        REFERENCES `PatasDoCerrado`.`cidade` (`idcidade`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_usuario_TipoUsuario1`
        FOREIGN KEY (`tipoUsuario_idtipoUsuario`)
        REFERENCES `PatasDoCerrado`.`tipoUsuario` (`idtipoUsuario`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA PORTE DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`porte` (
    `idporte` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`idporte`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA IDADE DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`idade` (
    `ididade` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`ididade`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA ESPÉCIE DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`especie` (
    `idespecie` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`idespecie`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA GÊNERO DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`genero` (
    `idgenero` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`idgenero`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA STATUS DE ADOÇÃO DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`statusAdocao` (
    `idstatusAdocao` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`idstatusAdocao`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- TABELA DE TIPO DE SOCIABILIDADE
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`tipoSociabilidade` (
    `idtipoSociabilidade` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`idtipoSociabilidade`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- TABELA TIPO DE CONVÍVIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`tipoConvivio` (
    `idtipoConvivio` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NULL,
    PRIMARY KEY (`idtipoConvivio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table TABELA TIPO DE TEMPERAMENTO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`tipoTemperamento` (
    `idtipoTemperamento` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NULL,
    PRIMARY KEY (`idtipoTemperamento`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- TABELA DE TIPO DE CUIDADO VETERINÁRIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`tipoCuidadoVeterinario` (
    `idtipoCuidadoVeterinario` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(60) NULL,
    PRIMARY KEY (`idtipoCuidadoVeterinario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`animal` (
    `idanimal` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `foto` BLOB NULL,
    `descricao` VARCHAR(200) NULL,
    `usuario_idusuario` INT NOT NULL,
    `cidade_idcidade` INT NOT NULL,
    `porte_idporte` INT NOT NULL,
    `idade_ididade` INT NOT NULL,
    `especie_idespecie` INT NOT NULL,
    `genero_idgenero` INT NOT NULL,
    `animalcol` VARCHAR(45) NULL,
    `statusAdocao_idstatusAdocao` INT NOT NULL,
    PRIMARY KEY (`idanimal`),
    CONSTRAINT `fk_animal_usuario1`
        FOREIGN KEY (`usuario_idusuario`)
        REFERENCES `PatasDoCerrado`.`usuario` (`idusuario`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
	CONSTRAINT `fk_animal_cidade`
        FOREIGN KEY (`cidade_idcidade`)
        REFERENCES `PatasDoCerrado`.`cidade` (`idcidade`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_porte1`
        FOREIGN KEY (`porte_idporte`)
        REFERENCES `PatasDoCerrado`.`porte` (`idporte`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_idade1`
        FOREIGN KEY (`idade_ididade`)
        REFERENCES `PatasDoCerrado`.`idade` (`ididade`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_especie1`
        FOREIGN KEY (`especie_idespecie`)
        REFERENCES `PatasDoCerrado`.`especie` (`idespecie`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_genero1`
        FOREIGN KEY (`genero_idgenero`)
        REFERENCES `PatasDoCerrado`.`genero` (`idgenero`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_statusAdoção1`
        FOREIGN KEY (`statusAdocao_idstatusAdocao`)
        REFERENCES `PatasDoCerrado`.`statusAdocao` (`idstatusAdocao`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA SOCIABILIDADE DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`sociabilidade` (
    `tipoSociabilidade_idtipoSociabilidade` INT NOT NULL,
    `animal_idanimal` INT NOT NULL,
    PRIMARY KEY (`tipoSociabilidade_idtipoSociabilidade`, `animal_idanimal`),
    CONSTRAINT `fk_tipoSociabilidade_has_animal_tipoSociabilidade1`
        FOREIGN KEY (`tipoSociabilidade_idtipoSociabilidade`)
        REFERENCES `PatasDoCerrado`.`tipoSociabilidade` (`idtipoSociabilidade`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_tipoSociabilidade_has_animal_animal1`
        FOREIGN KEY (`animal_idanimal`)
        REFERENCES `PatasDoCerrado`.`animal` (`idanimal`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA CONVÍVIO DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`convivio` (
    `tipoConvivio_idtipoConvivio` INT NOT NULL,
    `animal_idanimal` INT NOT NULL,
    PRIMARY KEY (`tipoConvivio_idtipoConvivio`, `animal_idanimal`),
    CONSTRAINT `fk_tipoConvivio_has_animal_tipoConvivio1`
        FOREIGN KEY (`tipoConvivio_idtipoConvivio`)
        REFERENCES `PatasDoCerrado`.`tipoConvivio` (`idtipoConvivio`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_tipoConvivio_has_animal_animal1`
        FOREIGN KEY (`animal_idanimal`)
        REFERENCES `PatasDoCerrado`.`animal` (`idanimal`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA TEMPERAMENTO DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`temperamento` (
    `tipoTemperamento_idtipoTemperamento` INT NOT NULL,
    `animal_idanimal` INT NOT NULL,
    PRIMARY KEY (`tipoTemperamento_idtipoTemperamento`, `animal_idanimal`),
    CONSTRAINT `fk_tipoTemperamento_has_animal_tipoTemperamento1`
        FOREIGN KEY (`tipoTemperamento_idtipoTemperamento`)
        REFERENCES `PatasDoCerrado`.`tipoTemperamento` (`idtipoTemperamento`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_tipoTemperamento_has_animal_animal1`
        FOREIGN KEY (`animal_idanimal`)
        REFERENCES `PatasDoCerrado`.`animal` (`idanimal`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA CUIDADO VETERINÁRIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`cuidadoVeterinario` (
    `animal_idanimal` INT NOT NULL,
    `tipoCuidadoVeterinario_idtipoCuidadoVeterinario` INT NOT NULL,
    PRIMARY KEY (`animal_idanimal`, `tipoCuidadoVeterinario_idtipoCuidadoVeterinario`),
    CONSTRAINT `fk_animal_has_tipoCuidadoVeterinario_animal1`
        FOREIGN KEY (`animal_idanimal`)
        REFERENCES `PatasDoCerrado`.`animal` (`idanimal`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_animal_has_tipoCuidadoVeterinario_tipoCuidadoVeterinario1`
        FOREIGN KEY (`tipoCuidadoVeterinario_idtipoCuidadoVeterinario`)
        REFERENCES `PatasDoCerrado`.`tipoCuidadoVeterinario` (`idtipoCuidadoVeterinario`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TABELA FOTO DO ANIMAL
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PatasDoCerrado`.`fotoAdocao` (
    `idfotoAdocao` INT NOT NULL AUTO_INCREMENT,
    `foto` BLOB NOT NULL,
    `animal_idanimal` INT NOT NULL,
    PRIMARY KEY (`idfotoAdocao`),
    CONSTRAINT `fk_fotoAdoção_animal1`
        FOREIGN KEY (`animal_idanimal`)
        REFERENCES `PatasDoCerrado`.`animal` (`idanimal`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;