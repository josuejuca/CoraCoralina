<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Gerenciamento | Cora Coralina</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/vendor/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <!-- font flat-ui cdn 2.2.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/css/flat-ui.min.css" integrity="sha512-PvB3Q4vTvWD/9aiiELYI3uebup/4mtou3Mc/uGudC/Zl+C9BdKUkAI+5jORfA+fvLK4DpzC5VyEN7P2kK43hjg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/css/main.css">
</head>

<body>

    <?php
    // Listar Todos os  USUÁRIOS
    require_once '../../dao/usuarioDAO.php';
    $usuarioDAO = new UsuarioDAO();
    $usuarios = $usuarioDAO->selecionaTds();
    ?>

    <?php
    session_start();
    include '../../view/validaLogin.php';


    // Verifica se a variável de sessão "email" está definida
    if (isset($_SESSION["email"])) {
        // Verifica se o perfil do usuário é de administrador
        if ($_SESSION["perfil_idperfil"] != 3) {
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
                    <?php
                    if ($_SESSION["perfil_idperfil"] == 1) {
                        // Usuário está logado e tem permissão de administrador                                
                        echo '<h6 class="font-weight-medium font-size-7 pt-5 pt-lg-8  mb-5 mb-lg-7">Administrativo</h6>';
                    } else {
                        // Usuário está logado, mas não tem permissão de administrador                                
                    }
                    ?>
                    <?php
                    if ($_SESSION["perfil_idperfil"] == 2) {
                        // Usuário está logado e tem permissão de administrador                                
                        echo '<h6 class="font-weight-medium font-size-7 pt-5 pt-lg-8  mb-5 mb-lg-7">Painel do funcionário</h6>';
                    } else {
                        // Usuário está logado, mas não tem permissão de administrador                                
                    }
                    ?>
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
                        <!-- Listar Usuario -->
                        <div class="tab-pane fade show active" id="todos-usuarios" role="tabpanel" aria-labelledby="pills-three-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1"> Usuários</h6>
                                <div class="woocommerce-info p-4 bg-white border">Procura um usuário específico?
                                    <a class="showcoupon" data-toggle="collapse" href="#nome" role="button" aria-expanded="false" aria-controls="collapseExample9">
                                        Nome,
                                    </a>
                                    <a class="showcoupon" data-toggle="collapse" href="#cpf" role="button" aria-expanded="false" aria-controls="collapseExample9">
                                        CPF,
                                    </a>
                                    <a class="showcoupon" data-toggle="collapse" href="#email" role="button" aria-expanded="false" aria-controls="collapseExample9">
                                        E-Mail,
                                    </a>
                                    <a class="showcoupon" data-toggle="collapse" href="#telefone" role="button" aria-expanded="false" aria-controls="collapseExample9">
                                        Telefone.
                                    </a>
                                </div>
                                <form id="nome" action="" class="collapse checkout_coupon mt-4 p-4 bg-white border" method="get">
                                    <div class="row d-flex">
                                        <p class="col-md-4 d-inline form-row form-row-first mb-3 mb-md-0">
                                            <input type="text" name="nome" class="input-text form-control" placeholder="Nome do Usuário">
                                        </p>
                                        <p class="col-md-3 d-inline form-row form-row-last">
                                            <button type="submit" class="button form-control border-0 height-4 btn btn-dark rounded-0">Buscar Usuário</button>
                                        </p>
                                    </div>
                                </form>
                                <form id="cpf" action="" class="collapse checkout_coupon mt-4 p-4 bg-white border" method="get">
                                    <div class="row d-flex">
                                        <p class="col-md-4 d-inline form-row form-row-first mb-3 mb-md-0">
                                            <input type="text" name="cpf" class="input-text form-control" placeholder="CPF do Usuário">
                                        </p>
                                        <p class="col-md-3 d-inline form-row form-row-last">
                                            <button type="submit" class="button form-control border-0 height-4 btn btn-dark rounded-0">Buscar Usuário</button>
                                        </p>
                                    </div>
                                </form>
                                <form id="email" action="" class="collapse checkout_coupon mt-4 p-4 bg-white border" method="get">
                                    <div class="row d-flex">
                                        <p class="col-md-4 d-inline form-row form-row-first mb-3 mb-md-0">
                                            <input type="text" name="email" class="input-text form-control" placeholder="E-Mail do Usuário">
                                        </p>
                                        <p class="col-md-3 d-inline form-row form-row-last">
                                            <button type="submit" class="button form-control border-0 height-4 btn btn-dark rounded-0">Buscar Usuário</button>
                                        </p>
                                    </div>
                                </form>
                                <form id="telefone" action="" class="collapse checkout_coupon mt-4 p-4 bg-white border" method="get">
                                    <div class="row d-flex">
                                        <p class="col-md-4 d-inline form-row form-row-first mb-3 mb-md-0">
                                            <input type="text" name="telefone" class="input-text form-control" placeholder="Telefone do Usuário">
                                        </p>
                                        <p class="col-md-3 d-inline form-row form-row-last">
                                            <button type="submit" class="button form-control border-0 height-4 btn btn-dark rounded-0">Buscar Usuário</button>
                                        </p>
                                    </div>
                                </form>
                                <br>
                                <table class="table">
                                    <thead>
                                        <tr class="border">
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-lg-5">ID</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Nome</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">CPF</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Telefone
                                            </th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">E-Mail</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Perfil</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Ação</th>
                                        </tr>
                                    </thead>
                                    <!-- <form action="" method="get">

                                        <input class="form-control bg-white-100 min-width-380 py-2d75 height-4 border-white-100" type="text" name="filtro" placeholder="Digite o nome do usuário" aria-label="Search">
                                        <button type="submit">Filtrar</button>
                                    </form> -->


                                    <tbody id="user">

                                        <!-- Fé em deus que ele é justo -->

                                        <?php
                                        // foreach ($usuarios as $u) {
                                        //     echo '<tr class="border">';
                                        // $idusuario = $u["idusuario"];
                                        // $nome = $u["nome"];
                                        // $perfil = $u["perfil"];
                                        // $cpf = $u["cpf"];
                                        // $email = $u["email"];
                                        // $telefone = $u["telefone"];

                                        // echo ' <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#', $idusuario;
                                        // ' </th>';
                                        // echo '  <td class="align-middle py-5"> ', $nome;
                                        // ' </td> ';
                                        // echo '  <td class="align-middle py-5"> ', $cpf;
                                        // ' </td> ';
                                        // echo '  <td class="align-middle py-5">',  $telefone;
                                        // ' </td> ';
                                        // echo '  <td class="align-middle py-5"> ', $email;
                                        // '</td> ';
                                        // echo '  <td class="align-middle py-5"> ', $perfil;
                                        // '</td> ';
                                        // echo '</tr>';
                                        // }

                                        if (isset($_GET['nome'])) {
                                            $filtroNome = $_GET['nome'];
                                        } else {
                                            $filtroNome = '';
                                        }

                                        if (isset($_GET['email'])) {
                                            $filtroEmail = $_GET['email'];
                                        } else {
                                            $filtroEmail = '';
                                        }

                                        if (isset($_GET['cpf'])) {
                                            $filtroCpf = $_GET['cpf'];
                                        } else {
                                            $filtroCpf = '';
                                        }

                                        // Modifique o loop foreach para verificar todos os critérios de busca
                                        foreach ($usuarios as $u) {
                                            echo '<tr class="border">';
                                            $idusuario = $u["idusuario"];
                                            $nome = $u["nome"];
                                            $perfil = $u["perfil"];
                                            $cpf = $u["cpf"];
                                            $email = $u["email"];
                                            $telefone = $u["telefone"];

                                            // Verifique se o nome corresponde ao critério de busca
                                            if (!empty($filtroNome) && stripos($nome, $filtroNome) === false) {
                                                continue; // Pula para o próximo usuário se não houver correspondência
                                            }

                                            // Verifique se o email corresponde ao critério de busca
                                            if (!empty($filtroEmail) && stripos($email, $filtroEmail) === false) {
                                                continue; // Pula para o próximo usuário se não houver correspondência
                                            }

                                            // Verifique se o email corresponde ao critério de busca
                                            if (!empty($filtroCpf) && stripos($cpf, $filtroCpf) === false) {
                                                continue; // Pula para o próximo usuário se não houver correspondência
                                            }

                                            // Se o usuário corresponder a todos os critérios, exiba-o
                                            echo ' <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#', $idusuario;
                                            ' </th>';
                                            echo '  <td class="align-middle py-5"> ', $nome;
                                            ' </td> ';
                                            echo '  <td class="align-middle py-5"> ', $cpf;
                                            ' </td> ';
                                            echo '  <td class="align-middle py-5">',  $telefone;
                                            ' </td> ';
                                            echo '  <td class="align-middle py-5"> ', $email;
                                            '</td> ';
                                            echo '  <td class="align-middle py-5"> ', $perfil;
                                            '</td> ';
                                            echo '<td class="align-middle py-5"> <a href="editarUsuario.php?id=' . $idusuario . '"><i class="fi fi-rr-pencil"></i></a><a style="margin:10px !important;" href="../../controller/ADMexcluirUsuarioByIdController.php?id=' . $idusuario . '"><i class="fi fi-rr-trash"></i></a></td>';


                                            echo '</tr>';
                                        }


                                        // foreach ($usuarios as $u) {
                                        //     if (stripos($u["nome"], $filtro) !== false) {
                                        //         echo '<tr class="border">';
                                        //         $idusuario = $u["idusuario"];
                                        //         $nome = $u["nome"];
                                        //         $perfil = $u["perfil"];
                                        //         $cpf = $u["cpf"];
                                        //         $email = $u["email"];
                                        //         $telefone = $u["telefone"];

                                        //         echo '<th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#', $idusuario, '</th>';
                                        //         echo '<td class="align-middle py-5">', $nome, '</td>';
                                        //         echo '<td class="align-middle py-5">', $cpf, '</td>';
                                        //         echo '<td class="align-middle py-5">', $telefone, '</td>';
                                        //         echo '<td class="align-middle py-5">', $email, '</td>';
                                        //         echo '<td class="align-middle py-5">', $perfil, '</td>';
                                        //         echo '</tr>';
                                        //     }
                                        // }
                                        ?>



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