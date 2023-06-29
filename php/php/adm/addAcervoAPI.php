<!-- API de livros  -->
<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['isbn'])) {
    // Obtém o código ISBN da URL
    $isbn = $_GET['isbn'];

    // Faz a requisição para a API do Open Library usando cURL
    $url = "https://openlibrary.org/api/books?bibkeys=ISBN:{$isbn}&jscmd=data&format=json";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($response, true);

    // Verifica se o livro foi encontrado
    if (!empty($data)) {
        $book_info = current($data);

        // Verifica se as informações estão presentes no array
        $title = isset($book_info["title"]) ? $book_info["title"] : "Informação indisponível";

        if (isset($book_info["authors"])) {
            $authors = implode(', ', array_column($book_info["authors"], "name"));
        } else {
            $authors = "Informação indisponível";
        }

        $publish_year = isset($book_info["publish_date"]) ? $book_info["publish_date"] : "Informação indisponível";

        $publisher = isset($book_info["publishers"][0]) ? $book_info["publishers"][0] : "Informação indisponível";

        $description = isset($book_info["description"]) ? $book_info["description"] : "Informação indisponível";

        $num_pages = isset($book_info["number_of_pages"]) ? $book_info["number_of_pages"] : "Informação indisponível";

        // $subjects = isset($book_info["subjects"]) ? implode(', ', $book_info["subjects"]) : "Informação indisponível";

        $cover = isset($book_info["cover"]["large"]) ? $book_info["cover"]["large"] : "";
    } else {
        $sem_lirvo = "Livro não encontrado.";
        $title = "Informação indisponível";
        $authors = "Informação indisponível";
        $publish_year = "Informação indisponível";
        $publisher = "Informação indisponível";
        $description = "Informação indisponível";
        $num_pages = "Informação indisponível";
        $subjects = "Informação indisponível";
        $cover = "";
    }
} else {
    $title = "";
    $authors = "";
    $publish_year = "";
    $publisher = "";
    $description = "";
    $num_pages = "";
    $subjects = "";
    $cover = "";
}
?>
<!-- Fim API -->


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
                                    <!-- API de livros  -->
                                    <form id="isbn" action="" class="collapse checkout_coupon mt-4 p-4 bg-white border" method="get">
                                        <div class="row d-flex">
                                            <p class="col-md-4 d-inline form-row form-row-first mb-3 mb-md-0">
                                                <input type="text" class="input-text form-control" placeholder="Código ISBN" name="isbn" id="isbn" required value="<?php echo isset($_GET['isbn']) ? $_GET['isbn'] : ''; ?>">
                                            </p>
                                            <p class="col-md-3 d-inline form-row form-row-last">
                                                <button type="submit" class="button form-control border-0 height-4 btn btn-dark rounded-0">Adicionar Informações</button>
                                            </p>
                                        </div>
                                    </form>
                                    <hr>

                                    <?php if (!empty($cover)) : ?>
                                        <?php
                                        $url = '../../controller/API_ADMcadastraLivroController.php?capa=' . urlencode($cover);

                                        ?>


                                    <?php else : ?>
                                        <?php
                                        $url = '../../controller/ADMcadastraLivroController.php'

                                        ?>
                                    <?php endif; ?>

                                    <!-- Formulario de cadastro -->
                                    <form action="<?php echo $url; ?>" method="post" enctype="multipart/form-data">

                                        <div class="row">
                                            <!-- Nome do livro (livro_nome) -->
                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="livro_nome" data-priority="10">
                                                <label for="livro_nome" class="form-label">Nome do livro *
                                                </label>
                                                <input type="text" class="input-text form-control" name="livro_nome" id="livro_nome" placeholder="Harry Potter e a Pedra Filosofal" value="<?php echo $title; ?>" autocomplete="given-name" autofocus="autofocus">
                                            </p>
                                            <!-- Nome do autor (autor) -->
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="autor" data-priority="20">
                                                <label for="autor" class="form-label">Autor</label>
                                                <input type="text" class="input-text form-control" name="autor" id="autor" placeholder="Nome do Autor" value="<?php echo $authors; ?>" autocomplete="family-name">
                                            </p>
                                            <!-- Nome do Genero -->
                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="genero" data-priority="10">
                                                <label for="genero" class="form-label">Gênero *
                                                </label>
                                                <select name="genero" id="genero" class="form-control country_to_state country_select  " tabindex="-1" aria-hidden="true">
                                                    <option value="">Escolha o genero</option>
                                                    <option value="Ação e Aventura">Ação e Aventura</option>
                                                    <option value="Didáticos e Escolares">Didáticos e Escolares</option>
                                                    <option value="Infantis">Infantis</option>
                                                    <option value="Romance">Romance</option>
                                                    <option value="Cursos">Cursos</option>
                                                    <option value="Gibis">Gibis</option>
                                                    <option value="Religião">Religião</option>
                                                    <option value="Culinária">Culinária</option>
                                                    <option value="Literatura de Cordel">Literatura de Cordel</option>
                                                    <option value="Literatura Brasileira">Literatura Brasileira</option>
                                                    <option value="Literatura Estrangeira">Literatura Estrangeira</option>
                                                    <option value="Ciências Humanas e Sociais">Ciências Humanas e Sociais</option>
                                                    <option value="Exatas e Tecnológicas">Exatas e Tecnológicas</option>
                                                    <option value="Ciências Biológicas">Ciências Biológicas</option>
                                                    <option value="Informática">Informática</option>
                                                    <option value="Outro Genero">Outros</option>                                                    
                                                </select>
                                            </p>
                                            <!-- Data do livro (info_ad1) -->
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="info_ad1" data-priority="20">
                                                <label for="info_ad1" class="form-label">Ano de lançamento *</label>
                                                <input type="text" class="input-text form-control" name="info_ad1" id="info_ad1" placeholder="Informe o Ano do livro ou a data" value="<?php echo $publish_year; ?>" autocomplete="family-name">
                                            </p>

                                            <!-- editora (editora) -->
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="billing_last_name" class="form-label">Editora *</label>
                                                <input type="text" class="input-text form-control" name="editora" id="billing_last_name" placeholder="Editora" value="" autocomplete="family-name">
                                            </p>
                                            <!--  -->
                                            <?php if (!empty($cover)) : ?>
                                                <label for="billing_last_name" class="form-label">Capa *</label> <img src="<?php echo $cover; ?>" alt="Capa Preview" style="max-width: 150px; padding:15px;">

                                                <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                    <label for="billing_company" class="form-label">
                                                        Idioma *</label>
                                                    <input type="text" class="input-text form-control" name="idioma" id="billing_company" placeholder="Idioma" value="" autocomplete="organization">
                                                </p>
                                            <?php else : ?>
                                                <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                    <label for="billing_last_name" class="form-label">Idioma *</label>
                                                    <input type="text" class="input-text form-control" name="idioma" id="billing_last_name" placeholder="Idioma" value="" autocomplete="family-name">
                                                </p>

                                                <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                    <label for="billing_company" class="form-label">
                                                        Capa *</label>
                                                    <input type="file" class="input-text form-control" name="capa" id="billing_company" placeholder="" value="" autocomplete="organization">

                                                </p>
                                            <?php endif; ?>


                                            <!-- Qunatidade de paginas (num_pa) -->
                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                <label for="billing_first_name" class="form-label">Quantidade de Páginas *
                                                </label>
                                                <input type="number" class="input-text form-control" min='1' name="num_pa" id="billing_first_name" placeholder="Escolha" value="" autocomplete="given-name" autofocus="autofocus">
                                            </p>

                                            <!-- Tipo de livro  -->
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="tipo_livro" class="form-label">Tipo de livro *</label>
                                                <select name="midia" id="tipo_livro" class="form-control country_to_state country_select  " tabindex="-1" aria-hidden="true">
                                                    <option value="">Escolha o tipo de livro</option>
                                                    <option value="1">Fisico</option>
                                                    <option value="2">Digital</option>
                                                    <option value="3">Fisico & Digital</option>
                                                </select>
                                            </p>



                                            <!-- Qunatidade de livros (quantidade) -->
                                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                <label for="billing_first_name" class="form-label">Quantidade *
                                                </label>
                                                <input type="number" class="input-text form-control" min='0' name="quantidade" id="billing_first_name" placeholder="Escolha" value="" autocomplete="given-name" autofocus="autofocus">
                                            </p>

                                            <!-- isbn -->
                                            <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                <label for="billing_last_name" class="form-label">ISBN *</label>
                                                <input type="text" class="input-text form-control" name="isbn" id="billing_last_name" placeholder="ISBN do livro" value="" autocomplete="family-name">
                                            </p>

                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-4d75 bg-white  mt-n-one">
                                                <div class="woocommerce-additional-fields">
                                                    <h3 class="mb-5 font-size-3">Sinopse</h3>
                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="col-12 mb-4d75 px-0 form-row notes" id="order_comments_field" data-priority="">
                                                            <label for="order_comments" class="form-label">Descrição sobre o livro</label>
                                                            <textarea name="sinopse" class="input-text form-control" id="order_comments" placeholder="Coloque o descrição do livro" rows="8" cols="5"></textarea>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-4d75 bg-white  mt-n-one">
                                                <div class="woocommerce-additional-fields">
                                                    <h3 class="mb-5 font-size-3">Sobre o Autor</h3>
                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="col-12 mb-4d75 px-0 form-row notes" id="order_comments_field" data-priority="">
                                                            <label for="order_comments" class="form-label">Descrição sobre o autor</label>
                                                            <textarea name="sobre_autor" class="input-text form-control" id="order_comments" placeholder="Coloque o descrição do autor" rows="8" cols="5"></textarea>
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
    </main>


    <hr>


    <?php
    include '../end/footer.php';
    ?>

    <?php
    include '../end/script.php';
    ?>