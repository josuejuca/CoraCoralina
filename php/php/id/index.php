<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Código Limpo | Cora Coralina</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/5328/5328095.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link href='https://d33wubrfki0l68.cloudfront.net/bundles/808ac697058fb81ead56a0e19f0f88f3b3fc9da6.css' rel='stylesheet' />
</head>

<body>
    <?php
    // Listar Todos os  USUÁRIOS
    require_once '../../dao/usuarioDAO.php';
    $usuarioDAO = new UsuarioDAO();
    $ultimosLivros = $usuarioDAO->selecionaUltimosLivros(5);
    $TodosLivros = $usuarioDAO->selecionaTdsLivro();
    $ultimosLivros_Acao = $usuarioDAO->selecionaUltimosLivrosPorGereno('Ação e Aventura', 5);
    ?>

    <?php


    // Verifique se o ID do usuário está definido na URL
    if (isset($_GET["id"])) {
        $idLivro = $_GET["id"];

        // Chame a função selecionaID() para obter as informações do usuário com base no ID
        $livro_in = $usuarioDAO->selecionaIDLivro($idLivro);

        // Verifique se o usuário foi encontrado antes de exibir o formulário com os valores
        if ($livro_in) {
            // Atribua os valores retornados às variáveis
            $idacervo =  $livro_in['idacervo'];
            $autor = $livro_in['autor'];
            $genero = $livro_in['genero'];
            $data_cadastro = $livro_in['data_cadastro'];
            $livro_nome = $livro_in['livro_nome'];
            $sinopse = $livro_in['sinopse'];
            $data_livro = $livro_in['data_livro'];
            $quantidade = $livro_in['quantidade'];
            $midia = $livro_in['midia'];
            $capa = $livro_in['capa'];
            $isbn = $livro_in['isbn'];
            $editora = $livro_in['editora'];
            $sobre_autor = $livro_in['sobre_autor'];
            $idioma = $livro_in['idioma'];
            $num_pa = $livro_in['num_pa'];
            $info_ad1 = $livro_in['info_ad1'];
            $info_ad2 = $livro_in['info_ad2'];
            $info_ad3 = $livro_in['info_ad3'];
            // ... atribua outras informações do usuário conforme necessário

            // Agora você pode usar essas variáveis nos campos de entrada do formulário
        } else {
            // Caso o usuário não seja encontrado, você pode redirecionar para uma página de erro ou fazer alguma outra ação adequada
            echo "Livro não encontrado.";
            exit;
        }
    } else {
        // Caso o ID do usuário não esteja definido na URL, você pode redirecionar para uma página de erro ou fazer alguma outra ação adequada
        echo "ID do Livro não fornecido.";
        exit;
    }
    ?>
    <!-- Inicio do projeto -->
    <?php
    session_start();
    include '../../php/end/header.php';
    ?>

    <div class="page-header border-bottom">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg"><?php echo $livro_nome; ?> (ID: <?php echo $idacervo; ?>)</h1>
                <nav class="woocommerce-breadcrumb font-size-2">
                    <a href="../../index.php" class="h-primary">Home</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                    <a href="../livros/index.php" class="h-primary">Livro</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span><?php echo $livro_nome; ?>
                </nav>
            </div>
        </div>
    </div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main ">
            <div class="product">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 woocommerce-product-gallery woocommerce-product-gallery--with-images images">
                            <figure class="woocommerce-product-gallery__wrapper pt-8 mb-0">
                                <div class="js-slick-carousel u-slick" data-pagi-classes="text-center u-slick__pagination my-4">
                                    <div class="js-slide">
                                        <img src="<?php echo $capa; ?>" style="max-width: 300px; max-height: 452px;" alt="Image Description" class="mx-auto img-fluid">
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-md-7 pl-0 summary entry-summary border-left">
                            <div class="space-top-2 px-4 px-xl-7 border-bottom pb-5">
                                <h1 class="product_title entry-title font-size-7 mb-3"><?php echo $livro_nome; ?></h1>
                                <div class="font-size-2 mb-4">
                                    <span class="ml-3 font-weight-medium">Por</span>
                                    <span class="ml-2 text-gray-600"> <?php echo $autor; ?> </span>
                                </div>
                                <p class="price font-size-22 font-weight-medium mb-3">
                                    <?php
                                    if ($quantidade > 0) {
                                        echo '<span class="woocommerce-Price-amount amount" style="color:green;">
                                            <span class="woocommerce-Price-currencySymbol">Disponivel</span>
                                        </span>';
                                    } else {
                                        echo '<span class="woocommerce-Price-amount amount" style="color:red;">
                                            <span class="woocommerce-Price-currencySymbol">Indisponível</span>
                                        </span>';
                                    }
                                    ?>
                                </p>
                                <div class="mb-2 font-size-2">
                                    <span class="font-weight-medium">Formato do Livro:</span>
                                    <span class="ml-2 text-gray-600">
                                        <?php
                                        if ($midia == 1) {
                                            echo 'Fisico';
                                        }
                                        if ($midia == 2) {
                                            echo 'Digital';
                                        } 
                                        if ($midia == 3) {
                                            echo 'Midia Fisica & Digital';
                                        }
                                        ?></span>
                                        <br>
                                    <span class="font-weight-medium">Quantidade de Livros:</span>
                                    <span class="ml-2 text-gray-600">
                                        <?php
                                        echo $quantidade;
                                        ?></span>
                                </div>

                                <div class="row mx-gutters-2 mb-4">
                                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                                        <div class="">
                                            <input type="radio" id="typeOfListingRadio1" name="typeOfListingRadio1" class="custom-control-input checkbox-outline__input">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0" for="typeOfListingRadio1">
                                                <span class="d-block">Livro Fisico</span>
                                                <?php
                                                if ($quantidade > 0) {
                                                    if ($midia == 2) {
                                                        echo '<span class="" style="color:red;"> Indisponível</span>';
                                                    } elseif ($midia == 1 || $midia == 3) {
                                                        echo '<span class="" style="color:green;"> Disponível</span>';
                                                    }
                                                } else {
                                                    echo '<span class="woocommerce-Price-amount amount" style="color:red;">
                                                        <span class="woocommerce-Price-currencySymbol">Indisponível</span>
                                                    </span>';
                                                }

                                                ?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                                        <div class="">
                                            <input type="radio" id="typeOfListingRadio1" name="typeOfListingRadio1" class="custom-control-input checkbox-outline__input">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0" for="typeOfListingRadio1">
                                                <span class="d-block">Livro Digital (PDF)</span>
                                                <?php
                                                if ($quantidade > 0) {
                                                    if ($midia == 1) {
                                                        echo '<span class="" style="color:red;"> Indisponível</span>';
                                                    } elseif ($midia == 2 || $midia == 3) {
                                                        echo '<span class="" style="color:green;"> Disponível</span>';
                                                    }
                                                } else {
                                                    echo '<span class="woocommerce-Price-amount amount" style="color:red;">
                                                        <span class="woocommerce-Price-currencySymbol">Indisponível</span>
                                                    </span>';
                                                }

                                                ?>

                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="woocommerce-product-details__short-description font-size-2 mb-5">
                                    <p style="font-size: 18px; font-style: italic;">Sobre o Autor: </p>
                                    <p class=""><?php echo $sobre_autor; ?></p>
                                </div>
                                <form class="cart d-md-flex align-items-center" action="../../php/adm/novoemprestimo.php?isbn=<?php echo $isbn; ?>" method="post" enctype="multipart/form-data">
                                    <button type="submit" name="add-to-cart" value="7145" class="btn btn-dark border-0 rounded-0 p-3 min-width-250 ml-md-4 single_add_to_cart_button button alt">Fazer
                                        Emprestimo</button>
                                    <!-- <button type="submit" name="add-to-cart" value="7145" class="btn btn-dark border-0 rounded-0 p-3 min-width-250 ml-md-4 single_add_to_cart_button button alt">Download</button> -->
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="js-scroll-nav mb-10">
                    <div class="woocommerce-tabs wc-tabs-wrapper  2 mx-lg-auto">
                        <div id="Description" class="">
                            <div class="border-top border-bottom">
                                <ul class="container tabs wc-tabs nav justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                                    <li class="flex-shrink-0 flex-md-shrink-1 nav-item active">
                                        <a class="nav-link py-4 font-weight-medium active" href="#Description">
                                            Descrição
                                        </a>
                                    </li>
                                    <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                        <a class="nav-link py-4 font-weight-medium" href="#ProductDetails">
                                            Informações adicionais
                                        </a>
                                    </li>
                                    <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                        <a class="nav-link py-4 font-weight-medium" href="#ProductReviews">
                                            Avaliações
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content font-size-2 container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2">
                                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab pt-9">

                                            <p class="mb-3"><?php echo $sinopse; ?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="ProductDetails" class="">
                            <div class="border-top border-bottom">
                                <ul class="container tabs wc-tabs nav justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                                    <li class="flex-shrink-0 flex-md-shrink-1 nav-item active">
                                        <a class="nav-link py-4 font-weight-medium " href="#Description">
                                            Descrição
                                        </a>
                                    </li>
                                    <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                        <a class="nav-link py-4 font-weight-medium active" href="#ProductDetails">
                                            Informações adicionais
                                        </a>
                                    </li>
                                    <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                        <a class="nav-link py-4 font-weight-medium" href="#ProductReviews">
                                            Avaliações
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content font-size-2 container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2">
                                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab pt-9">

                                            <div class="table-responsive mb-4">
                                                <table class="table table-hover table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th class="px-4 px-xl-5">Editora: </th>
                                                            <td class=""><?php echo $editora; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="px-4 px-xl-5">Idioma: </th>
                                                            <td><?php echo $idioma; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="px-4 px-xl-5">Número de Páginas: </th>
                                                            <td><?php echo $num_pa; ?> páginas</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="px-4 px-xl-5">Data do livro :</th>
                                                            <td><?php echo $info_ad1; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="ProductReviews" class="">
                            <div class="border-top border-bottom">
                                <ul class="container tabs wc-tabs nav justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                                    <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                        <a class="nav-link py-4 font-weight-medium" href="#Description">
                                            Descrição
                                        </a>
                                    </li>
                                    <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                        <a class="nav-link py-4 font-weight-medium" href="#ProductDetails">
                                            Informações adicionais
                                        </a>
                                    </li>
                                    <li class="flex-shrink-0 flex-md-shrink-1 nav-item active">
                                        <a class="nav-link py-4 font-weight-medium active" href="#ProductReviews">
                                            Avaliações
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content font-size-2 container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2">
                                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab pt-9">

                                            <h4 class="font-size-3">Avaliações dos leitores </h4>

                                            <div id="disqus_thread"></div>
                                            <div>
                                                <script>
                                                    var disqus_url = 'http://www.josuejuca.com/<?php echo $idacervo; ?>/';
                                                    (function() { // DON'T EDIT BELOW THIS LINE
                                                        var d = document,
                                                            s = d.createElement('script');
                                                        s.src = 'https://coracoralina.disqus.com/embed.js';
                                                        s.setAttribute('data-timestamp', +new Date());
                                                        (d.head || d.body).appendChild(s);
                                                    })();
                                                </script>
                                                <noscript><a href="https://disqus.com/?ref_noscript"></a></noscript>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <section class="space-bottom-3">
                    <div class="container">
                        <header class="mb-5 d-md-flex justify-content-between align-items-center">
                            <h2 class="font-size-7 mb-3 mb-md-0">Ultimos Livros</h2>
                        </header>
                        <div class="js-slick-carousel products no-gutters border-top border-left border-right" data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-slides-show="5" data-responsive='[{
                               "breakpoint": 1500,
                               "settings": {
                                 "slidesToShow": 4
                               }
                            },{
                               "breakpoint": 1199,
                               "settings": {
                                 "slidesToShow": 3
                               }
                            }, {
                               "breakpoint": 992,
                               "settings": {
                                 "slidesToShow": 2
                               }
                            }, {
                               "breakpoint": 554,
                               "settings": {
                                 "slidesToShow": 2
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
                                    echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="d-block"><img src="' . $livro["capa"] . '" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" style="max-width: 150px; max-height: 226px;"></a>';
                                    echo '</div>';
                                    echo '<div class="woocommerce-loop-product__body product__body pt-3 bg-white">';
                                    echo '<div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../../php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["genero"] . '</a></div>';
                                    echo '<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">';
                                    echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '">' . $livro["livro_nome"] . '</a>';
                                    echo '</h2>';
                                    echo '<div class="font-size-2  mb-1 text-truncate"><a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="text-gray-700">' . $livro["autor"] . '</a></div>';
                                    echo '<div class="price d-flex align-items-center font-weight-medium font-size-3">';
                                    echo '<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>Disponivel</span>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<div class="product__hover d-flex align-items-center">';
                                    echo '<a href="../../php/id/index.php?id=' . $livro["idacervo"] . '" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">';
                                    echo '<span class="product__add-to-cart">Ver Livro</span>';
                                    echo '<span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>';
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
                </section>
            </div>
        </main>
    </div>

    <?php
    include '../end/footer.php';
    ?>
    <script id="dsq-count-scr" src="//coracoralina.disqus.com/count.js" async></script>
    <?php
    include '../end/script.php';
    ?>