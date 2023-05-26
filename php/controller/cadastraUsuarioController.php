<?php

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';
//dados do formulario
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$perfil_idperfil = 2;


$nome = $_POST["nome"];

$dt_nasc = $_POST["dt_nasc"];;
$cpf = $_POST["cpf"];;
$rg = $_POST["rg"];;
$endereco = $_POST["endereco"];;
$telefone = $_POST["telefone"];;



$usuarioDTO = new usuarioDTO();

$usuarioDTO->setNome($nome);
$usuarioDTO->setDt_nasc($dt_nasc);
$usuarioDTO->setCpf($cpf);
$usuarioDTO->setRg($rg);
$usuarioDTO->setEmail($email);

$usuarioDTO->setEndereco($endereco);
$usuarioDTO->setTelefone($telefone);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setPerfil_idperfil($perfil_idperfil);

$usuarioDAO = new usuarioDAO();
$sucesso = $usuarioDAO->salvar($usuarioDTO);

if ($sucesso) {
    $msg = "Usuário Cadastrado com sucesso";
    echo "<script>";
    // echo "alert('{$msg}')";
    echo "window.location.href='../php/end/sucesso.php' ";
    echo "</script> ";
}
