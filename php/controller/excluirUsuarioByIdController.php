<?php
require_once '../dao/usuarioDAO.php';
$idusuario=$_GET["id"];

$usuarioDAO=new UsuarioDAO();
$usuarioDAO->excluir($idusuario);

echo "<script>";
echo 'alert("Usuário excluido com sucesso!");';
echo "window.location.href = '../view/listarAllUsuario.php';";
echo "</script>";