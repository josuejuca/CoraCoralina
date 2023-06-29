INSERT INTO `perfil` (`idperfil`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Usuário'),
(3, 'Cliente');


INSERT INTO `usuario` (`idusuario`, `usuario`, `senha`, `perfil_idperfil`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'usuario', '202cb962ac59075b964b07152d234b70', 2),
(3, 'cliente', '202cb962ac59075b964b07152d234b70', 3),
(4, 'cliente', '202cb962ac59075b964b07152d234b70', 4);