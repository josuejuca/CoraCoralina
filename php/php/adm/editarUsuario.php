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


    // Verifica se a variável de sessão "email" está definida
    if (isset($_SESSION["email"])) {
        // Verifica se o perfil do usuário é de administrador
        if ($_SESSION["perfil_idperfil"] != 3) {
            $perfil = $_SESSION["perfil_idperfil"];
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
    // Inclua o arquivo usuarioDAO.php e crie uma instância do objeto UsuarioDAO
    require_once '../../dao/usuarioDAO.php';
    $usuarioDAO = new UsuarioDAO();

    // Verifique se o ID do usuário está definido na URL
    if (isset($_GET["id"])) {
        $idUsuario = $_GET["id"];

        // Chame a função selecionaID() para obter as informações do usuário com base no ID
        $usuario = $usuarioDAO->selecionaID($idUsuario);

        // Verifique se o usuário foi encontrado antes de exibir o formulário com os valores
        if ($usuario) {
            // Atribua os valores retornados às variáveis
            $perfil_edit = $usuario['perfil_idperfil'];
            $nome = $usuario['nome'];
            $email = $usuario['email'];
            $cpf = $usuario['cpf'];
            $rg = $usuario['rg'];
            // ... atribua outras informações do usuário conforme necessário

            // Agora você pode usar essas variáveis nos campos de entrada do formulário
        } else {
            // Caso o usuário não seja encontrado, você pode redirecionar para uma página de erro ou fazer alguma outra ação adequada
            echo "Usuário não encontrado.";
            exit;
        }
    } else {
        // Caso o ID do usuário não esteja definido na URL, você pode redirecionar para uma página de erro ou fazer alguma outra ação adequada
        echo "ID do usuário não fornecido.";
        exit;
    }
    ?>


    <?php
    include '../../php/end/header.php';
    ?>

    <?php

    if (($perfil != 1) && ($perfil_edit == 2)) {
        // Usuário está logado e tem permissão de administrador
        echo "<script>";
        echo "alert('Usuário sem privilégio');";
        echo "window.location.href = 'usuarios.php';";
        echo "</script>";
    }

    if (($perfil != 1) && ($perfil_edit == 1)) {
        // Usuário está logado e tem permissão de administrador
        echo "<script>";
        echo "alert('Usuário sem privilégio');";
        echo "window.location.href = 'usuarios.php';";
        echo "</script>";
    }

    ?>
    <div class="page-header border-bottom">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Editar Conta</h1>
                <nav class="woocommerce-breadcrumb font-size-2">
                    <a href="#" class="h-primary">ADM</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                    <a href="#" class="h-primary">Conta</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Editar Conta
                </nav>
            </div>
        </div>
    </div>
    <div id="content" class="site-content space-bottom-3">
        <div class="col-full bg-white container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-6" class="post-6 page type-page status-publish hentry">
                        <header class="entry-header space-top-2 space-bottom-1 mb-2">
                            <h4 class="entry-title font-size-7 text-center">Editar Usuário</h4>
                        </header>

                        <div class="entry-content">
                            <div class="woocommerce">
                                <form action="../../controller/ADMalterarUsuarioController.php?id=<?php echo $usuario["idusuario"] ?>" method="post" class="checkout woocommerce-checkout row mt-8">
                                    <div style="margin: auto !important; padding: auto !important;" class="col2-set col-md-6 col-lg-7 col-xl-8 mb-6 mb-md-0" id="customer_details">
                                        <div class="px-4 pt-5 bg-white border">
                                            <div class="woocommerce-billing-fields">
                                                <h3 class="mb-4 font-size-3">Atualizar Conta</h3>
                                                <div class="row">
                                                    <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                        <label for="billing_first_name" class="form-label">Nome *
                                                        </label>
                                                        <input type="text" class="input-text form-control" name="nome" id="billing_first_name" placeholder="Nome" value="<?php echo $usuario["nome"] ?>" autocomplete="given-name" autofocus="autofocus">
                                                    </p>
                                                    <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                        <label for="billing_last_name" class="form-label">Telefone</label>
                                                        <input type="text" class="input-text form-control" name="telefone" id="telefone-input" placeholder="(61) 9 0000-0000" value="<?php echo $usuario["telefone"] ?>" autocomplete="family-name">
                                                    </p>

                                                    <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                        <label for="billing_first_name" class="form-label">CPF *
                                                        </label>
                                                        <input type="text" class="input-text form-control" name="cpf" id="cpf-input" value="<?php echo $usuario["cpf"] ?>" placeholder="000.000.000-00">
                                                    </p>
                                                    <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                        <label for="billing_last_name" class="form-label">RG *</label>
                                                        <input type="text" class="input-text form-control" name="rg" id="rg-input" placeholder="0.000.000" value="<?php echo $usuario["rg"] ?>" autocomplete="family-name">
                                                    </p>

                                                    <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_email_field" data-priority="110">
                                                        <label for="billing_email" class="form-label">Email *</label>
                                                        <input type="email" class="input-text form-control" name="email" id="billing_email" placeholder="etc.juca@gmail.com" value="<?php echo $usuario["email"] ?>" autocomplete="email">
                                                    </p>

                                                    <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_email_field" data-priority="110">
                                                        <label for="billing_email" class="form-label">Data de Nascimento
                                                            *</label>
                                                        <input type="date" class="input-text form-control" name="dt_nasc" id="billing_email" placeholder="" value="<?php echo $usuario["dt_nasc"] ?>" autocomplete="email">
                                                    </p>

                                                    <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                        <label for="billing_company" class="form-label">
                                                            Endereço</label>
                                                        <input type="text" class="input-text form-control" name="endereco" id="billing_company" placeholder="" value="endereco" autocomplete="organization">
                                                    </p>

                                                </div>
                                                <div class="row">
                                                    <div class="ml-3">
                                                        <button type="submit" class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390">Atualizar
                                                            Conta</button>
                                                    </div>
                                                </div>
                                                <br>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </article>

                </main>

            </div>

        </div>

    </div>

    <hr>

    <?php
    include '../end/footer.php';
    ?>

    <?php
    include '../end/script.php';
    ?>