<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Minha Conta | Cora Coralina</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="../../assets/img/favicon.png"> -->

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

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
    session_start();
    include '../../view/validaLogin.php';
    ?>

    <?php
    // Inclua o arquivo usuarioDAO.php e crie uma instância do objeto UsuarioDAO
    require_once '../../dao/usuarioDAO.php';
    $usuarioDAO = new UsuarioDAO();

    // Verifique se o usuário está logado e se o ID do usuário está definido na $_SESSION
    if (isset($_SESSION['idusuario'])) {
        $idUsuario = $_SESSION['idusuario'];

        // Chame a função selecionaID() para obter as informações do usuário com base no ID
        $usuario = $usuarioDAO->selecionaID($idUsuario);

        // Verifique se o usuário foi encontrado antes de exibir o formulário com os valores
        if ($usuario) {
            // Atribua os valores retornados às variáveis
            $nome = $usuario['nome'];
            $email = $usuario['email'];
            $cpf = $usuario['cpf'];
            $rg = $usuario['rg'];
            // ... atribua outras informações do usuário conforme necessário

            // Agora você pode usar essas variáveis nos campos de entrada do formulário
        }
    }
    ?>
    
    <?php
    include '../../php/end/header.php';
    ?>




    <main id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 border-right">
                    <h6 class="font-weight-medium font-size-7 pt-5 pt-lg-8  mb-5 mb-lg-7">Minha Conta</h6>
                    <div class="tab-wrapper">
                        <ul class="my__account-nav nav flex-column mb-0" role="tablist" id="pills-tab">
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0 active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Menu Principal</span>
                                </a>
                            </li>
                            <?php
                            if ($_SESSION["perfil_idperfil"] == 1) {
                                // Usuário está logado e tem permissão de administrador
                                echo '<li class="nav-item mx-0">';
                                echo '<a class="nav-link d-flex align-items-center px-0 active" href="../adm/index.php">';
                                echo '<span class="font-weight-normal text-gray-600">Painel Administrativo</span>';
                                echo '</a>';
                                echo '</li>';
                            } else {
                                // Usuário está logado, mas não tem permissão de administrador                                
                            }
                            ?>
                            <?php
                            if ($_SESSION["perfil_idperfil"] == 2) {
                                // Usuário está logado e tem permissão de administrador
                                echo '<li class="nav-item mx-0">';
                                echo '<a class="nav-link d-flex align-items-center px-0 active" href="../adm/index.php">';
                                echo '<span class="font-weight-normal text-gray-600">Painel do funcionário</span>';
                                echo '</a>';
                                echo '</li>';
                            } else {
                                // Usuário está logado, mas não tem permissão de administrador                                
                            }
                            ?>

                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Meus Livros</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Downloads</span>
                                </a>
                            </li> -->
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Escolas</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-five-example1-tab" data-toggle="pill" href="#pills-five-example1" role="tab" aria-controls="pills-five-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Dados da conta</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-six-example1-tab" data-toggle="pill" href="#pills-six-example1" role="tab" aria-controls="pills-six-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Livros favoritos</span>
                                </a>
                            </li> -->
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="../../controller/excluirUsuarioByIdController.php?id=<?php echo $idUsuario ?>" role="tab" aria-controls="pills-six-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Apagar a conta</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="#">
                                    <span class="font-weight-normal text-gray-600">Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                            <div class="pt-5 pt-lg-8 pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3 mb-xl-1">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Dashboard</h6>
                                <div class="ml-lg-1 mb-4">
                                    <span class="font-size-22">Olá <?php echo $usuario["nome"] ?></span>
                                    <span class="font-size-2"> (não é o <?php echo $usuario["nome"] ?> ? <a class="link-black-100" href="../../controller/logoffController.php">sair</a>)</span>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-0 font-size-2 ml-lg-1 text-gray-600">Bem vindo ao Cora Coralina esse é
                                        o painel do usuario nele você vai conseguir <span class="text-dark">gerenciar a
                                            conta na plataforma</p>
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
                                            <a href="#" class="btn btn-primary rounded-circle px-4 mb-2">
                                                <span class="flaticon-user-1 font-size-10 btn-icon__inner "></span>
                                            </a>
                                            <div class="font-size-3 mb-xl-1">Dados da conta</div>
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
                        <div class="tab-pane fade" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Meus Livros</h6>
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
                        <div class="tab-pane fade" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Downloads</h6>
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
                                            <td class="align-middle py-5 green">Disponível</td>
                                            <td class="align-middle py-5">Código limpo</td>
                                            <td class="align-middle py-5">
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-dark rounded-0 btn-wide font-weight-medium">Baixar
                                                        Livro
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
                        <!-- Editar conta -->
                        <div class="tab-pane fade" id="pills-five-example1" role="tabpanel" aria-labelledby="pills-five-example1-tab">
                            <div class="border-bottom mb-6 pb-6 mb-lg-8 pb-lg-9">
                                <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9">
                                    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Dados da conta
                                    </h6>
                                    <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Editar Conta</div>
                                    <form action="../../controller/alterarUsuarioController.php" method="post">
                                        <div class="row">
                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                <label for="billing_first_name" class="form-label">Nome *
                                                </label>
                                                <input type="text" class="input-text form-control" name="nome" id="billing_first_name" placeholder="Nome" value="<?php echo $usuario["nome"] ?>" autocomplete="given-name" autofocus="autofocus">
                                            </p>
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="billing_last_name" class="form-label">Telefone</label>
                                                <input type="text" class="input-text form-control" name="telefone" id="telefone-input" placeholder="(61) 9 0000-0000" value="<?php echo $usuario["telefone"] ?>" autocomplete="family-name">
                                            </p>

                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="" data-priority="10">
                                                <label for="billing_first_name" class="form-label">CPF *
                                                </label>
                                                <input type="text" class="input-text form-control" name="cpf" id="cpf-input" placeholder="000.000.000-00" value="<?php echo $usuario["cpf"] ?>" autocomplete="given-name" autofocus="autofocus">
                                            </p>
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="billing_last_name" class="form-label">RG *</label>
                                                <input type="text" class="input-text form-control" name="rg" id="rg-input" placeholder="0.000.000" value="<?php echo $usuario["rg"] ?>" autocomplete="family-name">
                                            </p>

                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_email_field" data-priority="110">
                                                <label for="billing_email" class="form-label">Email *</label>
                                                <input type="email" class="input-text form-control" name="email" id="billing_email" placeholder="etc.juca@gmail.com" value="<?php echo $usuario["email"] ?>" autocomplete="email">
                                            </p>

                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_email_field" data-priority="110">
                                                <label for="billing_email" class="form-label">Data de Nascimento
                                                    *</label>
                                                <input type="date" class="input-text form-control" name="dt_nasc" id="billing_email" placeholder="" value="<?php echo $usuario["dt_nasc"] ?>">
                                            </p>



                                            <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                <label for="billing_company" class="form-label">
                                                    Endereço</label>
                                                <input type="text" class="input-text form-control" name="endereco" id="billing_company" placeholder="" value="<?php echo $usuario["endereco"] ?>" autocomplete="organization">
                                            </p>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="ml-3">
                                                <button type="submit" class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390">Atualizar
                                                    Conta</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3">
                                <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Mudar Senha</div>
                                <form action="../../controller/alterarSenhaController.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="js-form-message">
                                                <label for="exampleFormControlInput5">Senha antiga</label>
                                                <input type="password" class="form-control rounded-0" name="senha_atual" id="exampleFormControlInput5" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="js-form-message">
                                                <label for="exampleFormControlInput6">Nova senha</label>
                                                <input type="password" class="form-control rounded-0" name="nova_senha" id="exampleFormControlInput6" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="js-form-message">
                                                <label for="exampleFormControlInput7">Confirmar senha</label>
                                                <input type="password" class="form-control rounded-0" name="confirmar_senha" id="exampleFormControlInput7" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <button type="submit" class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390">Salvar</button>
                                        </div>
                                    </div>
                                </form>
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


    <?php
    include '../end/footer.php';
    ?>

    <?php
    include '../end/script.php';
    ?>