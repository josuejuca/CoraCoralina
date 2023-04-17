-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema coracoralina
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema coracoralina
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `coracoralina` DEFAULT CHARACTER SET latin1 ;
USE `coracoralina` ;

-- -----------------------------------------------------
-- Table `coracoralina`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`perfil` (
  `idPerfil` INT(10) NOT NULL AUTO_INCREMENT,
  `desricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idPerfil`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `coracoralina`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`funcionario` (
  `idfuncionario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `dt_nasc` DATE NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `rg` VARCHAR(14) NOT NULL,
  `endereco` VARCHAR(60) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `perfil_idPerfil` INT(10) NOT NULL,
  PRIMARY KEY (`idfuncionario`),
  INDEX `fk_funcionario_perfil1_idx` (`perfil_idPerfil` ASC),
  CONSTRAINT `fk_funcionario_perfil1`
    FOREIGN KEY (`perfil_idPerfil`)
    REFERENCES `coracoralina`.`perfil` (`idPerfil`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coracoralina`.`acervo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`acervo` (
  `idacervo` INT(11) NOT NULL AUTO_INCREMENT,
  `autor` VARCHAR(45) NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `data` DATETIME NOT NULL,
  `livro` VARCHAR(100) NOT NULL,
  `sinopse` VARCHAR(500) NULL DEFAULT NULL,
  `funcionario_idfuncionario` INT(11) NOT NULL,
  PRIMARY KEY (`idacervo`),
  INDEX `fk_acervo_funcionario1_idx` (`funcionario_idfuncionario` ASC),
  CONSTRAINT `fk_acervo_funcionario1`
    FOREIGN KEY (`funcionario_idfuncionario`)
    REFERENCES `coracoralina`.`funcionario` (`idfuncionario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coracoralina`.`doacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`doacao` (
  `iddoacao` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATETIME NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  `acervo_idacervo` INT(11) NOT NULL,
  PRIMARY KEY (`iddoacao`),
  INDEX `fk_doacao_acervo1_idx` (`acervo_idacervo` ASC),
  CONSTRAINT `fk_doacao_acervo1`
    FOREIGN KEY (`acervo_idacervo`)
    REFERENCES `coracoralina`.`acervo` (`idacervo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coracoralina`.`acervo_has_doacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`acervo_has_doacao` (
  `acervo_idacervo` INT(11) NOT NULL,
  `doacao_iddoacao` INT(11) NOT NULL,
  PRIMARY KEY (`acervo_idacervo`, `doacao_iddoacao`),
  INDEX `fk_acervo_has_doacao_doacao1_idx` (`doacao_iddoacao` ASC),
  INDEX `fk_acervo_has_doacao_acervo1_idx` (`acervo_idacervo` ASC),
  CONSTRAINT `fk_acervo_has_doacao_acervo1`
    FOREIGN KEY (`acervo_idacervo`)
    REFERENCES `coracoralina`.`acervo` (`idacervo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_acervo_has_doacao_doacao1`
    FOREIGN KEY (`doacao_iddoacao`)
    REFERENCES `coracoralina`.`doacao` (`iddoacao`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coracoralina`.`leitor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`leitor` (
  `idleitor` INT(10) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `dt_nasc` DATE NOT NULL,
  `cpf` VARCHAR(20) NOT NULL,
  `rg` VARCHAR(20) NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(30) NOT NULL,
  `perfil_idPerfil` INT(10) NOT NULL,
  PRIMARY KEY (`idleitor`),
  INDEX `fk_leitor_perfil1_idx` (`perfil_idPerfil` ASC),
  CONSTRAINT `fk_leitor_perfil1`
    FOREIGN KEY (`perfil_idPerfil`)
    REFERENCES `coracoralina`.`perfil` (`idPerfil`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `coracoralina`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`status` (
  `idstatus` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) CHARACTER SET 'latin1' COLLATE 'latin1_bin' NOT NULL,
  `statuscol` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idstatus`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coracoralina`.`emprestimo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`emprestimo` (
  `idemprestimo` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATETIME NOT NULL,
  `acervo_idacervo` INT(11) NOT NULL,
  `leitor_idleitor` INT(10) NOT NULL,
  `funcionario_idfuncionario` INT(11) NOT NULL,
  `status_idstatus` INT(11) NOT NULL,
  PRIMARY KEY (`idemprestimo`),
  INDEX `fk_emprestimo_acervo1_idx` (`acervo_idacervo` ASC),
  INDEX `fk_emprestimo_leitor1_idx` (`leitor_idleitor` ASC),
  INDEX `fk_emprestimo_funcionario1_idx` (`funcionario_idfuncionario` ASC),
  INDEX `fk_emprestimo_status1_idx` (`status_idstatus` ASC),
  CONSTRAINT `fk_emprestimo_acervo1`
    FOREIGN KEY (`acervo_idacervo`)
    REFERENCES `coracoralina`.`acervo` (`idacervo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_emprestimo_funcionario1`
    FOREIGN KEY (`funcionario_idfuncionario`)
    REFERENCES `coracoralina`.`funcionario` (`idfuncionario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_emprestimo_leitor1`
    FOREIGN KEY (`leitor_idleitor`)
    REFERENCES `coracoralina`.`leitor` (`idleitor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_emprestimo_status1`
    FOREIGN KEY (`status_idstatus`)
    REFERENCES `coracoralina`.`status` (`idstatus`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coracoralina`.`devolucao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`devolucao` (
  `iddevolucao` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATETIME NOT NULL,
  `emprestimo_idemprestimo` INT(11) NOT NULL,
  `emprestimo_idemprestimo1` INT(11) NOT NULL,
  `status_idstatus` INT(11) NOT NULL,
  PRIMARY KEY (`iddevolucao`, `emprestimo_idemprestimo`),
  INDEX `fk_devolucao_emprestimo1_idx` (`emprestimo_idemprestimo1` ASC),
  INDEX `fk_devolucao_status1_idx` (`status_idstatus` ASC),
  CONSTRAINT `fk_devolucao_emprestimo1`
    FOREIGN KEY (`emprestimo_idemprestimo1`)
    REFERENCES `coracoralina`.`emprestimo` (`idemprestimo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_devolucao_status1`
    FOREIGN KEY (`status_idstatus`)
    REFERENCES `coracoralina`.`status` (`idstatus`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coracoralina`.`leitor_has_acervo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`leitor_has_acervo` (
  `leitor_idleitor` INT(10) NOT NULL,
  `acervo_idacervo` INT(11) NOT NULL,
  PRIMARY KEY (`leitor_idleitor`, `acervo_idacervo`),
  INDEX `fk_leitor_has_acervo_acervo1_idx` (`acervo_idacervo` ASC),
  INDEX `fk_leitor_has_acervo_leitor1_idx` (`leitor_idleitor` ASC),
  CONSTRAINT `fk_leitor_has_acervo_acervo1`
    FOREIGN KEY (`acervo_idacervo`)
    REFERENCES `coracoralina`.`acervo` (`idacervo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_leitor_has_acervo_leitor1`
    FOREIGN KEY (`leitor_idleitor`)
    REFERENCES `coracoralina`.`leitor` (`idleitor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `coracoralina`.`opiniao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`opiniao` (
  `idopiniao` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(1000) NOT NULL,
  `leitor_idleitor` INT(10) NOT NULL,
  `acervo_idacervo` INT(11) NOT NULL,
  PRIMARY KEY (`idopiniao`),
  INDEX `fk_opiniao_leitor1_idx` (`leitor_idleitor` ASC),
  INDEX `fk_opiniao_acervo1_idx` (`acervo_idacervo` ASC),
  CONSTRAINT `fk_opiniao_leitor1`
    FOREIGN KEY (`leitor_idleitor`)
    REFERENCES `coracoralina`.`leitor` (`idleitor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_opiniao_acervo1`
    FOREIGN KEY (`acervo_idacervo`)
    REFERENCES `coracoralina`.`acervo` (`idacervo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coracoralina`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`usuario` (
  `idUsuario` INT(10) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(50) NOT NULL,
  `login` VARCHAR(20) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `perfil_idPerfil` INT(10) NOT NULL,
  `funcionario_idfuncionario` INT(11) NOT NULL,
  `emprestimo_idemprestimo` INT(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `fk_usuario_perfil_idx` (`perfil_idPerfil` ASC),
  INDEX `fk_usuario_funcionario1_idx` (`funcionario_idfuncionario` ASC),
  INDEX `fk_usuario_emprestimo1_idx` (`emprestimo_idemprestimo` ASC),
  CONSTRAINT `fk_usuario_emprestimo1`
    FOREIGN KEY (`emprestimo_idemprestimo`)
    REFERENCES `coracoralina`.`emprestimo` (`idemprestimo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario_funcionario1`
    FOREIGN KEY (`funcionario_idfuncionario`)
    REFERENCES `coracoralina`.`funcionario` (`idfuncionario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario_perfil`
    FOREIGN KEY (`perfil_idPerfil`)
    REFERENCES `coracoralina`.`perfil` (`idPerfil`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
