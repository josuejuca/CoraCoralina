<header id="site-header" class="site-header__v1 u-header">
    <!-- Parte superior -->
    <div class="topbar border-bottom d-none d-md-block">
        <div class="container-fluid px-2 px-md-5 px-xl-8d75">
            <div class="topbar__nav d-md-flex justify-content-between align-items-center">
                <ul class="topbar__nav--left nav ml-md-n3">
                    <li class="nav-item"><a href="../faq/index.php" class="nav-link link-black-100"><i class="glph-icon flaticon-question mr-2"></i>Dúvidas?</a></li>
                </ul>
                <ul class="topbar__nav--right nav mr-md-n3">
                    <!-- Esse codigo valida o usuario (Icone de user) -->
                    <?php
                    if (isset($_SESSION["email"])) {
                        // Usuário está logado, exibe o link para a página de gerenciamento de conta
                        echo '<li class="nav-item">';
                        echo '<a href="../../php/conta/index.php" class="nav-link link-black-100">';
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
                </ul>
            </div>
        </div>
    </div>
    <!-- Parte do central -->
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
                    <a href="../../index.php" class="d-block mb-1">
                        <!--  width="170px" height="30px" -->
                        <img src="../../assets/img/logo.png" alt="[]" style="max-width: 210px; ">
                    </a>
                </div>
                <div class="site-navigation mr-auto d-none d-xl-block">
                    <ul class="nav">

                        <li class="nav-item"><a href="../../index.php" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium   ">Página
                                Inicial</a>
                        </li>                       
                        <li class="nav-item"><a href="../livros/index.php" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium ">Biblioteca
                                Virtual</a>
                        </li>
                        <li class="nav-item"><a href="../contato/index.php" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium    ">Contato</a>
                        </li>

                    </ul>
                </div>
                <!-- Icone de usuario mobile  -->
                <ul class="d-md-none nav mr-md-n3 ml-auto">
                    <!-- Esse codigo valida o usuario (Icone de user) -->
                    <?php
                    if (isset($_SESSION["email"])) {
                        // Usuário está logado, exibe o link para a página de gerenciamento de conta
                        echo '<li class="nav-item">';
                        echo '';
                        echo '<a href="../../php/conta/index.php" id="sidebarNavToggler9"  class="nav-link link-black-100">';
                        echo '<i class="glph-icon flaticon-user"></i>';
                        echo '</a>';
                        echo '</li>';
                    } else {
                        // Usuário não está logado, mantém o código existente
                        echo '<li class="nav-item">';
                        echo '<a id="sidebarNavToggler" id="sidebarNavToggler9" href="javascript:;" role="button" class="nav-link link-black-100" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-overlay=\'{ "className": "u-sidebar-bg-overlay", "background": "rgba(0, 0, 0, .7)", "animationSpeed": 500 }\' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">';
                        echo '<i class="glph-icon flaticon-user"></i>';
                        echo '</a>';
                        echo '</li>';
                    }
                    ?>
                </ul>
                <!-- Barra de pesquisa  -->
                <div class="site-search ml-xl-0 ml-md-auto w-r-100 my-2 my-xl-0">
                    <form class="form-inline" 
                    action="../../controller/buscar_livro.php"
                    method="GET">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <i class="glph-icon flaticon-loupe input-group-text py-2d75 bg-white-100 border-white-100"></i>
                            </div>
                            <input class="form-control bg-white-100 min-width-380 py-2d75 height-4 border-white-100" type="search" name="livro" placeholder="Buscar livro" aria-label="Search">
                        </div>
                        <button class="btn btn-outline-success my-2 my-sm-0 sr-only" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

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

                        <!-- Login -->
                        <form action="../../controller/loginController.php" method="post" id="formlogin">
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
                                            <input type="password" class="form-control rounded-0 height-4 px-4" name="senha" id="signinPassword" placeholder="" aria-label="" aria-describedby="signinPasswordLabel" required>
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


                                    </div>

                                    <div class="mb-4d75">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Entrar</button>
                                    </div>
                                    <div class="mb-2">
                                        <a href="../registrar/index.php" class=" btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium"> Criar conta </a>
                                    </div>
                                    <a href="../conta/recuperar.php" class> Esqueceu a senha? </a>

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
                                        <a href="../biblioteca/../biblioteca/aventura.php">Ação e Aventura</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/didaticos.php">Didáticos e Escolares</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/literatura-infantil.php">Infantis</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/romance.php">Romance</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/cursos.php">Cursos</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/quadrinhos.php">Gibis</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/religiao.php">Religião</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/culinaria.php">Culinária</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/literatura-de-cordel.php">Literatura de Cordel</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/literatura-brasileira.php">Literatura Brasileira</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/literatura-estrangeira.php">Literatura Estrangeira</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/ciencias-humanas-e-sociais.php">Ciências Humanas e Sociais</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/ciencias-exatas.php">Exatas e Tecnológicas</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="../biblioteca/biologicas-e-saude.php">Ciências Biológicas</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <?php
                        if (isset($_SESSION["email"])) {
                            // Usuário está logado, exibe o link para a página de gerenciamento de conta
                            echo '<div class="px-4 px-md-5 pt-5 pb-4 border-bottom">';
                            echo '<h2 class="font-size-3 mb-3">CONFIGURAÇÃO </h2>';
                            echo '<ul class="list-group list-group-flush list-group-borderless">';
                            echo '  <li class="list-group-item px-0 py-2 border-0"><a href="../conta/index.php" class="h-primary">Gerenciar Conta</a></li>';
                            echo '  <li class="list-group-item px-0 py-2 border-0"><a href="../faq/index.php" class="h-primary">Ajuda</a></li>';
                            echo '  <li class="list-group-item px-0 py-2 border-0"><a href="../../controller/logoffController.php" class="h-primary">Sair da conta</a></li>';
                            echo '</ul>';
                            echo '</div>';
                        } else {
                            // Usuário não está logado, mantém o código existente                        
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>