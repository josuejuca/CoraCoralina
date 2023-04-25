<?php

include('protect.php');

if($_SESSION['perfil_idPerfil'] != 1) {
    die("Você não tem permissão para acessar esta página.");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>

<body>
    Bem vindo ao Painel de adm, <?php echo $_SESSION['nome']; ?>.

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>

</html>