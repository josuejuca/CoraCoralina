<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Biblioteca | Cora Coralina</title>

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


    <div class="page-header border-bottom mb-8">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Biblioteca Virtual</h1>
                <nav class="woocommerce-breadcrumb font-size-2">
                    <a href="../home/index.html" class="h-primary">Home</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                    <a href="../shop/v2.html" class="h-primary">Livros</a>
                </nav>
            </div>
        </div>
    </div>

    <div class="site-content" id="content">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area order-2">
                    <div class="shop-control-bar d-lg-flex justify-content-between align-items-center mb-5 text-center text-md-left">
                        <div class="shop-control-bar__left mb-4 m-lg-0">
                            <p class="woocommerce-result-count m-0">Mostrando 1–12 de 126 resultados</p>
                        </div>
                        <div class="shop-control-bar__right d-md-flex align-items-center">
                            <form class="woocommerce-ordering mb-4 m-md-0" method="get">

                                <select class="js-select selectpicker dropdown-select orderby" name="orderby" data-style="border-bottom shadow-none outline-none py-2">
                                    <option value="popularity">Classificar por popularidade</option>
                                    <option value="default" selected="selected">Classificação padrão</option>
                                    <option value="date">Ultimos livros</option>
                                </select>

                            </form>
                            <form class="number-of-items ml-md-4 mb-4 m-md-0 d-none d-xl-block" method="get">

                                <select class="js-select selectpicker dropdown-select orderby" name="orderby" data-style="border-bottom shadow-none outline-none py-2" data-width="fit">
                                    <option value="show10">Mostrar 10</option>
                                    <option value="show15">Mostrar 15</option>
                                    <option value="show20" selected="selected">Mostrar 20</option>
                                    <option value="show25">Mostrar 25</option>
                                    <option value="show30">Mostrar 30</option>
                                </select>

                            </form>
                            <ul class="nav nav-tab ml-lg-4 justify-content-center justify-content-md-start ml-md-auto" id="pills-tab" role="tablist">
                                <li class="nav-item border">
                                    <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="17px">
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,0.000 L10.000,0.000 L10.000,3.000 L7.000,3.000 L7.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M14.000,0.000 L17.000,0.000 L17.000,3.000 L14.000,3.000 L14.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,7.000 L10.000,7.000 L10.000,10.000 L7.000,10.000 L7.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M14.000,7.000 L17.000,7.000 L17.000,10.000 L14.000,10.000 L14.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,14.000 L10.000,14.000 L10.000,17.000 L7.000,17.000 L7.000,14.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M14.000,14.000 L17.000,14.000 L17.000,17.000 L14.000,17.000 L14.000,14.000 Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item border">
                                    <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="17px">
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,0.000 L23.000,0.000 L23.000,3.000 L7.000,3.000 L7.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,7.000 L23.000,7.000 L23.000,10.000 L7.000,10.000 L7.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,14.000 L23.000,14.000 L23.000,17.000 L7.000,17.000 L7.000,14.000 Z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>

                            <a id="sidebarNavToggler4" class="ml-3 h-primary" href="javascript:;" role="button" aria-controls="sidebarContent4" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent4" data-unfold-type="css-animation" data-unfold-overlay='{
                                    "className": "u-sidebar-bg-overlay",
                                    "background": "rgba(0, 0, 0, .7)",
                                    "animationSpeed": 500
                                }' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                <i class="flaticon-filter mr-2"></i>Filtrar Livro
                            </a>


                            <aside id="sidebarContent4" class="u-sidebar u-sidebar__md js-scrollbar" aria-labelledby="sidebarNavToggler4">
                                <div class="u-sidebar__scroller">
                                    <div class="u-sidebar__container">
                                        <div class="u-header-sidebar__footer-offset">

                                            <div class="d-flex align-items-center justify-content-between py-4 px-4 border-bottom mb-5">
                                                <div class="font-size-3">
                                                    <i class="flaticon-filter mr-2"></i>Filtrar por
                                                </div>
                                                <button type="button" class="close font-size-3 text-dark d-flex align-items-center" aria-controls="sidebarContent4" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent4" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                                    Fechar <span aria-hidden="true"><i class="ml-2 flaticon-error"></i></span>
                                                </button>
                                            </div>


                                            <div class="u-sidebar__body px-4">
                                                <div class="u-sidebar__content u-header-sidebar__content">
                                                    <div class="sidebar widget-area">
                                                        <div id="widgetAccordion">
                                                            <div id="woocommerce_product_categories-2" class="widget p-4d875 border woocommerce widget_product_categories">
                                                                <div id="widgetHeadingOne" class="widget-head">
                                                                    <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapseOne" aria-expanded="true" aria-controls="widgetCollapseOne">
                                                                        <h3 class="widget-title mb-0 font-weight-medium font-size-3">Categorias</h3>
                                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                                                        </svg>
                                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <div id="widgetCollapseOne" class="mt-3 widget-content collapse show" aria-labelledby="widgetHeadingOne" data-parent="#widgetAccordion">
                                                                    <ul class="product-categories">
                                                                        <li class="cat-item cat-item-9 cat-parent">
                                                                            <a href="#/clothing">Clothing</a>
                                                                            <ul class="children">
                                                                                <li class="cat-item cat-item-121"><a href="#/clothing/bags/">Bags</a></li>
                                                                                <li class="cat-item cat-item-44"><a href="#/clothing/blouses/">Blouses</a></li>
                                                                                <li class="cat-item cat-item-41"><a href="#/clothing/dresses/">Dresses</a></li>
                                                                                <li class="cat-item cat-item-56"><a href="#/clothing/footwear/">Footwear</a></li>
                                                                                <li class="cat-item cat-item-54"><a href="#/clothing/hats/">Hats</a></li>
                                                                                <li class="cat-item cat-item-10"><a href="#/clothing/hoodies/">Hoodies</a></li>
                                                                                <li class="cat-item cat-item-55"><a href="#/clothing/shirts/">Shirts</a></li>
                                                                                <li class="cat-item cat-item-47"><a href="#/clothing/skirts/">Skirts</a></li>
                                                                                <li class="cat-item cat-item-14"><a href="#/clothing/t-shirts/">T-shirts</a></li>
                                                                                <li class="cat-item cat-item-49"><a href="#/clothing/trousers/">Trousers</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="cat-item cat-item-69 cat-parent">
                                                                            <a href="#/electronics/">Electronics</a>
                                                                            <ul class="children">
                                                                                <li class="cat-item cat-item-71 cat-parent"><a href="#/electronics/cameras/">Cameras</a>
                                                                                    <ul class="children">
                                                                                        <li class="cat-item cat-item-114"><a href="#/electronics/cameras/accessories/">Accessories</a></li>
                                                                                        <li class="cat-item cat-item-112"><a href="#/electronics/cameras/lenses/">Lenses</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="cat-item cat-item-99"><a href="#/electronics/dvd-players/">DVD Players</a></li>
                                                                                <li class="cat-item cat-item-72"><a href="#/electronics/headphones/">Headphones</a></li>
                                                                                <li class="cat-item cat-item-91"><a href="#/electronics/mp3-players/">MP3 Players</a></li>
                                                                                <li class="cat-item cat-item-90"><a href="#/electronics/radios/">Radios</a></li>
                                                                                <li class="cat-item cat-item-70"><a href="#/electronics/televisions/">Televisions</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="cat-item cat-item-65 cat-parent">
                                                                            <a href="#/kitchen/">Kitchen</a>
                                                                            <ul class="children">
                                                                                <li class="cat-item cat-item-102"><a href="#/kitchen/blenders/">Blenders</a></li>
                                                                                <li class="cat-item cat-item-103"><a href="#/kitchen/colanders/">Colanders</a></li>
                                                                                <li class="cat-item cat-item-68"><a href="#/kitchen/kettles/">Kettles</a></li>
                                                                                <li class="cat-item cat-item-101"><a href="#/kitchen/knives/">Knives</a></li>
                                                                                <li class="cat-item cat-item-66"><a href="#/kitchen/pots-pans/">Pots &amp; Pans</a></li>
                                                                                <li class="cat-item cat-item-67"><a href="#/kitchen/toasters/">Toasters</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="cat-item cat-item-11 cat-parent"><a href="#/music/">Music</a>
                                                                            <ul class="children">
                                                                                <li class="cat-item cat-item-15"><a href="#/music/albums/">Albums</a></li>
                                                                                <li class="cat-item cat-item-100"><a href="#/music/mp3/">MP3</a></li>
                                                                                <li class="cat-item cat-item-13"><a href="#/music/singles/">Singles</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="cat-item cat-item-12"><a href="#/posters/">Posters</a></li>
                                                                        <li class="cat-item cat-item-31"><a href="#/scuba-gear/">Scuba gear</a></li>
                                                                        <li class="cat-item cat-item-45"><a href="#/sweatshirts/">Sweatshirts</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div id="Authors" class="widget widget_search widget_author p-4d875 border">
                                                                <div id="widgetHeading21" class="widget-head">
                                                                    <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse21" aria-expanded="true" aria-controls="widgetCollapse21">
                                                                        <h3 class="widget-title mb-0 font-weight-medium font-size-3">Author</h3>
                                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                                                        </svg>
                                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <div id="widgetCollapse21" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading21" data-parent="#widgetAccordion">
                                                                    <form class="form-inline my-2 overflow-hidden">
                                                                        <div class="input-group flex-nowrap w-100">
                                                                            <div class="input-group-prepend">
                                                                                <i class="glph-icon flaticon-loupe py-2d75 bg-white-100 border-white-100 text-dark pl-3 pr-0 rounded-0"></i>
                                                                            </div>
                                                                            <input class="form-control bg-white-100 py-2d75 height-4 border-white-100 rounded-0" type="search" placeholder="Search" aria-label="Search">
                                                                        </div>
                                                                        <button class="btn btn-outline-success my-2 my-sm-0 sr-only" type="submit">Search</button>
                                                                    </form>
                                                                    <ul class="product-categories">
                                                                        <li class="cat-item cat-item-9 cat-parent">
                                                                            <a href="#/clothing">A. J. Finn</a>
                                                                        </li>
                                                                        <li class="cat-item cat-item-69 cat-parent">
                                                                            <a href="#/electronics/">Anne Frank</a>
                                                                        </li>
                                                                        <li class="cat-item cat-item-65 cat-parent">
                                                                            <a href="#/kitchen/">Camille Pagán</a>
                                                                        </li>
                                                                        <li class="cat-item cat-item-11 cat-parent"><a href="#/music/">Daniel H. Pink</a>
                                                                        </li>
                                                                        <li class="cat-item cat-item-12"><a href="#/posters/">Danielle Steel</a></li>
                                                                        <li class="cat-item cat-item-31"><a href="#/scuba-gear/">David Quammen</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div id="Language" class="widget p-4d875 border">
                                                                <div id="widgetHeading22" class="widget-head">
                                                                    <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse22" aria-expanded="true" aria-controls="widgetCollapse22">
                                                                        <h3 class="widget-title mb-0 font-weight-medium font-size-3">Language</h3>
                                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                                                        </svg>
                                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <div id="widgetCollapse22" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading22" data-parent="#widgetAccordion">
                                                                    <ul class="product-categories">
                                                                        <li class="custom-control custom-checkbox mb-2 pb-2">
                                                                            <input type="checkbox" class="custom-control-input" id="brandEnglish">
                                                                            <label class="custom-control-label" for="brandEnglish">English</label>
                                                                        </li>
                                                                        <li class="custom-control custom-checkbox mb-2 pb-2">
                                                                            <input type="checkbox" class="custom-control-input" id="brandGerman">
                                                                            <label class="custom-control-label" for="brandGerman">German</label>
                                                                        </li>
                                                                        <li class="custom-control custom-checkbox mb-2 pb-2">
                                                                            <input type="checkbox" class="custom-control-input" id="brandFrench">
                                                                            <label class="custom-control-label" for="brandFrench">French</label>
                                                                        </li>
                                                                        <li class="custom-control custom-checkbox mb-2 pb-2">
                                                                            <input type="checkbox" class="custom-control-input" id="brandSpanish">
                                                                            <label class="custom-control-label" for="brandSpanish">Spanish</label>
                                                                        </li>
                                                                        <li class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="brandTurkish">
                                                                            <label class="custom-control-label" for="brandTurkish">Turkish</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div id="Format" class="widget p-4d875 border">
                                                                <div id="widgetHeading23" class="widget-head">
                                                                    <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse23" aria-expanded="true" aria-controls="widgetCollapse23">
                                                                        <h3 class="widget-title mb-0 font-weight-medium font-size-3">Format</h3>
                                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                                                        </svg>
                                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <div id="widgetCollapse23" class="mt-3 widget-content collapse show" aria-labelledby="widgetHeading23" data-parent="#widgetAccordion">
                                                                    <ul class="product-categories">
                                                                        <li class="cat-item cat-item-9 cat-parent">
                                                                            <a href="#/clothing">Audio CD</a>
                                                                        </li>
                                                                        <li class="cat-item cat-item-69 cat-parent">
                                                                            <a href="#/electronics/">Audio Book</a>
                                                                        </li>
                                                                        <li class="cat-item cat-item-65 cat-parent">
                                                                            <a href="#/kitchen/">Hardcover</a>
                                                                        </li>
                                                                        <li class="cat-item cat-item-11 cat-parent"><a href="#/music/">Kindle Books</a>
                                                                        </li>
                                                                        <li class="cat-item cat-item-12"><a href="#/posters/">Paperback</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div id="woocommerce_price_filter-2" class="widget p-4d875 border woocommerce widget_price_filter">
                                                                <div id="widgetHeadingTwo" class="widget-head">
                                                                    <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapseTwo" aria-expanded="true" aria-controls="widgetCollapseTwo">
                                                                        <h3 class="widget-title mb-0 font-weight-medium font-size-3">Filter by price</h3>
                                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                                                        </svg>
                                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <div id="widgetCollapseTwo" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeadingTwo" data-parent="#widgetAccordion">
                                                                    <form method="get" action="https://themes.woocommerce.com/storefront/shop/">
                                                                        <div class="price_slider_wrapper">
                                                                            <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                                                                                <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 98%;"></span>
                                                                            </div>
                                                                            <div class="price_slider_amount">
                                                                                <input type="text" id="min_price" name="min_price" value="2" data-min="2" placeholder="Min price" style="display: none;">
                                                                                <input type="text" id="max_price" name="max_price" value="1495" data-max="1495" placeholder="Max price" style="display: none;">
                                                                                <button type="submit" class="button d-none">Filter</button>
                                                                                <div class="mx-auto price_label mt-2" style="">
                                                                                    Price: <span class="from">£2</span> — <span class="to">£1,495</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div id="Review" class="widget p-4d875 border">
                                                                <div id="widgetHeading24" class="widget-head">
                                                                    <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse24" aria-expanded="true" aria-controls="widgetCollapse24">
                                                                        <h3 class="widget-title mb-0 font-weight-medium font-size-3">By Review</h3>
                                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                                                        </svg>
                                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <div id="widgetCollapse24" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading24" data-parent="#widgetAccordion">
                                                                    <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="rating5">
                                                                            <label class="custom-control-label" for="rating5">
                                                                                <span class="d-block text-yellow-darker mt-plus-3">
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="fas fa-star font-size-2 "></span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                        <small class="font-size-2 text-gray-600">24</small>
                                                                    </div>
                                                                    <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="rating4">
                                                                            <label class="custom-control-label" for="rating4">
                                                                                <span class="d-block text-yellow-darker mt-plus-3">
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="far fa-star font-size-2 "></span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                        <small class="font-size-2 text-gray-600">15</small>
                                                                    </div>
                                                                    <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="rating3">
                                                                            <label class="custom-control-label" for="rating3">
                                                                                <span class="d-block text-yellow-darker mt-plus-3">
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="far fa-star font-size-2 mr-1"></span>
                                                                                    <span class="far fa-star font-size-2 "></span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                        <small class="font-size-2 text-gray-600">43</small>
                                                                    </div>
                                                                    <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="rating2">
                                                                            <label class="custom-control-label" for="rating2">
                                                                                <span class="d-block text-yellow-darker mt-plus-3">
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="far fa-star font-size-2 mr-1"></span>
                                                                                    <span class="far fa-star font-size-2 mr-1"></span>
                                                                                    <span class="far fa-star font-size-2"></span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                        <small class="font-size-2 text-gray-600">78</small>
                                                                    </div>
                                                                    <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-0">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="rating1">
                                                                            <label class="custom-control-label" for="rating1">
                                                                                <span class="d-block text-yellow-darker mt-plus-3">
                                                                                    <span class="fas fa-star font-size-2 mr-1"></span>
                                                                                    <span class="far fa-star font-size-2 mr-1"></span>
                                                                                    <span class="far fa-star font-size-2 mr-1"></span>
                                                                                    <span class="far fa-star font-size-2 mr-1"></span>
                                                                                    <span class="far fa-star font-size-2"></span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                        <small class="font-size-2 text-gray-600">21</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Featuredbooks" class="widget p-4d875 border">
                                                                <div id="widgetHeading25" class="widget-head">
                                                                    <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse25" aria-expanded="true" aria-controls="widgetCollapse25">
                                                                        <h3 class="widget-title mb-0 font-weight-medium font-size-3">Featured Books</h3>
                                                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                                                        </svg>
                                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <div id="widgetCollapse25" class="mt-5 widget-content collapse show" aria-labelledby="widgetHeading25" data-parent="#widgetAccordion">
                                                                    <div class="mb-5">
                                                                        <div class="media d-md-flex">
                                                                            <a class="d-block" href="../shop/single-product-v6.html">
                                                                                <img class="img-fluid" src="https://placehold.it/60x92" alt="Image-Description">
                                                                            </a>
                                                                            <div class="media-body ml-3 pl-1">
                                                                                <h6 class="font-size-2 text-lh-md font-weight-normal">
                                                                                    <a href="../shop/single-product-v6.html">Lessons Learned from 15 Years as CEO...</a>
                                                                                </h6>
                                                                                <span class="font-weight-medium">$37</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-5">
                                                                        <div class="media d-md-flex">
                                                                            <a class="d-block" href="../shop/single-product-v6.html">
                                                                                <img class="img-fluid" src="https://placehold.it/60x92" alt="Image-Description">
                                                                            </a>
                                                                            <div class="media-body ml-3 pl-1">
                                                                                <h6 class="font-size-2 text-lh-md font-weight-normal">
                                                                                    <a href="../shop/single-product-v6.html">Love, Livestock, and Big Life Lessons...</a>
                                                                                </h6>
                                                                                <span class="font-weight-medium">$21</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="media d-md-flex">
                                                                            <a class="d-block" href="../shop/single-product-v6.html">
                                                                                <img class="img-fluid" src="https://placehold.it/60x92" alt="Image-Description">
                                                                            </a>
                                                                            <div class="media-body ml-3 pl-1">
                                                                                <h6 class="font-size-2 text-lh-md font-weight-normal">
                                                                                    <a href="../shop/single-product-v6.html">Sleeper Cells, Ghost Stories, and Hunt...</a>
                                                                                </h6>
                                                                                <span class="font-weight-medium">$182</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </aside>

                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">

                            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-xl-5 row-cols-wd-6  border-top border-left mb-6">

                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="../shop/single-product-v1.html" class="d-block"><img
                                                    src="https://altabooks.com.br/wp-content/uploads/2021/07/Codigo_Limpo-scaled.jpg"
                                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                    alt="image-description"
                                                    style="max-width: 150px; max-height: 226px;"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                    href="../shop/single-product-v1.html">Informática e TI</a></div>
                                            <h2
                                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="../shop/single-product-v1.html">Código Limpo</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a
                                                    href="../others/authors-single.html" class="text-gray-700">Robert C.
                                                    Martin</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"></span>Disponivel</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="../shop/single-product-v1.html"
                                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Reservar</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i
                                                        class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Trocar"
                                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="../shop/single-product-v1.html" title="Baixar"
                                                class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-down-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </ul>

                        </div>
                        <div class="tab-pane fade" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">

                            <ul class="products list-unstyled mb-6">
                                <li class="product product__list">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                                            <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                                                <a href="../shop/single-product-v7.html" class="d-block"><img src="https://placehold.it/120x180" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v7.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a href="../shop/single-product-v7.html" tabindex="0">The Overdue Life of Amy Byler</a></h2>
                                                <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="col-md-auto d-flex align-items-center">
                                                <a href="../shop/single-product-v7.html" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product product__list">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                                            <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                                                <a href="../shop/single-product-v7.html" class="d-block"><img src="https://placehold.it/120x180" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v7.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a href="../shop/single-product-v7.html" tabindex="0">All You Can Ever Know: A Memoir</a></h2>
                                                <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="col-md-auto d-flex align-items-center">
                                                <a href="../shop/single-product-v7.html" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product product__list">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                                            <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                                                <a href="../shop/single-product-v7.html" class="d-block"><img src="https://placehold.it/120x180" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v7.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a href="../shop/single-product-v7.html" tabindex="0">The Cinderella Reversal</a></h2>
                                                <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="col-md-auto d-flex align-items-center">
                                                <a href="../shop/single-product-v7.html" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product product__list">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                                            <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                                                <a href="../shop/single-product-v7.html" class="d-block"><img src="https://placehold.it/120x180" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v7.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a href="../shop/single-product-v7.html" tabindex="0">Scot Under the Covers: The Wild Wicked</a></h2>
                                                <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="col-md-auto d-flex align-items-center">
                                                <a href="../shop/single-product-v7.html" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product product__list">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                                            <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                                                <a href="../shop/single-product-v7.html" class="d-block"><img src="https://placehold.it/120x180" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v7.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a href="../shop/single-product-v7.html" tabindex="0">Winter Garden</a></h2>
                                                <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="col-md-auto d-flex align-items-center">
                                                <a href="../shop/single-product-v7.html" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product product__list">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                                            <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                                                <a href="../shop/single-product-v7.html" class="d-block"><img src="https://placehold.it/120x180" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                            </div>
                                            <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v7.html">Paperback</a></div>
                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a href="../shop/single-product-v7.html" tabindex="0">Call Me By Your Name</a></h2>
                                                <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                                <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="col-md-auto d-flex align-items-center">
                                                <a href="../shop/single-product-v7.html" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="ADD TO CART">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v7.html" class="h-p-bg btn btn-outline-primary border-0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination__custom justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">1</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">2</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item active" aria-current="page"><a class="page-link" href="#">3</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">4</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">5</a></li>
                            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


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