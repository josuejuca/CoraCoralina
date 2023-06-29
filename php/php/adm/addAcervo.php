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
                                <a class="nav-link d-flex align-items-center px-0 active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Menu Principal</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-two-example1-tab"
                                    data-toggle="pill" href="#" role="tab" aria-controls="pills-two-example1"
                                    aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Livros</span>
                                </a>
                            </li> -->
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" href="usuarios.php">
                                    <span class="font-weight-normal text-gray-600">Usuários</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Escolas</span>
                                </a>
                            </li> -->
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-six-example1-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-six-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Lista de Empréstimo</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-five-example1-tab" data-toggle="pill" href="#pills-five-example1" role="tab" aria-controls="pills-five-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Criar Usuários</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-six-example1-tab" data-toggle="pill" href="#novolivro" role="tab" aria-controls="pills-six-example1" aria-selected="false">
                                    <span class="font-weight-normal text-gray-600">Adicionar Livro</span>
                                </a>
                            </li>
                            <li class="nav-item mx-0">
                                <a class="nav-link d-flex align-items-center px-0" id="pills-six-example1-tab" data-toggle="pill" href="#" role="tab" aria-controls="pills-six-example1" aria-selected="false">
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
                        <!--  -->
                        <div class="tab-pane fade show active" id="novolivro" role="tabpanel" aria-labelledby="novolivro-tab">
                            <div class="border-bottom mb-6 pb-6 mb-lg-8 pb-lg-9">
                                <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9">
                                    <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Adicionar Livro
                                    </h6>

                                    <div class="woocommerce-info form-row bg-white ">Utilize o código ISBN do livro.&#160;
                                        <a class="showcoupon" data-toggle="collapse" href="#isbn" role="button" aria-expanded="false" aria-controls="collapseExample9">
                                            Adicionar código ISBN
                                        </a>

                                    </div>
                                    <form id="isbn" action="" class="collapse checkout_coupon mt-4 p-4 bg-white border" method="get">
                                        <div class="row d-flex">
                                            <p class="col-md-4 d-inline form-row form-row-first mb-3 mb-md-0">
                                                <input type="text" id="isbn_code" class="input-text form-control" placeholder="Código ISBN">
                                            </p>
                                            <p class="col-md-3 d-inline form-row form-row-last">
                                                <button type="submit" class="button form-control border-0 height-4 btn btn-dark rounded-0">Adicionar Informações</button>
                                            </p>
                                        </div>
                                    </form>
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
                                                        <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                            <label for="billing_first_name" class="form-label">Gênero *
                                                            </label>
                                                            <input type="text" class="input-text form-control" name="genero" id="billing_first_name" placeholder="Aventura" value="" autocomplete="given-name" autofocus="autofocus">
                                                        </p>
                                                        <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                            <label for="billing_last_name" class="form-label">Ano de lançamento *</label>
                                                            <input type="text" class="input-text form-control" name="data_livro" id="billing_last_name" placeholder="Informe o Ano do livro ou a data" value="<?php echo $publish_year; ?>" autocomplete="family-name">
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
                                </div>
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