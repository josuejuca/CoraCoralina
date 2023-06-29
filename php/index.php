<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cora Coralina </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Importando as bibliotecas de estilo -->
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/5328/5328095.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/vendor/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- arquivo main -->
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>

<body>

    <?php
    session_start();
    // Listar Todos os  USUÁRIOS
    require_once 'dao/usuarioDAO.php';
    $usuarioDAO = new UsuarioDAO();
    $ultimosLivros = $usuarioDAO->selecionaUltimosLivros(5);
    $ultimosLivros_Acao = $usuarioDAO->selecionaUltimosLivrosPorGereno('Ação e Aventura', 5);
    $ultimosLivros_Gibis = $usuarioDAO->selecionaUltimosLivrosPorGereno('Gibis', 5);
    $ale = $usuarioDAO->selecionaLivroAleatorio();
    ?>

    <header id="site-header">
        <div class="masthead">
            <div class="bg-white">
                <div class="container py-3">
                    <div class="d-flex align-items-center position-relative flex-wrap">
                        <div class="site-branding pr-md-7 mx-auto mx-md-0">
                            <a href="index.php" class="d-block mb-1">
                                <img src="../../assets/img/logo.png" alt="[]" style="max-width: 210px; ">
                            </a>
                        </div>
                        <div class="site-navigation mr-auto d-none d-xl-block">
                            <ul class="nav">
                                <li class="nav-item"><a href="index.php" class="nav-link link-black-100 mx-3 px-0 py-3 font-weight-medium">Página
                                        Inicial</a>
                                </li>
                                <li class="nav-item"><a href="php/livros/index.php" class="nav-link link-black-100 mx-3 px-0 py-3 font-weight-medium">Biblioteca
                                        Virtual</a>
                                </li>
                                <li class="nav-item"><a href="php/contato/index.php" class="nav-link link-black-100 mx-3 px-0 py-3 font-weight-medium">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <div class="container">
                    <div class="d-md-flex position-relative">
                        <div class="offcanvas-toggler align-self-center mr-md-5 d-xl-none d-flex d-md-block align-items-center">
                            <a id="sidebarNavToggler2" href="javascript:;" role="button" class="cat-menu text-dark" aria-controls="sidebarContent2" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2" data-unfold-type="css-animation" data-unfold-overlay='{
                                    "className": "u-sidebar-bg-overlay",
                                    "background": "rgba(0, 0, 0, .7)",
                                    "animationSpeed": 100
                                }' data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="100">
                                <svg width="20px" height="18px">
                                    <path fill-rule="evenodd" fill="rgb(0, 0, 0)" d="M-0.000,-0.000 L20.000,-0.000 L20.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z" />
                                    <path fill-rule="evenodd" fill="rgb(0, 0, 0)" d="M-0.000,8.000 L15.000,8.000 L15.000,10.000 L-0.000,10.000 L-0.000,8.000 Z" />
                                    <path fill-rule="evenodd" fill="rgb(0, 0, 0)" d="M-0.000,16.000 L20.000,16.000 L20.000,18.000 L-0.000,18.000 L-0.000,16.000 Z" />
                                </svg>
                                <span class="ml-3">Principais Categorias </span>
                            </a>
                            <ul class="nav d-md-none ml-auto">
                                <li class="nav-item">

                                    <a id="sidebarNavToggler9" href="javascript:;" role="button" class="px-2 nav-link h-primary" aria-controls="sidebarContent9" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent9" data-unfold-type="css-animation" data-unfold-overlay='{
                                            "className": "u-sidebar-bg-overlay",
                                            "background": "rgba(0, 0, 0, .7)",
                                            "animationSpeed": 500
                                        }' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                        <i class="glph-icon flaticon-user"></i>
                                    </a>

                                </li>
                            </ul>
                        </div>

                        <div id="basicsAccordion" class="mr-5 d-none d-xl-block">

                            <div class="position-relative">
                                <div class="bg-dark py-3 px-5 card-collapse" id="basicsHeadingOne">
                                    <button type="button" class="btn btn-link btn-block p-0 d-flex align-items-center card-btn collapsed" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                        <svg width="20px" height="18px">
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M-0.000,-0.000 L20.000,-0.000 L20.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M-0.000,8.000 L15.000,8.000 L15.000,10.000 L-0.000,10.000 L-0.000,8.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M-0.000,16.000 L20.000,16.000 L20.000,18.000 L-0.000,18.000 L-0.000,16.000 Z" />
                                        </svg>
                                        <span class="ml-3 text-white">Principais Categorias</span>
                                        <i class="fas fa-chevron-down ml-5 text-white font-size-2"></i>
                                    </button>
                                </div>
                                <div id="basicsCollapseOne" class="z-index-2 bg-white position-absolute right-0 left-0 border collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled vertical-menu position-relative mb-0">
                                            <!-- Categorias -->
                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Ação e Aventura</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Didáticos e Escolares</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Infantis</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Romance</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Cursos</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Gibis</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Religião</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Culinária</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Literatura de Cordel</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Literatura Brasileira</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Literatura Estrangeira</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Ciências Humanas e Sociais</div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Exatas e Tecnológicas</div>
                                                </a>
                                            </li>


                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Ciências Biológicas</div>
                                                </a>
                                            </li>


                                            <li>
                                                <a href="" class="text-dark dropdown-nav-link dropdown-toggle d-flex align-items-center border-bottom">
                                                    <div class="mr-auto">Outros</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="site-search ml-xl-0 ml-md-auto w-r-100 flex-grow-1 mr-md-5 mt-2 mt-md-0 py-2 py-md-0">
                            <form class="form-inline my-2 my-xl-0" action="../../controller/buscar_livro.php" method="GET">
                                <div class="input-group w-100">
                                    <div class="input-group-prepend d-none d-xl-block z-index-2">
                                        <select class="d-none d-lg-block custom-select pr-7 pl-4 rounded-0 height-5 shadow-none text-dark" id="inputGroupSelect01">
                                            <option selected>Buscar Livro</option>
                                            <!-- <option value="1">Buscar por Autor</option>
                                            <option value="2">Buscar por Genero</option> -->

                                        </select>
                                    </div>
                                    <input type="text" name="livro" class="form-control border-right-0 px-3" placeholder="Buscar livro" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append border-left">
                                        <button class="btn btn-dark px-3 rounded-0 py-2" type="submit"><i class="mx-1 glph-icon flaticon-loupe "></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <ul class="d-none d-md-flex nav align-self-center">
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
                                            <a href="/php/registrar/index.php" class=" btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium">
                                                Criar conta </a>
                                        </div>
                                        <a href="./php/conta/recuperar.php" class> Esqueceu a senha? </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </aside>


    
    <section class="space-bottom-3">
        <div class="container">
            <header class="mb-5 d-md-flex justify-content-between align-items-center">
                <h2 class="font-size-7 mb-3 mb-md-0">Últimos Livros</h2>
                <a href="php/livros/index.php" class="h-primary d-block">Ver tudo <i class="glyph-icon flaticon-next"></i></a>
            </header>
            <div class="js-slick-carousel products no-gutters border-top border-left border-right" data-pagi-classes="d-xl-none text-center position-absolute right-0 left-0 u-slick__pagination mt-4 mb-0" data-arrows-classes="d-none d-xl-block u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-slides-show="5" data-responsive='[{
                       "breakpoint": 1500,
                       "settings": {
                         "slidesToShow": 4
                       }
                    },{
                       "breakpoint": 1199,
                       "settings": {
                         "slidesToShow": 3
                       }
                    },{
                       "breakpoint": 992,
                       "settings": {
                         "slidesToShow": 2
                       }
                    }, {
                       "breakpoint": 768,
                       "settings": {
                         "slidesToShow": 1
                       }
                    }, {
                       "breakpoint": 554,
                       "settings": {
                         "slidesToShow": 1
                       }
                    }]'>

                <?php
                // Verificar se houve resultados
                if (!empty($ultimosLivros)) {
                    // Exibir os dados de cada livro
                    foreach ($ultimosLivros as $livro) {
                        // echo "Título: " . $livro["livro_nome"] . "<br>";
                        // echo "Autor: " . $livro["autor"] . "<br>";
                        // echo "Data de Cadastro: " . $livro["data_cadastro"] . "<br>";
                        // echo "<br>";

                        echo '<div class="product">';
                        echo '<div class="product__inner overflow-hidden p-3 p-md-4d875">';
                        echo '<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">';
                        echo '<div class="woocommerce-loop-product__thumbnail">';
                        echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="d-block"><img src="' . $livro["capa"] . '" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" style="max-width: 150px; max-height: 226px;"></a>';
                        echo '</div>';
                        echo '<div class="woocommerce-loop-product__body product__body pt-3 bg-white">';
                        echo '<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["genero"] . '</a></div>';
                        echo '<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">';
                        echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["livro_nome"] . '</a>';
                        echo '</h2>';
                        echo '<div class="font-size-2  mb-1 text-truncate"><a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-gray-700">' . $livro["autor"] . '</a></div>';
                        echo '<div class="price d-flex align-items-center font-weight-medium font-size-3">';
                        if ($livro["quantidade"] > 0) {
                            if ($livro["midia"] == 2) {
                                echo '<span class="" style="color:red;"> Indisponível</span>';
                            } elseif ($livro["midia"] == 1 || $livro["midia"] == 3) {
                                echo '<span class="" style="color:green;"> Disponível</span>';
                            }
                        } else {
                            echo '<span class="woocommerce-Price-amount amount" style="color:red;">
                                <span class="woocommerce-Price-currencySymbol">Indisponível</span>
                            </span>';
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="product__hover d-flex align-items-center">';
                        // Verifica se a variável de sessão "email" está definida
                        if (isset($_SESSION["email"])) {
                            // Verifica se o perfil do usuário é de administrador
                            if ($_SESSION["perfil_idperfil"] == 1) {
                                // Usuário está logado e tem permissão de administrador
                                echo '<a href="php/adm/novoemprestimo.php?isbn=' . $livro["isbn"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                echo '<span class="product__add-to-cart">Fazer Emprestimo</span>';
                                echo '<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>';
                                echo '</a>';
                            } else {
                                // Usuário está logado, mas não tem permissão de administrador
                                echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                echo '<span class="product__add-to-cart">Ver Livro</span>';
                                echo '<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>';
                                echo '</a>';
                            }
                        } else {
                            // Usuário não está logado, mantém o código existente
                            echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                            echo '<span class="product__add-to-cart">Ver Livro</span>';
                            echo '<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>';
                            echo '</a>';
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Nenhum livro encontrado.";
                }
                ?>
                <!-- f -->
            </div>
        </div>
    </section>
    <!-- teste -->
    <div class="bg-gray-200 py-5 py-lg-8">
        <div class="container my-lg-1">
            <div class="row">
                <div class="col-wd-8">
                    <div class="bg-white mb-6 mb-wd-0 h-100">
                        <div class="px-3 px-lg-8 py-8 py-lg-5 space-top-xl-4">
                            <div class="js-slick-carousel u-slick slick-initialized slick-slider slick-dotted" data-pagi-classes="text-center u-slick__pagination u-slick__pagination mb-0 mt-3 mt-lg-5" data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow--v2 u-slick__arrow-centered--y" data-arrow-left-classes="flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n5 ml-xl-n7" data-arrow-right-classes="flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n5 mr-xl-n7">
                                <div class="js-prev d-none d-lg-block u-slick__arrow u-slick__arrow--v2 u-slick__arrow-centered--y flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n5 ml-xl-n7 slick-arrow" aria-disabled="false" style=""></div>
                                <div class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 3248px; transform: translate3d(-812px, 0px, 0px);">
                                        <div class="pt-xl-2 slick-slide" data-slick-index="0" aria-hidden="true" style="width: 812px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
                                            <div class="row mx-0 mx-md-3">
                                                <div class="col-lg-8 col-wd-6">
                                                    <div class="media d-block d-lg-flex">
                                                        <div class="media-body align-self-center mb-4 mb-lg-0">
                                                            <h6 class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200" style="animation-delay: 200ms; opacity: 1;">THIS WEEKS FEATURED BOOKS</h6>
                                                            <h2 class="font-size-12 mb-3 pb-1" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300" style="animation-delay: 300ms; opacity: 1;">
                                                                <span class="hero__title-line-1 font-weight-regular d-block text-primary">Best Ever Book </span>
                                                                <span class="hero__title-line-2 font-weight-bold d-block">Lists</span>
                                                            </h2>
                                                            <a href="../shop/v7.html" class="banner_btn btn btn-wide bg-dark rounded-0 text-white" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400" tabindex="-1" style="animation-delay: 400ms; opacity: 1;">Shopping Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="400" style="animation-delay: 400ms; opacity: 1;">
                                                    <img src="../../assets/img/400x360/img2.png" class="img-fluid" alt="image-description">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-xl-2 slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 812px; height: auto;" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
                                            <div class="row mx-0 mx-md-3">
                                                <div class="col-lg-8 col-wd-6">
                                                    <div class="media d-block d-lg-flex">
                                                        <div class="media-body align-self-center mb-4 mb-lg-0">
                                                            <h6 class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2 animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200" style="opacity: 1; animation-delay: 200ms;">THIS WEEKS FEATURED BOOKS</h6>
                                                            <h2 class="font-size-12 mb-3 pb-1 animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300" style="opacity: 1; animation-delay: 300ms;">
                                                                <span class="hero__title-line-1 font-weight-regular d-block text-primary">Best Ever Book </span>
                                                                <span class="hero__title-line-2 font-weight-bold d-block">Lists</span>
                                                            </h2>
                                                            <a href="../shop/v7.html" class="banner_btn btn btn-wide bg-dark rounded-0 text-white animated fadeInLeft" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400" tabindex="0" style="opacity: 1; animation-delay: 400ms;">Shopping Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-wd-6 animated fadeInRight" data-scs-animation-in="fadeInRight" data-scs-animation-delay="400" style="opacity: 1; animation-delay: 400ms;">
                                                    <img src="../../assets/img/400x360/img2.png" class="img-fluid" alt="image-description">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-xl-2 slick-slide" data-slick-index="2" aria-hidden="true" style="width: 812px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02">
                                            <div class="row mx-0 mx-md-3">
                                                <div class="col-lg-8 col-wd-6">
                                                    <div class="media d-block d-lg-flex">
                                                        <div class="media-body align-self-center mb-4 mb-lg-0">
                                                            <h6 class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200" style="opacity: 1; animation-delay: 200ms;">THIS WEEKS FEATURED BOOKS</h6>
                                                            <h2 class="font-size-12 mb-3 pb-1" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300" style="opacity: 1; animation-delay: 300ms;">
                                                                <span class="hero__title-line-1 font-weight-regular d-block text-primary">Best Ever Book </span>
                                                                <span class="hero__title-line-2 font-weight-bold d-block">Lists</span>
                                                            </h2>
                                                            <a href="../shop/v7.html" class="banner_btn btn btn-wide bg-dark rounded-0 text-white" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400" tabindex="-1" style="opacity: 1; animation-delay: 400ms;">Shopping Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="400" style="opacity: 1; animation-delay: 400ms;">
                                                    <img src="../../assets/img/400x360/img2.png" class="img-fluid" alt="image-description">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-xl-2 slick-slide" data-slick-index="3" aria-hidden="true" style="width: 812px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03">
                                            <div class="row mx-0 mx-md-3">
                                                <div class="col-lg-8 col-wd-6">
                                                    <div class="media d-block d-lg-flex">
                                                        <div class="media-body align-self-center mb-4 mb-lg-0">
                                                            <h6 class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200" style="opacity: 1; animation-delay: 200ms;">THIS WEEKS FEATURED BOOKS</h6>
                                                            <h2 class="font-size-12 mb-3 pb-1" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300" style="opacity: 1; animation-delay: 300ms;">
                                                                <span class="hero__title-line-1 font-weight-regular d-block text-primary">Best Ever Book </span>
                                                                <span class="hero__title-line-2 font-weight-bold d-block">Lists</span>
                                                            </h2>
                                                            <a href="../shop/v7.html" class="banner_btn btn btn-wide bg-dark rounded-0 text-white" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400" tabindex="-1" style="opacity: 1; animation-delay: 400ms;">Shopping Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="400" style="opacity: 1; animation-delay: 400ms;">
                                                    <img src="../../assets/img/400x360/img2.png" class="img-fluid" alt="image-description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="js-next d-none d-lg-block u-slick__arrow u-slick__arrow--v2 u-slick__arrow-centered--y flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n5 mr-xl-n7 slick-arrow" style="" aria-disabled="false"></div>
                                <ul class="js-pagination text-center u-slick__pagination mb-0 mt-3 mt-lg-5" style="" role="tablist">
                                    <li class="" role="presentation"><span></span></li>
                                    <li role="presentation" class="slick-active-right slick-active slick-current"><span></span></li>
                                    <li role="presentation" class=""><span></span></li>
                                    <li role="presentation" class=""><span></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-wd-4 d-none d-wd-block">
                    <div class="pt-5 pt-lg-0  h-100">
                        <div class="bg-white p-6 h-100">
                            <h6 class="font-size-7">Girl, <span class="text-primary font-weight-normal">Wash Your Face</span></h6>
                            <div class="mb-2">
                                <span class="font-size-3 text-secondary-gray-700">Rachel Hollis</span>
                            </div>
                            <div class="price d-flex align-items-center font-weight-medium font-size-3 mb-2">
                                <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount font-size-3 font-weight-medium text-dark"><span class="woocommerce-Price-currencySymbol">$</span>15</span></ins>
                                <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount font-size-1 text-primary-home-v3 opacity-md"><span class="woocommerce-Price-currencySymbol">$</span>78,96</span></del>
                            </div>
                            <div class="mb-3 pb-1">
                                <span class="d-inline-block product__add-to-cart">ADD TO CART</span>
                            </div>
                            <div>
                                <img src="../../assets/img/356x274/img2.png" class="img-fluid mx-auto d-block mx-auto" alt="image-description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fim teste -->

    <section class="space-bottom-2 space-bottom-xl-3">
        <div class="bg-gray-200">
            <div class="space-2 space-xl-3">
                <div class="container">
                    <header class="d-md-flex justify-content-between align-items-center mb-5">
                        <h2 class="font-size-7 mb-4 mb-lg-0">Categorias</h2>
                        <a href="php/livros/index.php" class="d-flex">Todos os livros<span class="flaticon-next font-size-3 ml-2"></span></a>
                    </header>
                    <ul class="nav justify-content-between flex-nowrap pb-2 py-md-3 js-slick-carousel u-slick slick-initialized slick-slider slick-dotted" data-pagi-classes="d-xl-none text-center u-slick__pagination mb-n7 position-absolute right-0 left-0 bottom-0" data-arrows-classes="d-none d-xl-block u-slick__arrow u-slick__arrow-centered--y bg-transparent border-0 text-dark" data-arrow-left-classes="fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n5" data-arrow-right-classes="fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n5" data-slides-show="7" data-responsive="[{
                        &quot;breakpoint&quot;: 1500,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 6
                           }
                        }, {
                           &quot;breakpoint&quot;: 992,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 4
                           }
                        }, {
                           &quot;breakpoint&quot;: 768,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 3
                           }
                        }, {
                           &quot;breakpoint&quot;: 554,
                           &quot;settings&quot;: {
                             &quot;slidesToShow&quot;: 1
                           }
                        }]">
                        <div class="js-prev d-none d-xl-block u-slick__arrow u-slick__arrow-centered--y bg-transparent border-0 text-dark fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n5 slick-arrow" aria-disabled="false" style=""></div>
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 2000px; transform: translate3d(-400px, 0px, 0px);">
                                <li class="nav-item slick-slide" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/aventura.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-primary-indigo">
                                                <i class="glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Ação e Aventura</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/didaticos.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-tangerine">
                                                <i class="glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Didáticos e Escolares</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide slick-current slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/aventura.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-chili">
                                                <i class="glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Ação e Aventura</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/romance.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-carolina">
                                                <i class="glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Romance</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item slick-slide slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/cursos.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-tangerine">
                                                <i class="icon glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Cursos</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/quadrinhos.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-chili">
                                                <i class="icon glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Gibis</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/literatura-estrangeira.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-chili">
                                                <i class="glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Literatura Estrangeira</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/literatura-brasileira.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-chili">
                                                <i class="icon glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Literatura Brasileira</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/outros.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-chili">
                                                <i class="icon glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Outros</span>
                                        </div>
                                    </a>
                                </li>
                            </div>
                        </div>

                        <div class="js-next d-none d-xl-block u-slick__arrow u-slick__arrow-centered--y bg-transparent border-0 text-dark fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n5 slick-arrow" style="" aria-disabled="false"></div>
                        <ul class="js-pagination d-xl-none text-center u-slick__pagination mb-n7 position-absolute right-0 left-0 bottom-0" style="display: block;" role="tablist">
                            <li class="" role="presentation"><span></span></li>
                            <li role="presentation" class=""><span></span></li>
                            <li role="presentation" class="slick-active-right slick-active slick-current"><span></span></li>
                            <li role="presentation" class=""><span></span></li>
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="space-bottom-2 space-bottom-xl-3 space-top-1 space-top-xl-0">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
                        <div class="col">
                            <div class="mb-5 mb-xl-0 position-relative">
                                <div class="bg-red-1 height-md-250">
                                    <div class="p-5 pl-lg-6 pr-lg-5 pt-lg-5 pb-lg-5">
                                        <div class="position-relative z-index-2">
                                            <h2 class="font-size-26 mt-lg-1 text-white text-lh-md">
                                                <span class="hero__title-line-1 font-weight-bold d-block">Livros de</span>
                                                <span class="hero__title-line-2 font-weight-normal d-block">Ação</span>
                                            </h2>
                                            <a class="h6 font-weight-medium text-white" href="php/biblioteca/aventura.php">Ver Livros</a>
                                        </div>
                                        <div class="d-flex d-md-block justify-content-end position-md-absolute bottom-md-30 right-md-30">
                                            <!-- <img src="" class="img-fluid attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description"> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-5 mb-lg-0 position-relative">
                                <div class="bg-blue height-md-250">
                                    <div class="p-5 pl-lg-6 pr-lg-5 pt-lg-5 pb-lg-5">
                                        <div class="position-relative z-index-2">
                                            <h2 class="font-size-26 mt-lg-1 text-white text-lh-md">
                                                <span class="hero__title-line-1 font-weight-bold d-block">Ultimos</span>
                                                <span class="hero__title-line-2 font-weight-normal d-block">Livros</span>
                                            </h2>
                                            <a class="h6 font-weight-medium text-white" href="php/livros/index.php">Ver Livros</a>
                                        </div>
                                        <div class="d-flex d-md-block justify-content-end position-md-absolute right-md-30 bottom-md-30">
                                            <!-- <img src="" class="img-fluid attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description"> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="position-relative">
                                <div class="bg-yellow-1 height-md-250">
                                    <div class="p-5 pl-lg-6 pr-lg-5 pt-lg-5 pb-lg-5">
                                        <div class="position-relative z-index-2">
                                            <h2 class="font-size-26 mt-lg-1 text-white text-lh-md">
                                                <span class="hero__title-line-1 font-weight-bold d-block">Livros </span>
                                                <span class="hero__title-line-2 font-weight-normal d-block">Infantis</span>
                                            </h2>
                                            <a class="h6 font-weight-medium text-white" href="php/biblioteca/literatura-infantil.php">Ver Livros</a>
                                        </div>
                                        <div class="d-flex d-md-block justify-content-end position-md-absolute bottom-0 mb-2 right-md-30">
                                            <!-- <img src="" class="img-fluid attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description"> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <section class="space-bottom-3">
        <div class="container">
            <header class="mb-5 d-md-flex justify-content-between align-items-center">
                <h2 class="font-size-7 mb-3 mb-md-0">Últimos Livros</h2>
                <a href="php/livros/index.php" class="h-primary d-block">Ver tudo <i class="glyph-icon flaticon-next"></i></a>
            </header>
            <div class="js-slick-carousel products no-gutters border-top border-left border-right" data-pagi-classes="d-xl-none text-center position-absolute right-0 left-0 u-slick__pagination mt-4 mb-0" data-arrows-classes="d-none d-xl-block u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-slides-show="5" data-responsive='[{
                       "breakpoint": 1500,
                       "settings": {
                         "slidesToShow": 4
                       }
                    },{
                       "breakpoint": 1199,
                       "settings": {
                         "slidesToShow": 3
                       }
                    },{
                       "breakpoint": 992,
                       "settings": {
                         "slidesToShow": 2
                       }
                    }, {
                       "breakpoint": 768,
                       "settings": {
                         "slidesToShow": 1
                       }
                    }, {
                       "breakpoint": 554,
                       "settings": {
                         "slidesToShow": 1
                       }
                    }]'>

                <?php
                // Verificar se houve resultados
                if (!empty($ultimosLivros)) {
                    // Exibir os dados de cada livro
                    foreach ($ultimosLivros as $livro) {
                        // echo "Título: " . $livro["livro_nome"] . "<br>";
                        // echo "Autor: " . $livro["autor"] . "<br>";
                        // echo "Data de Cadastro: " . $livro["data_cadastro"] . "<br>";
                        // echo "<br>";

                        echo '<div class="product">';
                        echo '<div class="product__inner overflow-hidden p-3 p-md-4d875">';
                        echo '<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">';
                        echo '<div class="woocommerce-loop-product__thumbnail">';
                        echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="d-block"><img src="' . $livro["capa"] . '" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" style="max-width: 150px; max-height: 226px;"></a>';
                        echo '</div>';
                        echo '<div class="woocommerce-loop-product__body product__body pt-3 bg-white">';
                        echo '<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["genero"] . '</a></div>';
                        echo '<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">';
                        echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["livro_nome"] . '</a>';
                        echo '</h2>';
                        echo '<div class="font-size-2  mb-1 text-truncate"><a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-gray-700">' . $livro["autor"] . '</a></div>';
                        echo '<div class="price d-flex align-items-center font-weight-medium font-size-3">';
                        if ($livro["quantidade"] > 0) {
                            if ($livro["midia"] == 2) {
                                echo '<span class="" style="color:red;"> Indisponível</span>';
                            } elseif ($livro["midia"] == 1 || $livro["midia"] == 3) {
                                echo '<span class="" style="color:green;"> Disponível</span>';
                            }
                        } else {
                            echo '<span class="woocommerce-Price-amount amount" style="color:red;">
                                <span class="woocommerce-Price-currencySymbol">Indisponível</span>
                            </span>';
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="product__hover d-flex align-items-center">';
                        // Verifica se a variável de sessão "email" está definida
                        if (isset($_SESSION["email"])) {
                            // Verifica se o perfil do usuário é de administrador
                            if ($_SESSION["perfil_idperfil"] == 1) {
                                // Usuário está logado e tem permissão de administrador
                                echo '<a href="php/adm/novoemprestimo.php?isbn=' . $livro["isbn"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                echo '<span class="product__add-to-cart">Fazer Emprestimo</span>';
                                echo '<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>';
                                echo '</a>';
                            } else {
                                // Usuário está logado, mas não tem permissão de administrador
                                echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                echo '<span class="product__add-to-cart">Ver Livro</span>';
                                echo '<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>';
                                echo '</a>';
                            }
                        } else {
                            // Usuário não está logado, mantém o código existente
                            echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                            echo '<span class="product__add-to-cart">Ver Livro</span>';
                            echo '<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>';
                            echo '</a>';
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Nenhum livro encontrado.";
                }
                ?>
                <!-- f -->

                <section class="space-bottom-3 banner-with-product-carousel">
<div class="container">
<h6 class="font-size-7 font-weight-medium mb-5">Most Popular For Food and Drink Books</h6>
<div class="row">
<div class="col-lg-5 col-wd-4">
<div class="mb-8 mb-lg-0">
<div class="bg-img-hero img-fluid height-373" style="background-image: url(../../assets/img/1076x761/img1.jpg);">
<div class="p-5 pl-lg-6 pr-lg-5 pt-lg-5 pb-lg-5">
<div class="mb-4 mb-lg-2">
<h2 class="font-size-26 mb-2 pb-1 mt-lg-1">
<span class="hero__title-line-1 font-weight-bold d-block mb-2">Discount On</span>
<span class="hero__title-line-2 font-weight-normal d-block">Food and Drinks Books</span>
</h2>
<a class="h6 font-weight-medium link-black-100" href="../shop/v4.html">Shop Now</a>
</div>
<div class="d-flex justify-content-end mt-n5">
<img src="../../assets/img/250x225/img1.png" class="img-fluid attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-7 col-wd-8">
<div class="position-relative pt-4 pt-lg-0">
<div class="js-slick-carousel products no-gutters border-top border-left border-right position-static slick-initialized slick-slider slick-dotted" data-arrows-classes="d-none d-lg-block position-absolute right-0 top-0 mt-n5 mt-lg-n9 arrow-cursor" data-arrow-left-classes="flaticon-back mr-5" data-arrow-right-classes="flaticon-next" data-pagi-classes="d-lg-none text-center u-slick__pagination position-absolute right-0 left-0 bottom-0 mb-n8" data-slides-show="4" data-responsive="[{
                               &quot;breakpoint&quot;: 1500,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 3
                               }
                            },{
                               &quot;breakpoint&quot;: 1199,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 2
                               }
                            }, {
                               &quot;breakpoint&quot;: 768,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 2
                               }
                            }]"><div class="js-prev d-none d-lg-block position-absolute right-0 top-0 mt-n5 mt-lg-n9 arrow-cursor flaticon-back mr-5 slick-arrow slick-disabled" aria-disabled="true" style=""></div>
<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1617px; transform: translate3d(0px, 0px, 0px);"><div class="product slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 231px; height: auto;" tabindex="0" role="tabpanel" id="slick-slide20" aria-describedby="slick-slide-control20">
<div class="product__inner overflow-hidden bg-white p-3 p-md-4">
<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
<div class="woocommerce-loop-product__thumbnail">
<a href="../shop/single-product-v4.html" class="d-block" tabindex="0"><img src="../../assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description"></a>
</div>
<div class="woocommerce-loop-product__body product__body pt-3 bg-white">
<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v4.html" tabindex="0">Paperback</a></div>
<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v4.html" tabindex="0">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
<div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="0">Jay Shetty</a></div>
<div class="price d-flex align-items-center font-weight-medium font-size-3">
<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
</div>
</div>
<div class="product__hover d-flex align-items-center">
<a href="../shop/single-product-v4.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" data-original-title="ADD TO CART" tabindex="0">
<span class="product__add-to-cart">ADD TO CART</span>
<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
</a>
<a href="../shop/single-product-v4.html" class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
<i class="flaticon-switch"></i>
</a>
<a href="../shop/single-product-v4.html" class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
<i class="flaticon-heart"></i>
</a>
</div>
</div>
</div>
</div><div class="product slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 231px; height: auto;" tabindex="0" role="tabpanel" id="slick-slide21" aria-describedby="slick-slide-control21">
<div class="product__inner overflow-hidden bg-white p-3 p-md-4">
<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
<div class="woocommerce-loop-product__thumbnail">
<a href="../shop/single-product-v4.html" class="d-block" tabindex="0"><img src="../../assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description"></a>
</div>
<div class="woocommerce-loop-product__body product__body pt-3 bg-white">
<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v4.html" tabindex="0">Kindle Edition</a></div>
<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v4.html" tabindex="0">The Overdue Life of Amy Byler</a></h2>
<div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="0">Kelly Harms</a></div>
<div class="price d-flex align-items-center font-weight-medium font-size-3">
<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
</div>
</div>
<div class="product__hover d-flex align-items-center">
<a href="../shop/single-product-v4.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" data-original-title="ADD TO CART" tabindex="0">
<span class="product__add-to-cart">ADD TO CART</span>
<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
</a>
<a href="../shop/single-product-v4.html" class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
<i class="flaticon-switch"></i>
</a>
<a href="../shop/single-product-v4.html" class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
<i class="flaticon-heart"></i>
</a>
</div>
</div>
</div>
</div><div class="product slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 231px; height: auto;" tabindex="0" role="tabpanel" id="slick-slide22" aria-describedby="slick-slide-control22">
<div class="product__inner overflow-hidden bg-white p-3 p-md-4">
<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
<div class="woocommerce-loop-product__thumbnail">
<a href="../shop/single-product-v4.html" class="d-block" tabindex="0"><img src="../../assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description"></a>
</div>
<div class="woocommerce-loop-product__body product__body pt-3 bg-white">
<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v4.html" tabindex="0">Paperback</a></div>
<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v4.html" tabindex="0">The Last Sister (Columbia River Book 1)</a></h2>
<div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="0">Jay Shetty</a></div>
<div class="price d-flex align-items-center font-weight-medium font-size-3">
<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
</div>
</div>
<div class="product__hover d-flex align-items-center">
<a href="../shop/single-product-v4.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" data-original-title="ADD TO CART" tabindex="0">
<span class="product__add-to-cart">ADD TO CART</span>
<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
</a>
<a href="../shop/single-product-v4.html" class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
<i class="flaticon-switch"></i>
</a>
<a href="../shop/single-product-v4.html" class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
<i class="flaticon-heart"></i>
</a>
</div>
</div>
</div>
</div><div class="product slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 231px; height: auto;" tabindex="0" role="tabpanel" id="slick-slide23" aria-describedby="slick-slide-control23">
<div class="product__inner overflow-hidden bg-white p-3 p-md-4">
<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
<div class="woocommerce-loop-product__thumbnail">
<a href="../shop/single-product-v4.html" class="d-block" tabindex="0"><img src="../../assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description"></a>
</div>
<div class="woocommerce-loop-product__body product__body pt-3 bg-white">
<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v4.html" tabindex="0">Kindle Edition</a></div>
<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v4.html" tabindex="0">All You Can Ever Know: A Memoir</a></h2>
<div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="0">Kelly Harms</a></div>
<div class="price d-flex align-items-center font-weight-medium font-size-3">
<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
</div>
</div>
<div class="product__hover d-flex align-items-center">
<a href="../shop/single-product-v4.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" data-original-title="ADD TO CART" tabindex="0">
<span class="product__add-to-cart">ADD TO CART</span>
<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
</a>
<a href="../shop/single-product-v4.html" class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
<i class="flaticon-switch"></i>
</a>
<a href="../shop/single-product-v4.html" class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
<i class="flaticon-heart"></i>
</a>
</div>
</div>
</div>
</div><div class="product slick-slide" data-slick-index="4" aria-hidden="true" style="width: 231px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide24" aria-describedby="slick-slide-control24">
<div class="product__inner overflow-hidden bg-white p-3 p-md-4">
<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
<div class="woocommerce-loop-product__thumbnail">
<a href="../shop/single-product-v4.html" class="d-block" tabindex="-1"><img src="../../assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description"></a>
</div>
<div class="woocommerce-loop-product__body product__body pt-3 bg-white">
<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v4.html" tabindex="-1">Paperback</a></div>
<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v4.html" tabindex="-1">Winter Garden</a></h2>
<div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="-1">Jay Shetty</a></div>
<div class="price d-flex align-items-center font-weight-medium font-size-3">
<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
</div>
</div>
<div class="product__hover d-flex align-items-center">
<a href="../shop/single-product-v4.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" data-original-title="ADD TO CART" tabindex="-1">
<span class="product__add-to-cart">ADD TO CART</span>
<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
</a>
<a href="../shop/single-product-v4.html" class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
<i class="flaticon-switch"></i>
</a>
<a href="../shop/single-product-v4.html" class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
<i class="flaticon-heart"></i>
</a>
</div>
</div>
</div>
</div><div class="product slick-slide" data-slick-index="5" aria-hidden="true" style="width: 231px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide25" aria-describedby="slick-slide-control25">
<div class="product__inner overflow-hidden bg-white p-3 p-md-4">
<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
<div class="woocommerce-loop-product__thumbnail">
<a href="../shop/single-product-v4.html" class="d-block" tabindex="-1"><img src="../../assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description"></a>
</div>
<div class="woocommerce-loop-product__body product__body pt-3 bg-white">
<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v4.html" tabindex="-1">Kindle Edition</a></div>
<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v4.html" tabindex="-1">Camino Winds</a></h2>
<div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="-1">Kelly Harms</a></div>
<div class="price d-flex align-items-center font-weight-medium font-size-3">
<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
</div>
</div>
<div class="product__hover d-flex align-items-center">
<a href="../shop/single-product-v4.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" data-original-title="ADD TO CART" tabindex="-1">
<span class="product__add-to-cart">ADD TO CART</span>
<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
</a>
<a href="../shop/single-product-v4.html" class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
<i class="flaticon-switch"></i>
</a>
<a href="../shop/single-product-v4.html" class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
<i class="flaticon-heart"></i>
</a>
</div>
</div>
</div>
</div><div class="product slick-slide" data-slick-index="6" aria-hidden="true" style="width: 231px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide26" aria-describedby="slick-slide-control26">
<div class="product__inner overflow-hidden bg-white p-3 p-md-4">
<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
<div class="woocommerce-loop-product__thumbnail">
<a href="../shop/single-product-v4.html" class="d-block" tabindex="-1"><img src="../../assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description"></a>
</div>
<div class="woocommerce-loop-product__body product__body pt-3 bg-white">
<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v4.html" tabindex="-1">Paperback</a></div>
<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v4.html" tabindex="-1">Man's Search for Meaning</a></h2>
<div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="-1">Jay Shetty</a></div>
<div class="price d-flex align-items-center font-weight-medium font-size-3">
<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
</div>
</div>
<div class="product__hover d-flex align-items-center">
<a href="../shop/single-product-v4.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" data-original-title="ADD TO CART" tabindex="-1">
<span class="product__add-to-cart">ADD TO CART</span>
<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
</a>
<a href="../shop/single-product-v4.html" class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
<i class="flaticon-switch"></i>
</a>
<a href="../shop/single-product-v4.html" class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
<i class="flaticon-heart"></i>
</a>
</div>
</div>
</div>
</div></div></div>






<div class="js-next d-none d-lg-block position-absolute right-0 top-0 mt-n5 mt-lg-n9 arrow-cursor flaticon-next slick-arrow" style="" aria-disabled="false"></div><ul class="js-pagination d-lg-none text-center u-slick__pagination position-absolute right-0 left-0 bottom-0 mb-n8" style="display: block;" role="tablist"><li class="slick-active slick-current" role="presentation"><span></span></li><li role="presentation"><span></span></li><li role="presentation"><span></span></li><li role="presentation"><span></span></li></ul></div>
</div>
</div>
</div>
</div>
</section>
            </div>
        </div>
    </section>

    <section class="space-bottom-3">
        <div class="banner mb-5">
            <div class="container">
                <header class="mb-5">
                    <h2 class="font-size-7 font-weight-medium">Livro em destaque </h2>
                </header>
                <div class="bg-tangerine-light px-xl-11 px-3 px-md-6 px-lg-5 py-6 py-xl-8 rounded-0">
                    <div class="media d-block d-lg-flex">
                        <div class="media-body align-self-center mb-4 mb-lg-0">
                            <p class="banner__pretitle text-uppercase text-gray-400 font-weight-bold"><?php echo $ale["genero"]; ?></p>
                            <h2 class="hero__title font-size-10 mb-4">
                                <span class="hero__title-line-1 font-weight-regular d-block mb-1"><?php echo $ale["livro_nome"]; ?></span>
                                <!-- <span class="hero__title-line-2 font-weight-bold d-block"></span> -->
                            </h2>
                            <a href="php/id/index.php?id=<?php echo $ale["idacervo"]; ?>" class="banner_btn btn rounded-0 btn-wide btn-tangerine text-white">Ver Livro</a>
                        </div>
                        <img src="<?php echo $ale["capa"]; ?>" style="max-width: 150px;" class="img-fluid" alt="image-description">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-bottom-2 space-bottom-lg-3">
        <div class="container">
            <div class="row no-gutters row-cols-1 row-cols-lg-3">
                <div class="col">
                    <div class="mb-5 mb-lg-0">
                        <h6 class="font-weight-medium font-size-7 mb-2 pb-1">Ultimos Livros</h6>
                        <div class="border-top border-left">
                            <?php
                            // Verificar se houve resultados
                            if (!empty($ultimosLivros)) {
                                // Exibir os dados de cada livro
                                foreach ($ultimosLivros as $livro) {
                                    echo '<div class="border-right border-bottom p-3">';
                                    echo '<div class="media m-1">';
                                    echo '<a class="d-block" href="php/id/index.php?id=' . $livro["idacervo"] . '">';
                                    echo '<img src="' . $livro["capa"] . '" style="max-width: 70px;" class="img-fluid attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description">';
                                    echo '</a>';
                                    echo '<div class="media-body ml-3">';
                                    echo '<h6 class="font-weight-normal ml-1 mb-2 pb-1 text-lh-md">';
                                    echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["livro_nome"] . '</a>';
                                    echo '</h6>';
                                    // Verifica se a variável de sessão "email" está definida
                                    if (isset($_SESSION["email"])) {
                                        // Verifica se o perfil do usuário é de administrador
                                        if ($_SESSION["perfil_idperfil"] == 1) {
                                            // Usuário está logado e tem permissão de administrador
                                            echo '<a href="php/adm/novoemprestimo.php?isbn=' . $livro["isbn"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                            echo '<span class="product__add-to-cart">Reservar</span>';
                                            echo '</a>';
                                        } else {
                                            // Usuário está logado, mas não tem permissão de administrador
                                            echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                            echo '<span class="product__add-to-cart">Ver Livro</span>';
                                            echo '</a>';
                                        }
                                    } else {
                                        // Usuário não está logado, mantém o código existente
                                        echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                        echo '<span class="product__add-to-cart">Ver Livro</span>';
                                        echo '</a>';
                                    }
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo "Nenhum livro encontrado.";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-5 mb-lg-0">
                        <h6 class="font-weight-medium font-size-7 mb-2 pb-1">Ação e Aventura</h6>
                        <div class="border-top border-left border-lg-left-0">
                            <?php
                            // Verificar se houve resultados
                            if (!empty($ultimosLivros_Acao)) {
                                // Exibir os dados de cada livro
                                foreach ($ultimosLivros_Acao as $livro) {
                                    echo '<div class="border-right border-bottom p-3">';
                                    echo '<div class="media m-1">';
                                    echo '<a class="d-block" href="php/id/index.php?id=' . $livro["idacervo"] . '">';
                                    echo '<img src="' . $livro["capa"] . '" style="max-width: 70px;" class="img-fluid attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description">';
                                    echo '</a>';
                                    echo '<div class="media-body ml-3">';
                                    echo '<h6 class="font-weight-normal ml-1 mb-2 pb-1 text-lh-md">';
                                    echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["livro_nome"] . '</a>';
                                    echo '</h6>';
                                    // Verifica se a variável de sessão "email" está definida
                                    if (isset($_SESSION["email"])) {
                                        // Verifica se o perfil do usuário é de administrador
                                        if ($_SESSION["perfil_idperfil"] == 1) {
                                            // Usuário está logado e tem permissão de administrador
                                            echo '<a href="php/adm/novoemprestimo.php?isbn=' . $livro["isbn"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                            echo '<span class="product__add-to-cart">Reservar</span>';
                                            echo '</a>';
                                        } else {
                                            // Usuário está logado, mas não tem permissão de administrador
                                            echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                            echo '<span class="product__add-to-cart">Ver Livro</span>';
                                            echo '</a>';
                                        }
                                    } else {
                                        // Usuário não está logado, mantém o código existente
                                        echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                        echo '<span class="product__add-to-cart">Ver Livro</span>';
                                        echo '</a>';
                                    }
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo "Nenhum livro encontrado.";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h6 class="font-weight-medium font-size-7 mb-2 pb-1">Gibis</h6>
                    <div class="border-top border-left border-lg-left-0">
                        <?php
                        // Verificar se houve resultados
                        if (!empty($ultimosLivros_Gibis)) {
                            // Exibir os dados de cada livro
                            foreach ($ultimosLivros_Gibis as $livro) {
                                echo '<div class="border-right border-bottom p-3">';
                                echo '<div class="media m-1">';
                                echo '<a class="d-block" href="php/id/index.php?id=' . $livro["idacervo"] . '">';
                                echo '<img src="' . $livro["capa"] . '" style="max-width: 70px;" class="img-fluid attachment-shop_catalog size-shop_catalog wp-post-image" alt="image-description">';
                                echo '</a>';
                                echo '<div class="media-body ml-3">';
                                echo '<h6 class="font-weight-normal ml-1 mb-2 pb-1 text-lh-md">';
                                echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["livro_nome"] . '</a>';
                                echo '</h6>';
                                // Verifica se a variável de sessão "email" está definida
                                if (isset($_SESSION["email"])) {
                                    // Verifica se o perfil do usuário é de administrador
                                    if ($_SESSION["perfil_idperfil"] == 1) {
                                        // Usuário está logado e tem permissão de administrador
                                        echo '<a href="php/adm/novoemprestimo.php?isbn=' . $livro["isbn"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                        echo '<span class="product__add-to-cart">Reservar</span>';
                                        echo '</a>';
                                    } else {
                                        // Usuário está logado, mas não tem permissão de administrador
                                        echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                        echo '<span class="product__add-to-cart">Ver Livro</span>';
                                        echo '</a>';
                                    }
                                } else {
                                    // Usuário não está logado, mantém o código existente
                                    echo '<a href="php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                    echo '<span class="product__add-to-cart">Ver Livro</span>';
                                    echo '</a>';
                                }
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo "Nenhum livro encontrado.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>
    <?php
    include './php/end/footer.php';
    ?>

    <?php
    include './php/end/script.php';
    ?>