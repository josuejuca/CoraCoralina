-- Perfil 
INSERT INTO `perfil` (`idperfil`, `perfil`) VALUES ('1', 'Administrador'), ('2', 'Funcionario'),('3','Comunidade');
-- Usuarios
INSERT INTO `usuario` (`idusuario`, `email`, `senha`, `nome`, `dt_nasc`, `cpf`, `rg`, `endereco`, `telefone`, `perfil_idperfil`) VALUES (NULL, 'juca@juca.com', '7b5a67574d8b1d77d2803b24946950f0', 'Juca', '2003-12-19', '000.000.000-00', '00.000.000-0', 'Ceilandia Sul', '(61) 9 8463-4855', '1')
-- 
