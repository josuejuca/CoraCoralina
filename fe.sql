-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;

SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

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

  `idperfil` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'PK: chave primaria da tabela \'perfil\'.',

  `perfil` VARCHAR(100) NOT NULL COMMENT 'campo descricao: descricao do perfil na tabela \'perfil\'.',

  PRIMARY KEY (`idperfil`))

ENGINE = InnoDB

AUTO_INCREMENT = 4

DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------

-- Table `coracoralina`.`usuario`

-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `coracoralina`.`usuario` (

  `idusuario` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria na tabela \'usuario\'.',

  `email` VARCHAR(50) NOT NULL COMMENT 'campo email: cadastro do email na tabela \'usuario\'.',

  `senha` VARCHAR(32) NOT NULL COMMENT 'campo senha: cadastro da senha na tabela \'usuario\'.',

  `nome` VARCHAR(60) NOT NULL COMMENT 'campo nome: cadastro do nome na tabela \'usuario\'.',

  `dt_nasc` DATE NOT NULL COMMENT 'campo dt_nasc: cadastro da data de nascimento na tabela \'usuario\'.',

  `cpf` VARCHAR(14) NOT NULL COMMENT 'campo cpf: cadastro do cpf na tabela \'usuario\'.',

  `rg` VARCHAR(14) NOT NULL COMMENT 'campo rg: cadastro do rg na tabela \'usuario\'.',

  `endereco` VARCHAR(60) NOT NULL COMMENT 'campo endereco: cadastro do endereco na tabela \'usuario\'.',

  `telefone` VARCHAR(20) NOT NULL COMMENT 'campo telefone: cadastro do telefone na tabela \'usuario\'.',

  `perfil_idperfil` INT(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'perfil\'.',

  PRIMARY KEY (`idusuario`),

  INDEX `fk_usuario_perfil_idx` (`perfil_idperfil` ASC),

  CONSTRAINT `fk_usuario_perfil`

    FOREIGN KEY (`perfil_idperfil`)

    REFERENCES `coracoralina`.`perfil` (`idperfil`)

    ON DELETE CASCADE

    ON UPDATE CASCADE)

ENGINE = InnoDB

AUTO_INCREMENT = 4

DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------

-- Table `coracoralina`.`acervo`

-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `coracoralina`.`acervo` (

  `idacervo` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'PK: chave primaria na tabela \'acervo\'.',

  `autor` VARCHAR(45) NOT NULL COMMENT 'campo autor: cadastro do autor do livro na tabela \'acervo\'.',

  `genero` VARCHAR(45) NOT NULL COMMENT 'campo genero: cadastro do genero literario na tabela \'acervo\'.',

  `data_cadastro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP() COMMENT 'campo data: cadastro da data do livro na tabela \'acervo\'.',

  `livro` VARCHAR(100) NOT NULL COMMENT 'campo livro: cadastro do livro na tabela \'acervo\'.',

  `sinopse` VARCHAR(500) NOT NULL COMMENT 'campo sinopse: cadastro da sinopse do livro na tabela \'acervo\'.',

  `data` YEAR NOT NULL COMMENT 'campo data: cadastro da data do livro na tabela \'acervo\'.',

  `usuario_idusuario` INT(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'usuario\'.',

  PRIMARY KEY (`idacervo`),

  INDEX `fk_acervo_usuario1_idx` (`usuario_idusuario` ASC),

  CONSTRAINT `fk_acervo_usuario1`

    FOREIGN KEY (`usuario_idusuario`)

    REFERENCES `coracoralina`.`usuario` (`idusuario`)

    ON DELETE NO ACTION

    ON UPDATE NO ACTION)

ENGINE = InnoDB

DEFAULT CHARACTER SET = latin1;

-- -----------------------------------------------------

-- Table `coracoralina`.`emprestimo`

-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `coracoralina`.`emprestimo` (

  `idemprestimo` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'PK: chave primaria da tabela \'emprestimo\'.',

  `data` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP() COMMENT 'campo data: cadastro da data do emprestimo na tabela \'emprestimo\'.',

  `status` VARCHAR(100) NOT NULL COMMENT 'campo status: cadastro do status do emprestimo na tabela \'emprestimo\'.',

  `usuario_idusuario` INT(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'usuario\'.',

  `acervo_idacervo` INT(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'acervo\'.',

  PRIMARY KEY (`idemprestimo`),

  INDEX `fk_emprestimo_acervo1_idx` (`acervo_idacervo` ASC),

  INDEX `fk_emprestimo_usuario1_idx` (`usuario_idusuario` ASC),

  CONSTRAINT `fk_emprestimo_acervo1`

    FOREIGN KEY (`acervo_idacervo`)

    REFERENCES `coracoralina`.`acervo` (`idacervo`)

    ON DELETE CASCADE

    ON UPDATE CASCADE,

  CONSTRAINT `fk_emprestimo_usuario1`

    FOREIGN KEY (`usuario_idusuario`)

    REFERENCES `coracoralina`.`usuario` (`idusuario`)

    ON DELETE NO ACTION

    ON UPDATE NO ACTION)

ENGINE = InnoDB

DEFAULT CHARACTER SET = latin1;

-- -----------------------------------------------------

-- Table `coracoralina`.`devolucao`

-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `coracoralina`.`devolucao` (

  `iddevolucao` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria da tabela \'devolucao\'.',

  `data` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP() COMMENT 'campo data: cadastro da data da devolucao do livro na tabela \'devolucao\'.',

  `emprestimo_idemprestimo` INT(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'emprestimo\'.',

  PRIMARY KEY (`iddevolucao`),

  INDEX `fk_devolucao_emprestimo1_idx` (`emprestimo_idemprestimo` ASC),

  CONSTRAINT `fk_devolucao_emprestimo1`

    FOREIGN KEY (`emprestimo_idemprestimo`)

    REFERENCES `coracoralina`.`emprestimo` (`idemprestimo`)

    ON DELETE CASCADE

    ON UPDATE CASCADE)

ENGINE = InnoDB

DEFAULT CHARACTER SET = latin1;

-- -----------------------------------------------------

-- Table `coracoralina`.`doacao`

-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `coracoralina`.`doacao` (

  `iddoacao` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria na tabela \'doacao\'.',

  `data` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP() COMMENT 'campo data: cadastro da data da doacao na tabela \'doacao\'.',

  `acervo_idacervo` INT(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'acervo\'.',

  `usuario_idusuario` INT(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'usuario\'.',

  PRIMARY KEY (`iddoacao`),

  INDEX `fk_doacao_acervo1_idx` (`acervo_idacervo` ASC),

  INDEX `fk_doacao_usuario1_idx` (`usuario_idusuario` ASC),

  CONSTRAINT `fk_doacao_acervo1`

    FOREIGN KEY (`acervo_idacervo`)

    REFERENCES `coracoralina`.`acervo` (`idacervo`)

    ON DELETE CASCADE

    ON UPDATE CASCADE,

  CONSTRAINT `fk_doacao_usuario1`

    FOREIGN KEY (`usuario_idusuario`)

    REFERENCES `coracoralina`.`usuario` (`idusuario`)

    ON DELETE NO ACTION

    ON UPDATE NO ACTION)

ENGINE = InnoDB

DEFAULT CHARACTER SET = latin1;

-- -----------------------------------------------------

-- Table `coracoralina`.`opiniao`

-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `coracoralina`.`opiniao` (

  `idopiniao` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria da tabela \'opiniao\'.',

  `opiniao` VARCHAR(1000) NOT NULL COMMENT 'campo descricao: descricao da opiao do leitor na tabela \'opiniao\'.',

  `nota` INT(5) NOT NULL COMMENT 'campo nota: nota do leitor sobre o livro na tabela \'opiniao\'.',

  `data` DATE NOT NULL COMMENT 'campo data: cadastro da data do emprestimo na tabela \'opiniao\'.',

  `usuario_idusuario` INT(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'usuario\'.',

  `acervo_idacervo` INT(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'acervo\'.',

  PRIMARY KEY (`idopiniao`),

  INDEX `fk_opiniao_acervo1_idx` (`acervo_idacervo` ASC),

  INDEX `fk_opiniao_usuario1_idx` (`usuario_idusuario` ASC),

  CONSTRAINT `fk_opiniao_acervo1`

    FOREIGN KEY (`acervo_idacervo`)

    REFERENCES `coracoralina`.`acervo` (`idacervo`)

    ON DELETE NO ACTION

    ON UPDATE NO ACTION,

  CONSTRAINT `fk_opiniao_usuario1`

    FOREIGN KEY (`usuario_idusuario`)

    REFERENCES `coracoralina`.`usuario` (`idusuario`)

    ON DELETE NO ACTION

    ON UPDATE NO ACTION)

ENGINE = InnoDB

DEFAULT CHARACTER SET = latin1;

SET SQL_MODE=@OLD_SQL_MODE;

SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
