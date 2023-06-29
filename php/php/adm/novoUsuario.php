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
    $usuarios = $usuarioDAO->selecionaTds();
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
                                <a class="nav-link d-flex align-items-center px-0" href="escolas.php" >
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
                        <!-- Menu Inicial -->
                        <div class="tab-pane fade" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                            <div class="pt-5 pt-lg-8 pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3 mb-xl-1">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Menu Principal</h6>
                                <div class="ml-lg-1 mb-4">

                                    <?php
                                    // if (isset($_SESSION["email"])) {
                                    //     echo '<span class="font-size-22">Olá ', $_SESSION["email"],'</span>';                                        
                                    //     echo '<span class="font-size-2"> (não é o', $_SESSION["email"],'? <a class="link-black-100" href="../../controller/logoffController.php">
                                    //     sair</a>)</span>';
                                    // }

                                    if (isset($_SESSION["nome"])) {
                                        echo '<span class="font-size-22">Olá ', $_SESSION["nome"], '</span>';
                                        echo '<span class="font-size-2"> (não é o ', $_SESSION["nome"], '? <a class="link-black-100" href="../../controller/logoffController.php">sair</a>)</span>';
                                    }

                                    ?>

                                    <!-- <span class="font-size-22">Olá Juca</span>
                                    <span class="font-size-2"> (não é o Juca? <a class="link-black-100" href="#">
                                            sair</a>)</span> -->
                                </div>
                                <div class="mb-4">
                                    <p class="mb-0 font-size-2 ml-lg-1 text-gray-600">Bem-vindo ao painel de
                                        administrador, nesse painel você poderá criar usuários e fazer toda a gestão no
                                        acervo da biblioteca. </p>
                                </div>
                                <!-- <div class="row no-gutters row-cols-1 row-cols-md-2 row-cols-lg-3">
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
                                            <a href="#todos-usuarios" class="btn btn-primary rounded-circle px-4 mb-2">
                                                <span class="flaticon-user-1 font-size-10 btn-icon__inner "></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Usuários</div>
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
                                </div> -->
                            </div>
                        </div>
                        <!-- Listar Livro -->
                        <div class="tab-pane fade" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Todos os Livros</h6>
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
                        <!-- Listar Escolas -->
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
                        <!-- Cadastro Usuário -->
                        <div class="tab-pane fade show active" id="pills-five-example1" role="tabpanel" aria-labelledby="pills-five-example1-tab">
                            <div class="border-bottom mb-6 pb-6 mb-lg-8 pb-lg-9">
                                <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9">
                                    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Criar Usuário
                                    </h6>
                                    <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Nova Conta</div>
                                    <form action="../../controller/ADMcadastraUsuarioController.php" method="post">
                                        <div class="row">
                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                <label for="billing_first_name" class="form-label">Nome *
                                                </label>
                                                <input type="text" class="input-text form-control" name="nome" id="billing_first_name" placeholder="Nome do usuario" value="" autocomplete="given-name" autofocus="autofocus">
                                            </p>
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="billing_last_name" class="form-label">Telefone</label>
                                                <input type="text" class="input-text form-control" name="telefone" id="billing_last_name" placeholder="(61) 9 0000-0000" value="" autocomplete="family-name">
                                            </p>
                                            <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                <label for="tipo_conta" class="form-label">Tipo de Conta</label>
                                                <select name="perfil_idperfil" id="tipo_conta" class="form-control country_to_state country_select  " tabindex="-1" aria-hidden="true">
                                                    <option value="">Escolha o tipo de conta</option>
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Funcionario</option>
                                                    <option value="3">Comunidade</option>
                                                </select>
                                            </p>
                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                <label for="billing_first_name" class="form-label">CPF *
                                                </label>
                                                <input type="text" class="input-text form-control" name="cpf" id="billing_first_name" placeholder="000.000.000-00" value="" autocomplete="given-name" autofocus="autofocus">
                                            </p>
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="billing_last_name" class="form-label">RG *</label>
                                                <input type="text" class="input-text form-control" name="rg" id="billing_last_name" placeholder="0.000.000" value="" autocomplete="family-name">
                                            </p>
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_email_field" data-priority="110">
                                                <label for="billing_email" class="form-label">Email *</label>
                                                <input type="email" class="input-text form-control" name="email" id="billing_email" placeholder="exemplo@gmail.com" value="" autocomplete="email">
                                            </p>

                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_email_field" data-priority="110">
                                                <label for="billing_email" class="form-label">Data de Nascimento
                                                    *</label>
                                                <input type="date" class="input-text form-control" name="dt_nasc" id="billing_email" placeholder="" value="" autocomplete="email">
                                            </p>
                                            <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                <label for="billing_company" class="form-label">
                                                    Endereço</label>
                                                <input type="text" class="input-text form-control" name="endereco" id="billing_company" placeholder="" value="" autocomplete="organization">
                                            </p>

                                            <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                <label for="billing_company" class="form-label">
                                                    Senha</label>
                                                <input type="password" class="input-text form-control" name="senha" id="billing_company" placeholder="" value="" autocomplete="organization">
                                            </p>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="ml-3">
                                                <button type="submit" class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390">Criar
                                                    Conta</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- <div class="pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3">
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

                                </div>
                            </div> -->
                        </div>
                        <!--  -->
                        <div class="tab-pane fade" id="novolivro" role="tabpanel" aria-labelledby="novolivro-tab">
                            <div class="border-bottom mb-6 pb-6 mb-lg-8 pb-lg-9">
                                <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9">
                                    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Adicionar Livro
                                    </h6>
                                    <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Novo Livro</div>
                                    <form action="../../controller/ADMcadastraLivroController.php" method="post">
                                        <div class="row">
                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                <label for="billing_first_name" class="form-label">Nome do livro *
                                                </label>
                                                <input type="text" class="input-text form-control" name="livro" id="billing_first_name" placeholder="Harry Potter e a Pedra Filosofal" value="" autocomplete="given-name" autofocus="autofocus">
                                            </p>
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="billing_last_name" class="form-label">Autor</label>
                                                <input type="text" class="input-text form-control" name="autor" id="billing_last_name" placeholder="J. K. Rowling" value="" autocomplete="family-name">
                                            </p>
                                            <!-- <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                <label for="tipo_conta" class="form-label">Tipo de Conta</label>
                                                <select name="perfil_idperfil" id="tipo_conta" class="form-control country_to_state country_select  " tabindex="-1" aria-hidden="true">
                                                    <option value="">Escolha o tipo de conta</option>
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Funcionario</option>
                                                    <option value="3">Comunidade</option>
                                                </select>
                                            </p> -->
                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                <label for="billing_first_name" class="form-label">Gênero *
                                                </label>
                                                <input type="text" class="input-text form-control" name="genero" id="billing_first_name" placeholder="Aventura" value="" autocomplete="given-name" autofocus="autofocus">
                                            </p>
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="billing_last_name" class="form-label">Ano de lançamento *</label>
                                                <input type="text" class="input-text form-control" name="data_livro" id="billing_last_name" placeholder="1997" value="" autocomplete="family-name">
                                            </p>

                                            <!--  -->


                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                <label for="billing_first_name" class="form-label">Capa *
                                                </label>
                                                <input type="file" class="input-text form-control" name="capa" id="billing_first_name" placeholder="Escolha" value="" autocomplete="given-name" autofocus="autofocus">
                                            </p>
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="billing_last_name" class="form-label">Editora *</label>
                                                <input type="text" class="input-text form-control" name="editora" id="billing_last_name" placeholder="Editora" value="" autocomplete="family-name">
                                            </p>

                                            <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                <label for="billing_company" class="form-label">
                                                Idioma *</label>
                                                <input type="text" class="input-text form-control" name="endereco" id="billing_company" placeholder="" value="" autocomplete="organization">
                                            </p>

                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                <label for="billing_first_name" class="form-label">Quantidade *
                                                </label>
                                                <input type="number" class="input-text form-control" min='1' name="quantidade" id="billing_first_name" placeholder="Escolha" value="" autocomplete="given-name" autofocus="autofocus">
                                            </p>

                                            
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="billing_last_name" class="form-label"> *</label>
                                                <input type="text" class="input-text form-control" name="editora" id="billing_last_name" placeholder="Editora" value="" autocomplete="family-name">
                                            </p>

                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-4d75 bg-white  mt-n-one">
                                                <div class="woocommerce-additional-fields">
                                                    <h3 class="mb-5 font-size-3">Sinopse</h3>
                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="col-12 mb-4d75 px-0 form-row notes" id="order_comments_field" data-priority="">
                                                            <label for="order_comments" class="form-label">Resenha sobre o livro</label>
                                                            <textarea name="sinopse" class="input-text form-control" id="order_comments" placeholder="Harry Potter é um garoto cujos pais, feiticeiros, foram assassinados por um poderosíssimo bruxo quando ele ainda era um bebê. Ele foi levado, então, para a casa dos tios que nada tinham a ver com o sobrenatural. Pelo contrário. Até os 10 anos, Harry foi uma espécie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no país das maravilhas, que o conduz a um mundo mágico. Descobre sua verdadeira história e seu destino: ser um aprendiz de feiticeiro até o dia em que terá que enfrentar a pior força do mal, o homem que assassinou seus pais. O menino de olhos verde, magricela e desengonçado, tão habituado à rejeição, descobre, também, que é um herói no universo dos magos. Potter fica sabendo que é a única pessoa a ter sobrevivido a um ataque do tal bruxo do mal e essa é a causa da marca em forma de raio que ele carrega na testa. Ele não é um garoto qualquer, ele sequer é um feiticeiro qualquer ele é Harry Potter, símbolo de poder, resistência e um líder natural entre os sobrenaturais. A fábula, recheada de fantasmas, paredes que falam, caldeirões, sapos, unicórnios, dragões e gigantes, não é, entretanto, apenas um passatempo." rows="8" cols="5"></textarea>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="ml-3">
                                                <button type="submit" class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390">Adicionar Livro</button>
                                            </div>
                                        </div>
                                    </form>
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