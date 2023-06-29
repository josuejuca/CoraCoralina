<?php
session_start();

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';

// Verifique se o ID do usuário a ser editado foi fornecido na URL
if (isset($_GET['id'])) {
    $idUsuario = $_GET['id'];

    // Obtém as informações do usuário logado das variáveis de sessão
    $perfil_idperfil = $_SESSION["perfil_idperfil"];

    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $dt_nasc = $_POST["dt_nasc"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    $usuarioDTO = new usuarioDTO();

    $usuarioDTO->setEmail($email);
    $usuarioDTO->setIdusuario($idUsuario);
    $usuarioDTO->setNome($nome);
    $usuarioDTO->setDt_nasc($dt_nasc);
    $usuarioDTO->setCpf($cpf);
    $usuarioDTO->setRg($rg);
    $usuarioDTO->setTelefone($telefone);
    $usuarioDTO->setEndereco($endereco);
    $usuarioDTO->setPerfil_idperfil($perfil_idperfil);

    $usuarioDAO = new UsuarioDAO();
    $usuarioDAO->alterar($usuarioDTO);

    echo "<script>";
    echo "alert('Usuário editado com Sucesso!');";
    echo "window.location.href = '../php/conta/index.php';";
    echo "</script>";
} else {
    // Se o ID do usuário não foi fornecido, redirecione para a página de erro ou para outra página adequada
    echo "<script>";
    echo "alert('ID do usuário não fornecido.');";
    echo "window.location.href = '../php/erro.php';";
    echo "</script>";
}
?>
