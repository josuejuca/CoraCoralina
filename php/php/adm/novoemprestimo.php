<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Criar Conta | Conta Coralina</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/5328/5328095.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/vendor/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="../../assets/css/main.css">
</head>

<body class="right-sidebar woocommerce-checkout">
    <?php
    session_start();
    include '../../view/validaLogin.php';

    // Inclua o arquivo usuarioDAO.php e crie uma instância do objeto UsuarioDAO
    require_once '../../dao/usuarioDAO.php';
    $usuarioDAO = new UsuarioDAO();

    if (isset($_GET["isbn"])) {
        $isbn_livro = $_GET["isbn"];

        // Chame a função selecionaID() para obter as informações do usuário com base no ID
        $isbn__ = $usuarioDAO->selecionaISNBLivro($isbn_livro);

        // Verifique se o usuário foi encontrado antes de exibir o formulário com os valores
        if ($isbn__) {
            // Atribua os valores retornados às variáveis

            $isbn = $isbn__['isbn'];
            // ... atribua outras informações do usuário conforme necessário

            // Agora você pode usar essas variáveis nos campos de entrada do formulário
        }
    }

    // Verifica se a variável de sessão "email" está definida
    if (isset($_SESSION["email"])) {
        // Verifica se o perfil do usuário é de administrador
        if ($_SESSION["perfil_idperfil"] == 1) {
            // Usuário está logado e tem permissão de administrador
        } else {
            // Usuário está logado, mas não tem permissão de administrador
            echo "<script>";
            echo "window.location.href = '../end/403.php';";
            echo "</script> ";
        }
    } else {
        // Usuário não está logado, mantém o código existente
        echo "<script>";
        echo "window.location.href = '../end/403.php';";
        echo "</script> ";
    }
    ?>






    <?php
    include '../../php/end/header.php';
    ?>

    <div class="page-header border-bottom">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Fazer Emprestimo</h1>
                <nav class="woocommerce-breadcrumb font-size-2">
                    <a href="#" class="h-primary">ADM</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                    <a href="#" class="h-primary">Emprestimo</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Fazer Emprestimo
                </nav>
            </div>
        </div>
    </div>


    <main id="content">
        <div class="container">
            <div class="space-bottom-2 space-bottom-lg-4">
                <form action="../../controller/emprestimo.php" method="post">
                    <div class="pb-lg-2">
                        <div class="py-4 pt-lg-8 pb-lg-7">
                            <h6 class="font-weight-medium font-size-7 text-center">Fazer Emprestimo</h6>
                        </div>
                        <div class="max-width-770 mx-auto">
                            <p class="font-size-2 text-center text-lh-1dot72 text-gray-600 mb-6"></p>
                        </div>
                        <div class="row mb-6">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <div class="js-form-message">
                                    <label for="exampleFormControlInput1">ISBN</label>
                                    <input type="text" class="form-control rounded-0" name="isbn" value="<?php echo $isbn; ?>" aria-label="Jack Wayley" id="exampleFormControlInput1" required data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="js-form-message">
                                    <label for="exampleFormControlInput2">CPF do leitor</label>
                                    <input type="text"  id="cpf-input" class="form-control rounded-0 font-size pl-3 placeholder-color-3" id="exampleFormControlInput2" name="cpf" aria-label="000.000.000-00" required placeholder="000.000.000-00" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-lg-start">
                            <button type="submit" class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-250">Finalizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <hr>

    <?php
    include '../end/footer.php';
    ?>

    <?php
    include '../end/script.php';
    ?>