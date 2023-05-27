<header id="site-header" class="site-header__v1 u-header">
        <div class="topbar border-bottom d-none d-md-block">
            <div class="container-fluid px-2 px-md-5 px-xl-8d75">
                <div class="topbar__nav d-md-flex justify-content-between align-items-center">
                    <ul class="topbar__nav--left nav ml-md-n3">
                        <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-question mr-2"></i>Dúvidas?</a></li>
                    </ul>
                    <ul class="topbar__nav--right nav mr-md-n3">                        
                        
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