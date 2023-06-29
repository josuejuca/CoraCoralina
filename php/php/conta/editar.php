<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    session_start();
    include '../../view/validaLogin.php';
    ?>

    <?php
    // Inclua o arquivo usuarioDAO.php e crie uma instância do objeto UsuarioDAO
    require_once '../../dao/usuarioDAO.php';
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
            // ... atribua outras informações do usuário conforme necessário

            // Agora você pode usar essas variáveis nos campos de entrada do formulário
        }
    }
    ?>

    <!-- Formulário HTML -->
    <form action="atualizar_usuario.php" method="POST">
        <input type="text" name="nome" value="<?php echo isset($nome) ? $nome : ''; ?>" required>
        <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
        <!-- ... outros campos do formulário -->
        <input type="submit" value="Atualizar">
    </form>

</body>

</html>