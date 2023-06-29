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
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail" placeholder="" aria-label="etc.juca@gmail.com" aria-describedby="signinEmailLabel" required>
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
        <h2 class="center">Cora Coralina</h2>
        <div class="container">
            <header class="mb-5 d-md-flex justify-content-between align-items-center">
                <h3 class="font-size-7 mb-3 mb-md-0 center" style="text-align:center;">Últimos Livros</h3>
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
                                            <figure class="d-md-block mb-0  text-carolina">
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
                                            <figure class="d-md-block mb-0 text-carolina">
                                                <i class="icon glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Cursos</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/quadrinhos.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-carolina">
                                                <i class="icon glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Gibis</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/literatura-estrangeira.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-carolina">
                                                <i class="glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Literatura Estrangeira</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/literatura-brasileira.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-carolina">
                                                <i class="icon glyph-icon flaticon-history font-size-12"></i>
                                            </figure>
                                            <span class="tabtext font-size-3 font-weight-medium text-dark">Literatura Brasileira</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item slick-slide slick-active" style="width: 200px; height: auto;">
                                    <a class="nav-link font-weight-medium px-0" href="php/biblioteca/outros.php">
                                        <div class="text-center">
                                            <figure class="d-md-block mb-0 text-carolina">
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