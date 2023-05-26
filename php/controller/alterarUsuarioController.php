<?php

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';

//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
//exit();
$idusuario = $_POST["idusuario"];
$usuario = $_POST["usuario"];
$perfil = $_POST["perfil_idperfil"];

$usuarioDTO = new usuarioDTO();
$usuarioDTO->setUsuario($usuario);
$usuarioDTO->setPerfil_idperfil($perfil);
$usuarioDTO->setIdusuario($idusuario);

$usuarioDAO = new UsuarioDAO();
$usuarioDAO->alterar($usuarioDTO);

echo "<script>";
echo "alert('Usuário editado com Sucesso!');";
echo "window.location.href = '../view/listarAllUsuario.php';";
echo "</script>";
