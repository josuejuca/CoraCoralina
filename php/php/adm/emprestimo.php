<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Gerenciamento | Cora Coralina</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- font flat-ui cdn 2.2.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/css/flat-ui.min.css" integrity="sha512-PvB3Q4vTvWD/9aiiELYI3uebup/4mtou3Mc/uGudC/Zl+C9BdKUkAI+5jORfA+fvLK4DpzC5VyEN7P2kK43hjg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/vendor/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">


    <link rel="stylesheet" href="../../assets/css/main.css">
</head>

<body>

    <?php
    // Listar Todos os  USUÁRIOS
    require_once '../../dao/usuarioDAO.php';
    $usuarioDAO = new UsuarioDAO();
    $emprestimo = $usuarioDAO->selecionaTdsEmprestimo();
    ?>

    <?php
    session_start();
    include '../../view/validaLogin.php';


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

    <main id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 border-right">
                    <h6 class="font-weight-medium font-size-7 pt-5 pt-lg-8  mb-5 mb-lg-7">Administrativo</h6>
                    <div class="tab-wrapper">
                        <ul class="my__account-nav nav flex-column mb-0" role="tablist" id="pills-tab">
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0 active" href="index.php">
                                    <span class="font-weight-normal text-gray-600">Menu Principal</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="acervo.php">
                                    <span class="font-weight-normal text-gray-600">Livros</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="usuarios.php">
                                    <span class="font-weight-normal text-gray-600">Usuários</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="escolas.php">
                                    <span class="font-weight-normal text-gray-600">Escolas</span>
                                </a>
                            </li> -->
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="emprestimo.php">
                                    <span class="font-weight-normal text-gray-600">Lista de Empréstimo</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="novoUsuario.php">
                                    <span class="font-weight-normal text-gray-600">Criar Usuários</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="addAcervoAPI.php">
                                    <span class="font-weight-normal text-gray-600">Adicionar Livro</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="novoemprestimo.php">
                                    <span class="font-weight-normal text-gray-600">Fazer Emprestimo</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="controller/logoffController.php">
                                    <span class="font-weight-normal text-gray-600">Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Emprestimos</h6>
                                <table class="table">
                                    <thead>
                                        <tr class="border">
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-lg-5">ID</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Data</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Status</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Livro</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Usuário</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">CPF</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Telefone</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        foreach ($emprestimo as $p) {
                                            echo '  <tr class="border" >';
                                            echo ' <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6"># '. $p["idemprestimo"]. '</th>';
                                            echo ' <td class="align-middle py-5">'. $p["data"]. '</td>';
                                            echo ' <td class="align-middle py-5 green">'. $p["status"]. '</td>';
                                            echo ' <td class="align-middle py-5">'. $p["livro_nome"]. '</td>';
                                            echo ' <td class="align-middle py-5">'. $p["nome"]. '</td>';
                                            echo ' <td class="align-middle py-5">'. $p["cpf"]. '</td>';
                                            echo ' <td class="align-middle py-5">'. $p["telefone"]. '</td>';
                                            echo '<td class="align-middle py-5"> <a href="winemprestimo.php?id='. $p["idemprestimo"]. '"><i class="fi fi-rr-book"></i>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
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