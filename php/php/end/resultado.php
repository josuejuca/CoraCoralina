<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Biblioteca | Cora Coralina</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="shortcut icon" href="../../assets/img/favicon.png"> -->

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/5328/5328095.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/vendor/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="../../assets/css/main.css">
</head>

<body class="left-sidebar">


    <?php
    session_start();
    // Listar Todos os  USUÁRIOS
    require_once '../../dao/usuarioDAO.php';
    $usuarioDAO = new UsuarioDAO();
    $ultimosLivros = $usuarioDAO->selecionaUltimosLivros(5);
    // $TodosLivros = $usuarioDAO->selecionaTdsLivro();
    $ultimosLivros_Acao = $usuarioDAO->selecionaUltimosLivrosPorGereno('Ação e Aventura', 5);
    $ultimosLivros_cat2 = $usuarioDAO->selecionaUltimosLivrosPorGereno('2', 10);
    $ultimosLivros_cat3 = $usuarioDAO->selecionaUltimosLivrosPorGereno('3', 10);
    ?>

    <?php
    // Verifica se a variável $_GET['livros'] está definida e não está vazia
    if (isset($_GET['livros']) && !empty($_GET['livros'])) {
        // Decodifica a string da URL
        $livros = urldecode($_GET['livros']);

        // Converte a string em um array associativo
        $livrosArray = json_decode($livros, true);

        // Verifica se a conversão foi bem-sucedida e se o array não está vazio
        if ($livrosArray !== null && is_array($livrosArray) && !empty($livrosArray)) {
            // Agora você pode acessar as informações do livro como variáveis individuais
            $livro = $livrosArray[0]; // Considerando que há apenas um livro retornado

            $idacervo = $livro['idacervo'];
            $autor = $livro['autor'];
            $sinopse = $livro['sinopse'];
            $quantidade = $livro['quantidade'];
            $midia = $livro['midia'];
            $capa = $livro['capa'];
            $livro_nome = $livro['livro_nome'];
            $isbn = $livro['isbn'];
            $sobre_autor = $livro['sobre_autor'];
            $genero = $livro['genero'];
            $data_cadastro = $livro['data_cadastro'];
            $data_livro = $livro['data_livro'];
            $editora = $livro['editora'];
            $idioma = $livro['idioma'];
            $num_pa = $livro['num_pa'];
            $info_ad1 = $livro['info_ad1'];
            $info_ad2 = $livro['info_ad2'];
            $info_ad3 = $livro['info_ad3'];
            $usuario_idusuario = $livro['usuario_idusuario'];

            // Agora você pode usar essas variáveis para exibir as informações do livro conforme necessário
            // ...
        } else {
            // Nenhum livro encontrado
            $erro =  "Nenhum livro encontrado.";
        }
    } else {
        // Nenhum livro encontrado
        $erro = "Nenhum livro encontrado.";
    }
    ?>


    <?php
    include '../../php/end/header.php';
    ?>

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

    <div class="site-content space-bottom-3" id="content">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area order-2">

                    <div class="shop-control-bar d-lg-flex justify-content-between align-items-center mb-5 text-center text-md-left">
                        <div class="shop-control-bar__left mb-4 m-lg-0">
                        <h2 class="font-size-26 mb-3 mb-md-0">Resultado da pesquisa</h2>
                        </div>

                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">

                            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left mb-6">
                                <?php
                                // Verificar se houve resultados
                                if (!empty($livrosArray)) {
                                    // Exibir os dados de cada livro
                                    foreach ($livrosArray as $livro) {
                                        // Extrair as informações do livro
                                        $idacervo = $livro['idacervo'];
                                        $autor = $livro['autor'];
                                        $sinopse = $livro['sinopse'];
                                        $quantidade = $livro['quantidade'];
                                        $midia = $livro['midia'];
                                        $capa = $livro['capa'];
                                        $livro_nome = $livro['livro_nome'];
                                        $isbn = $livro['isbn'];
                                        $sobre_autor = $livro['sobre_autor'];
                                        $genero = $livro['genero'];
                                        $data_cadastro = $livro['data_cadastro'];
                                        $data_livro = $livro['data_livro'];
                                        $editora = $livro['editora'];
                                        $idioma = $livro['idioma'];
                                        $num_pa = $livro['num_pa'];
                                        $info_ad1 = $livro['info_ad1'];
                                        $info_ad2 = $livro['info_ad2'];
                                        $info_ad3 = $livro['info_ad3'];
                                        $usuario_idusuario = $livro['usuario_idusuario'];

                                        echo '<li class="product col">';
                                        echo '<div class="product__inner overflow-hidden p-3 p-md-4d875">';
                                        echo '<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">';
                                        echo '<div class="woocommerce-loop-product__thumbnail">';
                                        echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="d-block"><img src="' . $livro["capa"] . '" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>';
                                        echo '</div>';
                                        echo '<div class="woocommerce-loop-product__body product__body pt-3 bg-white">';
                                        echo '<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../../php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["genero"] . '</a></div>';
                                        echo '<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../../php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["livro_nome"] . '</a></h2>';
                                        echo '<div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">' . $livro["autor"] . '</a></div>';
                                        echo '<div class="price d-flex align-items-center font-weight-medium font-size-3">';
                                        echo '<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">';

                                        if ($quantidade > 0) {
                                            echo 'Disponível</span>';
                                        } else {
                                            echo 'Indisponível</span>';
                                        }
                                        echo '</div>';
                                        echo '</div>';
                                        echo '<div class="product__hover d-flex align-items-center">';

                                        // Verifica se a variável de sessão "email" está definida
                                        if (isset($_SESSION["email"])) {
                                            // Verifica se o perfil do usuário é de administrador
                                            if ($_SESSION["perfil_idperfil"] == 1) {
                                                // Usuário está logado e tem permissão de administrador
                                                echo '<a href="../../php/adm/novoemprestimo.php?isbn=' . $livro["isbn"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                                echo '<span class="">Reservar</span>';

                                                echo '</a>';
                                            } else {
                                                // Usuário está logado, mas não tem permissão de administrador
                                                echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                                echo '<span class="">Ver Livro</span>';

                                                echo '</a>';
                                            }
                                        } else {
                                            // Usuário não está logado, mantém o código existente
                                            echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="VER LIVRO">';
                                            echo '<span class="product__add-to-cart">Ver Livro</span>';

                                            echo '</a>';
                                        }
                                        // 
                                        // echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="VER LIVRO">';                                            
                                        // echo '<span class="product__add-to-cart">VER LIVRO</span>';                                            
                                        // echo '</a>';
                                        // 
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</li>';
                                        echo '';
                                    }
                                } else {
                                    echo "Nenhum livro encontrado.";
                                }
                                ?>
                            </ul>

                        </div>
                    </div>
                    <div class="position-relative mb-6">
                        <header class="mb-5 d-md-flex justify-content-between align-items-center">
                            <h2 class="font-size-26 mb-3 mb-md-0">Ultimos Livros</h2>
                        </header>
                        <div class="js-slick-carousel products no-gutters border-top border-left border-right position-static slick-initialized slick-slider" data-arrows-classes="position-absolute right-0 top-0 mt-2 arrow-cursor" data-arrow-left-classes="flaticon-back mr-5" data-arrow-right-classes="flaticon-next" data-slides-show="4" data-responsive="[{
                               &quot;breakpoint&quot;: 1500,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 3
                               }
                            },{
                               &quot;breakpoint&quot;: 992,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 2
                               }
                            }, {
                               &quot;breakpoint&quot;: 768,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 1
                               }
                            }, {
                               &quot;breakpoint&quot;: 554,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 1
                               }
                            }]">
                            <img src="" alt="">
                            <div class="js-prev position-absolute right-0 top-0 mt-2 arrow-cursor flaticon-back mr-5 slick-arrow slick-disabled" aria-disabled="true" style=""></div>
                            <div class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 1876px; transform: translate3d(0px, 0px, 0px);">
                                    <?php
                                    // Verificar se houve resultados
                                    if (!empty($ultimosLivros)) {
                                        // Exibir os dados de cada livro
                                        foreach ($ultimosLivros as $livro) {                                            
                                            echo '<div class="product slick-slide" data-slick-index="6" aria-hidden="true" style="width: 268px; height: auto;" tabindex="-1">';
                                            echo '<div class="product__inner overflow-hidden p-3 p-md-4">';
                                            echo '<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">';
                                            echo '<div class="woocommerce-loop-product__thumbnail">';
                                            echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="d-block" tabindex="-1"><img style="max-width: 120px !important;" src="' . $livro["capa"] . '" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>';
                                            echo '</div>';
                                            echo '<div class="woocommerce-loop-product__body product__body pt-3 bg-white">';
                                            echo '<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" tabindex="-1">' . $livro["genero"] . '</a></div>';
                                            echo '<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" tabindex="-1">' . $livro["livro_nome"] . '</a></h2>';
                                            echo '<div class="font-size-2  mb-1 text-truncate"><a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="text-gray-700" tabindex="-1">' . $livro["autor"] . '</a></div>';
                                            echo '<div class="price d-flex align-items-center font-weight-medium font-size-3">';
                                            echo '<span class="woocommerce-Price-amount amount">';

                                            if ($quantidade > 0) {
                                                echo 'Disponível</span>';
                                            } else {
                                                echo 'Indisponível</span>';
                                            }
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="product__hover d-flex align-items-center">';
                                            echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" data-original-title="ADD TO CART" tabindex="-1">';

                                            // Verifica se a variável de sessão "email" está definida
                                            if (isset($_SESSION["email"])) {
                                                // Verifica se o perfil do usuário é de administrador
                                                if ($_SESSION["perfil_idperfil"] == 1) {
                                                    // Usuário está logado e tem permissão de administrador
                                                    echo '<a href="../../php/adm/novoemprestimo.php?isbn=' . $livro["isbn"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                                    echo '<span class="">Reservar</span>';

                                                    echo '</a>';
                                                } else {
                                                    // Usuário está logado, mas não tem permissão de administrador
                                                    echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                                    echo '<span class="">Ver Livro</span>';

                                                    echo '</a>';
                                                }
                                            } else {
                                                // Usuário não está logado, mantém o código existente
                                                echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                                echo '<span class="">Ver Livro</span>';

                                                echo '</a>';
                                            }
                                            echo '';
                                            echo '</a>';
                                            echo '</div>';
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






                            <div class="js-next position-absolute right-0 top-0 mt-2 arrow-cursor flaticon-next slick-arrow" style="" aria-disabled="false"></div>
                        </div>
                    </div>
                </div>
                <div id="secondary" class="sidebar widget-area order-1" role="complementary">
                    <div id="widgetAccordion">
                        <div id="woocommerce_product_categories-2" class="widget p-4d875 border woocommerce widget_product_categories">
                            <div id="widgetHeadingOne" class="widget-head">
                                <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapseOne" aria-expanded="true" aria-controls="widgetCollapseOne">
                                    <h3 class="widget-title mb-0 font-weight-medium font-size-3">Categorias</h3>
                                    <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z"></path>
                                    </svg>
                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div id="widgetCollapseOne" class="mt-3 widget-content collapse show" aria-labelledby="widgetHeadingOne" data-parent="#widgetAccordion">
                                <ul class="product-categories">
                                    <li class="cat-item cat-item-9 cat-parent">
                                        <a href="../shop/v5.html">Aqui</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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