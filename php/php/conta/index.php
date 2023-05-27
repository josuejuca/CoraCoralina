<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Minha Conta | Cora Coralina</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="shortcut icon" href="../../assets/img/favicon.png"> -->

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/vendor/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="../../assets/css/theme.css">
</head>

<body>

    <?php
    session_start();
    include '../../view/validaLogin.php';
    ?>

    <header id="site-header" class="site-header__v1 u-header">
        <div class="topbar border-bottom d-none d-md-block">
            <div class="container-fluid px-2 px-md-5 px-xl-8d75">
                <div class="topbar__nav d-md-flex justify-content-between align-items-center">
                    <ul class="topbar__nav--left nav ml-md-n3">
                        <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-question mr-2"></i>Dúvidas?</a></li>
                        <li class="nav-item"><a href="tel:61999999999" class="nav-link link-black-100"><i class="glph-icon flaticon-phone mr-2"></i>(61) 9 9999-9999</a></li>
                    </ul>
                    <ul class="topbar__nav--right nav mr-md-n3">
                        <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-pin"></i></a></li>
                        <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-switch"></i></a></li>
                        <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-heart"></i></a></li>


                        <?php


                        if (isset($_SESSION["email"])) {
                            // Usuário está logado, exibe o link para a página de gerenciamento de conta
                            echo '<li class="nav-item">';
                            echo '<a href="../../php/end/contrucao.php" class="nav-link link-black-100">';
                            echo '<i class="glph-icon flaticon-user"></i>';
                            echo '</a>';
                            echo '</li>';
                        } else {
                            // Usuário não está logado, mantém o código existente
                            echo '<li class="nav-item">';
                            echo '<a id="sidebarNavToggler" href="javascript:;" role="button" class="nav-link link-black-100" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-overlay=\'{ "className": "u-sidebar-bg-overlay", "background": "rgba(0, 0, 0, .7)", "animationSpeed": 500 }\' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">';
                            echo '<i class="glph-icon flaticon-user"></i>';
                            echo '</a>';
                            echo '</li>';
                        }
                        ?>

                        <!-- <li class="nav-item">

                            <a id="sidebarNavToggler" href="javascript:;" role="button" class="nav-link link-black-100" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-overlay='{
                                    "className": "u-sidebar-bg-overlay",
                                    "background": "rgba(0, 0, 0, .7)",
                                    "animationSpeed": 500
                                }' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                <i class="glph-icon flaticon-user"></i>
                            </a>

                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="masthead border-bottom position-relative" style="margin-bottom: -1px;">
            <div class="container-fluid px-3 px-md-5 px-xl-8d75 py-2 py-md-0">
                <div class="d-flex align-items-center position-relative flex-wrap">
                    <div class="offcanvas-toggler mr-4 mr-lg-8">
                        <a id="sidebarNavToggler2" href="javascript:;" role="button" class="cat-menu" aria-controls="sidebarContent2" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2" data-unfold-type="css-animation" data-unfold-overlay='{
                            "className": "u-sidebar-bg-overlay",
                            "background": "rgba(0, 0, 0, .7)",
                            "animationSpeed": 100
                        }' data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="100">
                            <svg width="20px" height="18px">
                                <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,-0.000 L20.000,-0.000 L20.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z" />
                                <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,8.000 L15.000,8.000 L15.000,10.000 L-0.000,10.000 L-0.000,8.000 Z" />
                                <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,16.000 L20.000,16.000 L20.000,18.000 L-0.000,18.000 L-0.000,16.000 Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="site-branding pr-md-4">
                        <a href="index.html" class="d-block mb-1">
                            <!--  width="170px" height="30px" -->
                            <img src="../../assets/img/logo.png" alt="[]" style="max-width: 210px; ">
                        </a>
                    </div>
                    <div class="site-navigation mr-auto d-none d-xl-block">
                        <ul class="nav">

                            <li class="nav-item"><a href="#" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium   ">Página
                                    Inicial</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium    ">Categorias</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium active border-bottom border-primary border-width-2">Biblioteca
                                    Virtual</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium    ">Contato</a>
                            </li>

                        </ul>
                    </div>
                    <ul class="d-md-none nav mr-md-n3 ml-auto">
                        <li class="nav-item">

                            <a id="sidebarNavToggler9" href="javascript:;" role="button" class="px-2 nav-link link-black-100" aria-controls="sidebarContent9" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent9" data-unfold-type="css-animation" data-unfold-overlay='{
                                    "className": "u-sidebar-bg-overlay",
                                    "background": "rgba(0, 0, 0, .7)",
                                    "animationSpeed": 500
                                }' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                <i class="glph-icon flaticon-user"></i>
                            </a>

                        </li>
                    </ul>
                    <div class="site-search ml-xl-0 ml-md-auto w-r-100 my-2 my-xl-0">
                        <form class="form-inline">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="glph-icon flaticon-loupe input-group-text py-2d75 bg-white-100 border-white-100"></i>
                                </div>
                                <input class="form-control bg-white-100 min-width-380 py-2d75 height-4 border-white-100" type="search" placeholder="Buscar livro" aria-label="Search">
                            </div>
                            <button class="btn btn-outline-success my-2 my-sm-0 sr-only" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <aside id="sidebarContent9" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler9">
        <div class="u-sidebar__scroller">
            <div class="u-sidebar__container">
                <div class="u-header-sidebar__footer-offset">

                    <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                        <button type="button" class="close ml-auto" aria-controls="sidebarContent9" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent9" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                            <span aria-hidden="true">Fechar <i class="fas fa-times ml-2"></i></span>
                        </button>
                    </div>


                    <div class="js-scrollbar u-sidebar__body">
                        <div class="u-sidebar__content u-header-sidebar__content">
                            <form class="">

                                <div id="login1" data-target-group="idForm1">

                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-user mr-3 font-size-5"></i>Conta</h2>
                                    </header>

                                    <div class="p-4 p-md-6">

                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel9" class="form-label" for="signinEmail9">Email *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail9" placeholder="etc.juca@gmail.com" aria-label="etc.juca@gmail.com" aria-describedby="signinEmailLabel9" required>
                                            </div>
                                        </div>


                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinPasswordLabel9" class="form-label" for="signinPassword9">Senha *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword9" placeholder="" aria-label="" aria-describedby="signinPasswordLabel9" required>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mb-5 align-items-center">

                                            <div class="js-form-message">
                                                <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                                    <input type="checkbox" class="custom-control-input" id="termsCheckbox1" name="termsCheckbox1" required>
                                                    <label class="custom-control-label" for="termsCheckbox1">
                                                        <span class="font-size-2 text-secondary-gray-700">
                                                            Manter conectado
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <a class="js-animation-link text-dark font-size-2 t-d-u link-muted font-weight-medium" href="javascript:;" data-target="#forgotPassword1" data-link-group="idForm1" data-animation-in="fadeIn">Esqueceu a
                                                senha?</a>
                                        </div>
                                        <div class="mb-4d75">
                                            <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Entrar</button>
                                        </div>
                                        <div class="mb-2">
                                            <a href="javascript:;" class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium" data-target="#signup1" data-link-group="idForm1" data-animation-in="fadeIn">Criar conta</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="signup1" style="display: none; opacity: 0;" data-target-group="idForm1">

                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-resume mr-3 font-size-5"></i>Criar Conta</h2>
                                    </header>

                                    <div class="p-4 p-md-6">

                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel11" class="form-label" for="signinEmail11">Email *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail11" placeholder="etc.juca@gmail.com" aria-label="etc.juca@gmail.com" aria-describedby="signinEmailLabel11" required>
                                            </div>
                                        </div>


                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinPasswordLabel11" class="form-label" for="signinPassword11">Senha *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword11" placeholder="" aria-label="" aria-describedby="signinPasswordLabel11" required>
                                            </div>
                                        </div>


                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signupConfirmPasswordLabel9" class="form-label" for="signupConfirmPassword9">Confirmar Senha *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="confirmPassword" id="signupConfirmPassword9" placeholder="" aria-label="" aria-describedby="signupConfirmPasswordLabel9" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Criar
                                                Conta</button>
                                        </div>
                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Já possui conta?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#login1" data-link-group="idForm1" data-animation-in="fadeIn">Entre
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div id="forgotPassword1" style="display: none; opacity: 0;" data-target-group="idForm1">

                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-question mr-3 font-size-5"></i>Esqueceu a senha?</h2>
                                    </header>

                                    <div class="p-4 p-md-6">

                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel33" class="form-label" for="signinEmail33">Email *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail33" placeholder="etc.juca@gmail.com" aria-label="etc.juca@gmail.com" aria-describedby="signinEmailLabel33" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Recuperar Senha</button>
                                        </div>
                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Lembrou a senha?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#login1" data-link-group="idForm1" data-animation-in="fadeIn">Entre
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </aside>


    <aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
        <div class="u-sidebar__scroller">
            <div class="u-sidebar__container">
                <div class="u-header-sidebar__footer-offset">

                    <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                        <button type="button" class="close ml-auto" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                            <span aria-hidden="true">Fechar <i class="fas fa-times ml-2"></i></span>
                        </button>
                    </div>


                    <div class="js-scrollbar u-sidebar__body">
                        <div class="u-sidebar__content u-header-sidebar__content">
                            <form class="">

                                <div id="login" data-target-group="idForm">

                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-user mr-3 font-size-5"></i>Conta</h2>
                                    </header>

                                    <div class="p-4 p-md-6">

                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel" class="form-label" for="signinEmail">Email
                                                    *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail" placeholder="etc.juca@gmail.com" aria-label="etc.juca@gmail.com" aria-describedby="signinEmailLabel" required>
                                            </div>
                                        </div>


                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinPasswordLabel" class="form-label" for="signinPassword">Senha *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword" placeholder="" aria-label="" aria-describedby="signinPasswordLabel" required>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mb-5 align-items-center">

                                            <div class="js-form-message">
                                                <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required>
                                                    <label class="custom-control-label" for="termsCheckbox">
                                                        <span class="font-size-2 text-secondary-gray-700">
                                                            Manter conectado
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <a class="js-animation-link text-dark font-size-2 t-d-u link-muted font-weight-medium" href="javascript:;" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="fadeIn">Esqueceu a
                                                senha?</a>
                                        </div>
                                        <div class="mb-4d75">
                                            <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Entrar</button>
                                        </div>
                                        <div class="mb-2">
                                            <a href="javascript:;" class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium" data-target="#signup" data-link-group="idForm" data-animation-in="fadeIn">Criar conta</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">

                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-resume mr-3 font-size-5"></i>Criar Conta</h2>
                                    </header>

                                    <div class="p-4 p-md-6">

                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel1" class="form-label" for="signinEmail1">Email *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail1" placeholder="etc.juca@gmail.com" aria-label="etc.juca@gmail.com" aria-describedby="signinEmailLabel1" required>
                                            </div>
                                        </div>


                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinPasswordLabel1" class="form-label" for="signinPassword1">Senha *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword1" placeholder="" aria-label="" aria-describedby="signinPasswordLabel1" required>
                                            </div>
                                        </div>


                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signupConfirmPasswordLabel" class="form-label" for="signupConfirmPassword">Confirmar senha *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="confirmPassword" id="signupConfirmPassword" placeholder="" aria-label="" aria-describedby="signupConfirmPasswordLabel" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Criar
                                                Conta</button>
                                        </div>
                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Já tem conta?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Entre
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">

                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-question mr-3 font-size-5"></i>Esqueceu a senha?</h2>
                                    </header>

                                    <div class="p-4 p-md-6">

                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel3" class="form-label" for="signinEmail3">Email *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail3" placeholder="etc.juca@gmail.com" aria-label="etc.juca@gmail.com" aria-describedby="signinEmailLabel3" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Recuperar senha</button>
                                        </div>
                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Lembrou a senha?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Entre
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </aside>





    <aside id="sidebarContent2" class="u-sidebar u-sidebar__md u-sidebar--left" aria-labelledby="sidebarNavToggler2">
        <div class="u-sidebar__scroller js-scrollbar">
            <div class="u-sidebar__container">
                <div class="u-header-sidebar__footer-offset">

                    <div class="u-sidebar__body">
                        <div class="u-sidebar__content u-header-sidebar__content">

                            <header class="border-bottom px-4 px-md-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="font-size-3 mb-0">CATEGORIAS</h2>

                                <div class="d-flex align-items-center">
                                    <button type="button" class="close ml-auto" aria-controls="sidebarContent2" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                        <span aria-hidden="true"><i class="fas fa-times ml-2"></i></span>
                                    </button>
                                </div>

                            </header>

                            <div class="border-bottom">
                                <div class="zeynep pt-4">
                                    <ul>
                                        <li class="has-submenu">
                                            <a href="#" data-submenu="art-photo">Arte</a>
                                            <div id="art-photo" class="submenu">
                                                <div class="submenu-header" data-submenu-close="art-photo">
                                                    <a href="#">Arte</a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">Sub Categoria 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 3 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 4 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 5 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 6 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 7 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#" data-submenu="biography">Biografia</a>
                                            <div id="biography" class="submenu">
                                                <div class="submenu-header" data-submenu-close="biography">
                                                    <a href="#">Biografia</a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">Sub Categoria 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 3 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 4 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 5 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 6 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 7 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#" data-submenu="children">Receitas</a>
                                            <div id="children" class="submenu">
                                                <div class="submenu-header" data-submenu-close="children">
                                                    <a href="#">Receitas</a>
                                                </div>
                                                <ul>
                                                    <li class="has-submenu">
                                                        <a href="#" data-submenu="electronics">Confeitaria</a>
                                                        <div id="electronics" class="submenu js-scrollbar">
                                                            <div class="submenu-header" data-submenu-close="electronics">
                                                                <a href="#">Confeitaria</a>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <a href="#">Sub Categoria 1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Sub Categoria 2 </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Sub Categoria 3 </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Sub Categoria 4 </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Sub Categoria 5 </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Sub Categoria 6 </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Sub Categoria 7 </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#">Culinaria</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Comidas tipicas</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Bolos</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#" data-submenu="computers">Informática e T.I</a>
                                            <div id="computers" class="submenu">
                                                <div class="submenu-header" data-submenu-close="computers">
                                                    <a href="#">Informática e T.I</a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">Sub Categoria 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 3 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 4 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 5 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 6 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 7 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#" data-submenu="cookbook">Saúde</a>
                                            <div id="cookbook" class="submenu">
                                                <div class="submenu-header" data-submenu-close="cookbook">
                                                    <a href="#">Saúde</a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">Sub Categoria 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 3 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 4 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 5 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 6 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 7 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#" data-submenu="sciencemath">Esporte</a>
                                            <div id="sciencemath" class="submenu">
                                                <div class="submenu-header" data-submenu-close="sciencemath">
                                                    <a href="#">Esporte</a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">Sub Categoria 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 3 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 4 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 5 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 6 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 7 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#" data-submenu="health">Romance</a>
                                            <div id="health" class="submenu">
                                                <div class="submenu-header" data-submenu-close="health">
                                                    <a href="#">Romance</a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">Sub Categoria 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 3 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 4 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 5 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 6 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 7 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#" data-submenu="history">Literatura</a>
                                            <div id="history" class="submenu">
                                                <div class="submenu-header" data-submenu-close="history">
                                                    <a href="#">Literatura</a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">Sub Categoria 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 3 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 4 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 5 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 6 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 7 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#" data-submenu="romance">Infantil</a>
                                            <div id="romance" class="submenu">
                                                <div class="submenu-header" data-submenu-close="romance">
                                                    <a href="#">Infantil</a>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#">Sub Categoria 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 2 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 3 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 4 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 5 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 6 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sub Categoria 7 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="px-4 px-md-5 pt-5 pb-4 border-bottom">
                                <h2 class="font-size-3 mb-3">CONFIGURAÇÃO </h2>
                                <ul class="list-group list-group-flush list-group-borderless">
                                    <li class="list-group-item px-0 py-2 border-0"><a href="#" class="h-primary">Gerenciar Conta</a></li>
                                    <li class="list-group-item px-0 py-2 border-0"><a href="#" class="h-primary">Ajuda</a></li>
                                    <li class="list-group-item px-0 py-2 border-0"><a href="#" class="h-primary">Sair da
                                            conta</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </aside>




    <main id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 border-right">
                    <h6 class="font-weight-medium font-size-7 pt-5 pt-lg-8  mb-5 mb-lg-7">Minha Conta</h6>
                    <div class="tab-wrapper">
                        <ul class="my__account-nav nav flex-column mb-0" role="tablist" id="pills-tab">
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0 active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Meus Livros</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Downloads</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Escolas</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-five-example1-tab" data-toggle="pill" href="#pills-five-example1" role="tab" aria-controls="pills-five-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Dados da conta</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-six-example1-tab" data-toggle="pill" href="#pills-six-example1" role="tab" aria-controls="pills-six-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Livros favoritos</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="#">
                                    <span class="font-weight-normal text-gray-600">Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                            <div class="pt-5 pt-lg-8 pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3 mb-xl-1">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Dashboard</h6>
                                <div class="ml-lg-1 mb-4">

                                    <?php
                                    // if (isset($_SESSION["email"])) {
                                    //     echo '<span class="font-size-22">Olá ', $_SESSION["email"],'</span>';                                        
                                    //     echo '<span class="font-size-2"> (não é o', $_SESSION["email"],'? <a class="link-black-100" href="../../controller/logoffController.php">
                                    //     sair</a>)</span>';
                                    // }

                                    if (isset($_SESSION["nome"])) {
                                        echo '<span class="font-size-22">Olá ', $_SESSION["nome"], '</span>';
                                        echo '<span class="font-size-2"> (não é o', $_SESSION["nome"], '? <a class="link-black-100" href="../../controller/logoffController.php">sair</a>)</span>';
                                    }

                                    ?>

                                    <!-- <span class="font-size-22">Olá Juca</span>
                                    <span class="font-size-2"> (não é o Juca? <a class="link-black-100" href="#">
                                            sair</a>)</span> -->
                                </div>
                                <div class="mb-4">
                                    <p class="mb-0 font-size-2 ml-lg-1 text-gray-600">Bem vindo ao Cora Coralina esse é
                                        o painel do usuario nele você vai conseguir <span class="text-dark">gerenciar a
                                            conta na plataforma,</span> vai conseguir também <span class="text-dark">
                                            verificar os livros emprestado</span> vai conseguir <span class="text-dark">
                                            baixar os pdf dos livros</span></p>
                                </div>
                                <div class="row no-gutters row-cols-1 row-cols-md-2 row-cols-lg-3">
                                    <div class="col">
                                        <div class="border py-6 text-center">
                                            <a id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false" class="btn btn-primary rounded-circle px-4 mb-2">
                                                <span class="flaticon-order font-size-10 btn-icon__inner"></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Meus Livros</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="border border-left-0 py-6 text-center">
                                            <a href="#" class="btn btn-primary rounded-circle px-4 mb-2">
                                                <span class="flaticon-cloud-computing font-size-10 btn-icon__inner"></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Downloads</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="border border-left-0 py-6 text-center">
                                            <a href="#" class="btn btn-primary rounded-circle px-4 mb-2">
                                                <span class="flaticon-place font-size-10 btn-icon__inner "></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Escolas</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="border py-6 text-center">
                                            <a href="#" class="btn btn-primary rounded-circle px-4 mb-2">
                                                <span class="flaticon-user-1 font-size-10 btn-icon__inner "></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Dados da conta</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="border border-left-0 py-6 text-center">
                                            <a href="#" class="btn btn-primary rounded-circle px-4 mb-2">
                                                <span class="flaticon-heart font-size-10 btn-icon__inner "></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Livros favoritos</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="border border-left-0 py-6 text-center">
                                            <a href="#" class="btn btn-primary rounded-circle px-4 mb-2">
                                                <span class="flaticon-exit font-size-10 btn-icon__inner"></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Sair</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Meus Livros</h6>
                                <table class="table">
                                    <thead>
                                        <tr class="border">
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-lg-5">ID</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Data</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Status</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Livro</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium center">Ação
                                                do Usuário</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border">
                                            <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#1</th>
                                            <td class="align-middle py-5">13/05/2023</td>
                                            <td class="align-middle py-5 green">Emprestimo</td>
                                            <td class="align-middle py-5">Código limpo</td>
                                            <td class="align-middle py-5">
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-dark rounded-0 btn-wide font-weight-medium">Devolver
                                                        Livro
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Downloads</h6>
                                <table class="table">
                                    <thead>
                                        <tr class="border">
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-lg-5">ID</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Data</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Status</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Livro</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium center">Ação
                                                do Usuário</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border">
                                            <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#1</th>
                                            <td class="align-middle py-5">13/05/2023</td>
                                            <td class="align-middle py-5 green">Disponível</td>
                                            <td class="align-middle py-5">Código limpo</td>
                                            <td class="align-middle py-5">
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-dark rounded-0 btn-wide font-weight-medium">Baixar
                                                        Livro
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-four-example1" role="tabpanel" aria-labelledby="pills-four-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-2 mb-lg-4">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-5 mb-lg-8 pb-xl-1">Escolas</h6>
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col">
                                        <div class="mb-6 mb-md-0">
                                            <h6 class="font-weight-medium font-size-22 mb-3">Escola Técnica de Ceilândia
                                            </h6>
                                            <address class="d-flex flex-column mb-4">
                                                <span class="text-gray-600 font-size-2">St. N</span>
                                                <span class="text-gray-600 font-size-2">Área Especial QNN 14,</span>
                                                <span class="text-gray-600 font-size-2">Ceilândia, </span>
                                                <span class="text-gray-600 font-size-2">Brasília - DF</span>
                                            </address>
                                            <div class="d-flex">
                                                <a href="">
                                                    <button class="btn btn-dark width-150 rounded-0 btn-wide font-weight-medium">Maps</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-five-example1" role="tabpanel" aria-labelledby="pills-five-example1-tab">
                            <div class="border-bottom mb-6 pb-6 mb-lg-8 pb-lg-9">
                                <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9">
                                    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Dados da conta
                                    </h6>
                                    <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Editar Conta</div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="js-form-message">
                                                <label for="exampleFormControlInput1">Nome *</label>
                                                <input type="text" class="form-control rounded-0 pl-3 placeholder-color-3" id="exampleFormControlInput1" name="name" aria-label="Jack Wayley" placeholder="Juca" required="" data-error-class="u-has-error" data-msg="Coloque seu nome." data-success-class="u-has-success">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="js-form-message">
                                                <label for="exampleFormControlInput2">Telefone *</label>
                                                <input type="text" class="form-control rounded-0 pl-3 placeholder-color-3" id="exampleFormControlInput2" name="name" aria-label="Jack Wayley" placeholder="(61) 9 0000-0000" required="" data-error-class="u-has-error" data-msg="Coloque o seu telefone" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="js-form-message">
                                                <label for="exampleFormControlInput3">Endereço</label>
                                                <input type="text" class="form-control rounded-0" name="name" aria-label="Jack Wayley" id="exampleFormControlInput3" required="" data-error-class="u-has-error" data-msg="Coloque seu endereço" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4 mb-md-0">
                                            <div class="js-form-message">
                                                <label for="exampleFormControlInput4">Email</label>
                                                <input type="email" placeholder="etc.juca@gmail.com" class="form-control rounded-0" name="name" id="exampleFormControlInput4" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Coloque seu e-mail." data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3">
                                <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Mudar Senha</div>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="js-form-message">
                                            <label for="exampleFormControlInput5">Senha antiga</label>
                                            <input type="password" class="form-control rounded-0" name="name" id="exampleFormControlInput5" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="js-form-message">
                                            <label for="exampleFormControlInput6">Nova senha</label>
                                            <input type="password" class="form-control rounded-0" name="name" id="exampleFormControlInput6" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-5">
                                        <div class="js-form-message">
                                            <label for="exampleFormControlInput7">Conformar senha</label>
                                            <input type="password" class="form-control rounded-0" name="name" id="exampleFormControlInput7" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <button type="submit" class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-six-example1" role="tabpanel" aria-labelledby="pills-six-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-3">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Livros Favoritos</h6>
                                <table class="table mb-0">
                                    <thead>
                                        <tr class="border">
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Livro</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Quantidade
                                            </th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Status
                                            </th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border">
                                            <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">
                                                <div class="d-flex align-items-center">
                                                    <a class="d-block" href="#">
                                                        <img style="max-width: 80px !important; max-height: 120px !important;" class="img-fluid" src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg" alt="Image-Description">
                                                    </a>
                                                    <div class="ml-xl-4">
                                                        <div class="font-weight-normal">
                                                            <a href="#">Código Limpo</a>
                                                        </div>
                                                        <div class="font-size-2"><a href="#" class="text-gray-700" tabindex="0">Robert C. Martin</a></div>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="align-middle py-5">1</td>
                                            <td class="align-middle py-5 green">Disponivel</td>
                                            <td class="align-middle py-5">
                                                <a href="">
                                                    <span>Ver Livro</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <hr>
    <footer>
        <div class="space-top-3">
            <div class="border-bottom pb-5 space-bottom-lg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-6 md-md-0">
                            <div class="pb-md-6">
                                <a href="index.html" class="d-inline-block mb-5">
                                    <img src="../../assets/img/logo.png" alt="[]" style="max-width: 210px; ">
                                </a>
                                <address class="font-size-2 mb-5">
                                    <span class="mb-2 font-weight-normal text-dark">
                                        St. N, Área Especial QNN 14 - Ceilândia, Brasília - DF
                                    </span>
                                </address>
                                <div class="mb-4">
                                    <a href="mailto:juca@josuejuca.com" class="font-size-2 d-block link-black-100 mb-1">juca@josuejuca.com</a>
                                    <a href="tel:61999999999" class="font-size-2 d-block link-black-100">61 9
                                        9999-9999</a>
                                </div>
                                <ul class="list-unstyled mb-0 d-flex">
                                    <li class="btn pl-0">
                                        <a class="link-black-100" href="#">
                                            <span class="fab fa-instagram"></span>
                                        </a>
                                    </li>
                                    <li class="btn">
                                        <a class="link-black-100" href="#">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li class="btn">
                                        <a class="link-black-100" href="#">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li class="btn">
                                        <a class="link-black-100" href="#">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="btn">
                                        <a class="link-black-100" href="#">
                                            <span class="fab fa-pinterest"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 mb-6 md-md-0">
                            <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Explore</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="pb-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Sobre nós</a>
                                </li>
                                <li class="py-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Sitemap</a>
                                </li>
                                <li class="py-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Contato</a>
                                </li>
                                <li class="pt-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Bibliotecas</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 mb-6 md-md-0">
                            <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Conta </h4>
                            <ul class="list-unstyled mb-0">
                                <li class="pb-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Gerenciar conta</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-2 mb-6 md-md-0">
                            <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Explore</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="pb-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Sobre nós</a>
                                </li>
                                <li class="py-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Sitemap</a>
                                </li>
                                <li class="py-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Contato</a>
                                </li>
                                <li class="pt-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Bibliotecas</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 mb-6 md-md-0">
                            <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Explore</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="pb-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Sobre nós</a>
                                </li>
                                <li class="py-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Sitemap</a>
                                </li>
                                <li class="py-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Contato</a>
                                </li>
                                <li class="pt-2">
                                    <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Bibliotecas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-1">
                <div class="container">
                    <div class="d-lg-flex text-center text-lg-left justify-content-between align-items-center">

                        <p class="mb-3 mb-lg-0 font-size-2">©2023 Cora Coralina. All rights reserved</p>

                        <div class="d-lg-flex align-items-center">
                            <div class="mb-4 mb-lg-0 mr-md-5">
                                <img class="img-fluid" style="width: 128px !important;
                                margin-left: 15px !important;" src="https://assets-juca.netlify.app/img/juca/juca-black.png" alt="Image-Description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="../../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../../assets/vendor/slick-carousel/slick/slick.min.js"></script>
    <script src="../../assets/vendor/multilevel-sliding-mobile-menu/dist/jquery.zeynep.js"></script>
    <script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="../../assets/js/hs.core.js"></script>
    <script src="../../assets/js/components/hs.unfold.js"></script>
    <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
    <script src="../../assets/js/components/hs.header.js"></script>
    <script src="../../assets/js/components/hs.slick-carousel.js"></script>
    <script src="../../assets/js/components/hs.selectpicker.js"></script>
    <script src="../../assets/js/components/hs.show-animation.js"></script>


    <script>
        $(document).on('ready', function() {
            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // init zeynepjs
            var zeynep = $('.zeynep').zeynep({
                onClosed: function() {
                    // enable main wrapper element clicks on any its children element
                    $("body main").attr("style", "");

                    console.log('the side menu is closed.');
                },
                onOpened: function() {
                    // disable main wrapper element clicks on any its children element
                    $("body main").attr("style", "pointer-events: none;");

                    console.log('the side menu is opened.');
                }
            });

            // handle zeynep overlay click
            $(".zeynep-overlay").click(function() {
                zeynep.close();
            });

            // open side menu if the button is clicked
            $(".cat-menu").click(function() {
                if ($("html").hasClass("zeynep-opened")) {
                    zeynep.close();
                } else {
                    zeynep.open();
                }
            });
        });
    </script>
</body>

</html>