
/**
  * 1. usuario (OK) {IdUsuario(PK),IdPerfil(FK) nome, e-mail, login, senha}
  * 2. perfil (OK) 
  * 3. funcionario (OK)
  * 4. emprestimo () {Idemprestimo (PK), data, idUsuario(FK), IdFuncionario(PK), IdAcervo(FK)}
  * 5. devolucao 
  * 6. doacao 
  * 7. status
  * 8. acervo 
  * 9. Leitor (ok){idLeitor(PF) , pai, mae, dt_nasc , cpf, rg, endereco, sexo, telefone, idUsuario(FK) }
  * 10. Feedback
**/

-- Criar banco de dados --
create database CoraCoralina;
-- Acessar o bd CoraCoralina --
use CoraCoralina;

-- Criar tabela perfil --
create table perfil
(
    idPerfil int(10) not null auto_increment,
    desricao varchar(100) not null,
    primary key(idPerfil)  -- Chave primaria --
)
engine = innodb
auto_increment = 1 -- Configuração basica --
default character set = utf8;


------------------------------------------------------------------------------------


-- Nova tabela --




------------------------------------------------------------------------------------

-- Nova tabela --

-- Acessar o bd CoraCoralina --
use CoraCoralina;
-- Criar tabela usuario --
create table usuario  
(
    idUsuario int(10) not null auto_increment,
    nome varchar(300) not null,
    email varchar(50) not null,
    login varchar(20) not null,
    senha varchar(32) not null,
    idPerfil int(10) not null,  -- Chave estrangeira --
    primary key(idUsuario), -- Chave primaria --
    constraint perfil_usuario foreign key (idPerfil) references perfil (idPerfil) -- Chave estrangeira --
)
engine = innodb
auto_increment = 1 -- Configuração basica --
default character set = utf8;

----------------------------------------------------------------

-- Nova tabela --

-- Acessar o bd CoraCoralina --
use CoraCoralina;
-- Criar tabela leitor --
create table leitor  
(
    idleitor int(10) not null auto_increment,
    nomepas varchar(300) not null,
    pai varchar(300) not null,
    mae varchar(300) not null,
    dt_nasc date not null,
    cpf varchar(20) not null,
    rg varchar(20) not null,
    endereco varchar(300) not null,
    sexo varchar(100) not null,
    telefone varchar(30) not null,
    
    
    
    idUsuario int(10) not null,  -- Chave estrangeira --
    primary key(idleitor), -- Chave primaria --
    constraint leitor_usuario foreign key (idUsuario) references usuario (idUsuario) -- Chave estrangeira --
)
engine = innodb
auto_increment = 1 -- Configuração basica --
default character set = utf8;



------------------------------------------------------------------------------------

-- Nova tabela --

-- Acessar o bd CoraCoralina --
use CoraCoralina;
-- Criar tabela prontuario --
create table prontuario  
(
    idProntuario int(10) not null auto_increment,
    funcionario varchar(300) not null,
    dt date not null,
    hora varchar(10) not null,
    anamnese varchar(500) not null,
    idleitor int(10) not null,  -- Chave estrangeira --
    primary key(idProntuario), -- Chave primaria --
    constraint leitor_prontuario foreign key (idleitor) references leitor (idleitor) -- Chave estrangeira --
)
engine = innodb
auto_increment = 1 -- Configuração basica --
default character set = utf8;



------------------------------------------------------------------------------------

-- Nova tabela --

-- Acessar o bd CoraCoralina --
use CoraCoralina;
-- Criar tabela funcionario --
create table funcionario  
(
    idFuncionario int(10) not null auto_increment,
    nomefun varchar(300) not null,
    pai varchar(300) not null,
    mae varchar(300) not null,
    dt_nasc date not null,
    cpf varchar(20) not null,
    rg varchar(20) not null,
    endereco varchar(300) not null,
    sexo varchar(100) not null,
    telefone varchar(30) not null,
    naturalidade varchar(100) not null,
    nascionalidade varchar(300) not null,
    raca varchar(100) not null,
    registro varchar(100) not null,    
    primary key(idFuncionario), -- Chave primaria --
    
)
engine = innodb
auto_increment = 1 -- Configuração basica --
default character set = utf8;



------------------------------------------------------------------------------------

-- Nova tabela --

-- Acessar o bd CoraCoralina --
use CoraCoralina;
-- Criar tabela agenda --
create table agenda
(
    idAgenda int(10) not null auto_increment,
    dt date not null,
    hora varchar(10) not null,    
    idFuncionario int(10) not null,  -- Chave estrangeira --
    idleitor int(10) not null,  -- Chave estrangeira --
    primary key(idAgenda), -- Chave primaria --
    
    constraint funcionario_agenda foreign key (idFuncionario) references funcionario (idFuncionario), -- Chave estrangeira --
    constraint leitor_agenda foreign key (idleitor) references leitor (idleitor) -- Chave estrangeira --
)aciente
engine = innodb
auto_increment = 1 -- Configuração basica --
default character set = utf8;



------------------------------------------------------------------------------------

-- Nova tabela --

-- Acessar o bd CoraCoralina --
use CoraCoralina;
-- Criar tabela agenda --
create table consulta
(
    idConsulta int(10) not null auto_increment,
    
    idFuncionario int(10) not null,  -- Chave estrangeira --
    idAgenda int(10) not null,  -- Chave estrangeira --
    idleitor int(10) not null,  -- Chave estrangeira --
    primary key(idConsulta), -- Chave primaria --
    
    constraint funcionario_consulta foreign key (idFuncionario) references funcionario (idFuncionario), -- Chave estrangeira --
    constraint leitor_consulta foreign key (idleitor) references leitor (idleitor), -- Chave estrangeira --
    constraint agenda_consulta foreign key (idAgenda) references agenda (idAgenda) -- Chave estrangeira --
)
engine = innodb
auto_increment = 1 -- Configuração basica --
default character set = utf8;
