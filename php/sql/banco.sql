-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

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
  `perfil` VARCHAR(100) NOT NULL COMMENT 'Campo descricao: descricao do perfil na tabela \'perfil\'.',
  PRIMARY KEY (`idperfil`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `coracoralina`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`usuario` (
  `idusuario` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria na tabela \'usuario\'.',
  `email` VARCHAR(50) NOT NULL COMMENT 'Campo email: cadastro do email na tabela \'usuario\'.',
  `senha` VARCHAR(32) NOT NULL COMMENT 'Campo senha: cadastro da senha na tabela \'usuario\'.',
  `nome` VARCHAR(60) NOT NULL COMMENT 'Campo nome: cadastro do nome na tabela \'usuario\'.',
  `dt_nasc` DATE NOT NULL COMMENT 'Campo dt_nasc: cadastro da data de nascimento na tabela \'usuario\'.',
  `cpf` VARCHAR(14) NOT NULL COMMENT 'Campo cpf: cadastro do cpf na tabela \'usuario\'.',
  `rg` VARCHAR(14) NOT NULL COMMENT 'Campo rg: cadastro do rg na tabela \'usuario\'.',
  `endereco` VARCHAR(60) NOT NULL COMMENT 'Campo endereco: cadastro do endereço na tabela \'usuario\'.',
  `telefone` VARCHAR(20) NOT NULL COMMENT 'Campo telefone: cadastro do telefone na tabela \'usuario\'.',
  `perfil_idperfil` INT(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'perfil\'.',
  PRIMARY KEY (`idusuario`),
  INDEX `fk_usuario_perfil_idx` (`perfil_idperfil` ASC) ,
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
  `autor` VARCHAR(100) NOT NULL COMMENT 'Campo autor: cadastro do autor do livro na tabela \'acervo\'.',
  `sinopse` VARCHAR(3000) NOT NULL COMMENT 'campo sinopse: cadastro da sinopse do livro na tabela \'acervo\'.',
  `quantidade` INT(20) NOT NULL COMMENT 'Campo quantidade: cadastro da quantidade de livros na tabela \'acervo\'.',
  `midia` INT(10) NOT NULL COMMENT 'Campo midia: cadastro do tipo de mídia dos livros na tabela \'acervo\'.',
  `capa` VARCHAR(500) NOT NULL COMMENT 'Campo capa: cadastro da capa dos livros na tabela \'acervo\'.',
  `livro_nome` VARCHAR(100) NOT NULL COMMENT 'Campo livro_nome: cadastro do livro na tabela \'acervo\'.',
  `isbn` VARCHAR(50) NOT NULL COMMENT 'Campo ISBN: cadastro do numero do livro reconhecido mundialmente na tabela \'acervo\'.',
  `sobre_autor` VARCHAR(3000) NULL COMMENT 'Campo sobre_autor: cadastro de uma breve biografia do autor do livro na tabela \'acervo\'.',
  `genero` VARCHAR(45) NULL COMMENT 'Campo genero: cadastro do gênero literario na tabela \'acervo\'.',
  `data_cadastro` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP() COMMENT 'Campo data: cadastro da data do livro na tabela \'acervo\'.',
  `data_livro` YEAR(4) NULL COMMENT 'Campo data_livro: cadastro da data do livro na tabela \'acervo\'.',
  `editora` VARCHAR(50) NULL COMMENT 'Campo editora: cadastro da editora que lançou o livro na tabela \'acervo\'.',
  `idioma` VARCHAR(50) NULL COMMENT 'Campo idioma: cadastro do idioma do acervo na tabela \'acervo\'.',
  `num_pa` VARCHAR(50) NULL COMMENT 'Campo num_pa: cadastro da quantidade de pagina dos livros na tabela \'acervo\'.',
  `info_ad1` VARCHAR(50) NULL COMMENT 'Campo info_ad2: cadastro de alguma informação adicional do acervo na tabela \'acervo\'.',
  `info_ad2` VARCHAR(50) NULL COMMENT 'Campo info_ad2: cadastro de alguma informação adicional do acervo na tabela \'acervo\'.',
  `info_ad3` VARCHAR(50) NULL COMMENT 'Campo info_ad3: cadastro de alguma informação adicional do acervo na tabela \'acervo\'.',
  `usuario_idusuario` INT(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'usuario\'.',
  PRIMARY KEY (`idacervo`),
  INDEX `fk_acervo_usuario1_idx` (`usuario_idusuario` ASC) ,
  CONSTRAINT `fk_acervo_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `coracoralina`.`usuario` (`idusuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
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
  INDEX `fk_emprestimo_acervo1_idx` (`acervo_idacervo` ASC) ,
  INDEX `fk_emprestimo_usuario1_idx` (`usuario_idusuario` ASC) ,
  CONSTRAINT `fk_emprestimo_acervo1`
    FOREIGN KEY (`acervo_idacervo`)
    REFERENCES `coracoralina`.`acervo` (`idacervo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_emprestimo_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `coracoralina`.`usuario` (`idusuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coracoralina`.`devolucao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`devolucao` (
  `iddevolucao` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria da tabela \'devolucao\'.',
  `data` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP() COMMENT 'Campo data: cadastro da data da devolução do livro na tabela \'devolucao\'.',
  `emprestimo_idemprestimo` INT(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'emprestimo\'.',
  PRIMARY KEY (`iddevolucao`),
  INDEX `fk_devolucao_emprestimo1_idx` (`emprestimo_idemprestimo` ASC) ,
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
  `data` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP() COMMENT 'Campo data: cadastro da data da doação na tabela \'doacao\'.',
  `acervo_idacervo` INT(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'acervo\'.',
  `usuario_idusuario` INT(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'usuario\'.',
  PRIMARY KEY (`iddoacao`),
  INDEX `fk_doacao_acervo1_idx` (`acervo_idacervo` ASC) ,
  INDEX `fk_doacao_usuario1_idx` (`usuario_idusuario` ASC) ,
  CONSTRAINT `fk_doacao_acervo1`
    FOREIGN KEY (`acervo_idacervo`)
    REFERENCES `coracoralina`.`acervo` (`idacervo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_doacao_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `coracoralina`.`usuario` (`idusuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `coracoralina`.`opiniao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `coracoralina`.`opiniao` (
  `idopiniao` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria da tabela \'opiniao\'.',
  `opiniao` VARCHAR(1000) NOT NULL COMMENT 'Campo descricao: descricao da opinião do leitor na tabela \'opiniao\'.',
  `nota` INT(5) NOT NULL COMMENT 'Campo nota: nota do leitor sobre o livro na tabela \'opiniao\'.',
  `data` DATE NOT NULL COMMENT 'Campo data: cadastro da data do emprestimo na tabela \'opiniao\'.',
  `usuario_idusuario` INT(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'usuario\'.',
  `acervo_idacervo` INT(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela \'acervo\'.',
  PRIMARY KEY (`idopiniao`),
  INDEX `fk_opiniao_acervo1_idx` (`acervo_idacervo` ASC) ,
  INDEX `fk_opiniao_usuario1_idx` (`usuario_idusuario` ASC) ,
  CONSTRAINT `fk_opiniao_acervo1`
    FOREIGN KEY (`acervo_idacervo`)
    REFERENCES `coracoralina`.`acervo` (`idacervo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_opiniao_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `coracoralina`.`usuario` (`idusuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


