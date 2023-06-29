
<?php

session_start();

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';

$usuarioDAO = new UsuarioDAO();

// Verifique se o usuário está logado e se o ID do usuário está definido na $_SESSION
if (isset($_SESSION['idusuario'])) {
    $idUsuario = $_SESSION['idusuario'];

    // Chame a função selecionaID() para obter as informações do usuário com base no ID
    $usuario = $usuarioDAO->selecionaID($idUsuario);

    // Verifique se o usuário foi encontrado antes de exibir o formulário com os valores
    if ($usuario) {
        // Atribua os valores retornados às variáveis
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $cpf = $usuario['cpf'];
        $rg = $usuario['rg'];
        // ... atribua outras informações do usuário conforme necessário

        // Agora você pode usar essas variáveis nos campos de entrada do formulário
    }
}

// Obtém as informações do usuário logado das variáveis de sessão
$idusuario = $_SESSION["idusuario"];
$senha = $usuario["senha"];

$senha_atual = md5($_POST["senha_atual"]);
$nova_senha = md5($_POST["nova_senha"]);
$confirmar_senha = md5($_POST["confirmar_senha"]);



$usuarioDTO = new usuarioDTO();

$usuarioDTO->setIdusuario($idusuario);
$usuarioDTO->setSenha($senha_atual);
$usuarioDTO->setNovaSenha($nova_senha); // Adicionado para definir a nova senha em formato MD5



// Verifica se a nova senha e a confirmação coincidem
if ($nova_senha !== $confirmar_senha) {
    echo "<script>";
    echo "alert('A nova senha e a confirmação não coincidem.');";
    echo "window.location.href = '../php/conta/index.php';";
    echo "</script>";
    exit;
}

$usuarioDAO = new UsuarioDAO();

if ($senha_atual !== $senha) {
    echo "<script>";
    echo "alert('Senha atual incorreta!');";
    echo "window.location.href = '../php/conta/index.php';";
    echo "</script>";
    exit;
}

$resultado = $usuarioDAO->alterarSenha($usuarioDTO);

if ($resultado) {
    echo "<script>";
    echo "alert('Senha alterada com sucesso!');";
    echo "window.location.href = '../php/conta/index.php';";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('Ocorreu um erro ao alterar a senha.');";
    echo "window.location.href = '../php/conta/index.php';";
    echo "</script>";
}
?>