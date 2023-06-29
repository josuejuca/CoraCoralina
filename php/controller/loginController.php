<?php
session_start();
require_once '../dao/loginDAO.php';

$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$loginDAO = new LoginDAO();
$usuario = $loginDAO->login($email, $senha);

if (!empty($usuario)) {

    $_SESSION["nome"] = $usuario["nome"];
    $_SESSION["email"] = $usuario["email"];
    $_SESSION["perfil"] = $usuario["perfil"];
    $_SESSION["cpf"] = $usuario["cpf"];
    $_SESSION["rg"] = $usuario["rg"];
    
    $_SESSION["telefone"] = $usuario["telefone"];
    $_SESSION["endereco"] = $usuario["endereco"];
    $_SESSION["perfil_idperfil"] = $usuario["perfil_idperfil"];
    $_SESSION["idusuario"] = $usuario["idusuario"];

    

    echo "<script>";
    echo "window.location.href = '../php/conta/index.php';";
    echo "</script> ";
} else {
    $msg = "";
    echo "<script>";
    echo 'alert("Usuário e/ou senha inválido!");';
    echo "window.location.href = '../index.php';";
    echo "</script> ";
}
