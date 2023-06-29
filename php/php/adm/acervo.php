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

    $livros = $usuarioDAO->selecionaTdsLivro();
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
                        <!--  -->
                        <div class="tab-pane fade show active" id="pills-six-example1" role="tabpanel" aria-labelledby="pills-six-example1-tab">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-3">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Lista de Livros</h6>

                                <table class="table mb-0">
                                    <thead>
                                        <tr class="border">
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Livro</th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Quantidade
                                            </th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">ISBN
                                            </th>
                                            <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($livros as $p) {
                                            echo '<tr class="border">';
                                            echo '<th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">';
                                            echo '<div class="d-flex align-items-center">';
                                            echo '<a class="d-block" href="../id/index.php?id= '. $p["idacervo"]. ' ">';
                                            echo '<img style="max-width: 80px !important; max-height: 120px !important;" class="img-fluid" src="'. $p["capa"]. '" alt="Image-Description">';
                                            echo '</a>';
                                            echo '<div class="ml-xl-4">';
                                            echo '<div class="font-weight-normal">';
                                            echo '<a href="../id/index.php?id='. $p["idacervo"]. '"> '. $p["livro_nome"]. '</a>';
                                            echo '</div>';
                                            echo '<div class="font-size-2"><a href="../id/index.php?id='. $p["idacervo"]. '" class="text-gray-700" tabindex="0">'. $p["autor"]. '</a></div>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</th>';
                                            echo '<td class="align-middle py-5"> '. $p["quantidade"]. '</td>';
                                            echo '<td class="align-middle py-5 green">'. $p["isbn"]. '</td>';
                                            echo '<td class="align-middle py-5">';
                                            echo '<a href="../id/index.php?id='. $p["idacervo"]. '">';
                                            echo '<span>Ver Livro</span>';
                                            echo '</a>';
                                            echo '</td>';
                                            echo '</tr>';

                                            // echo " <td scope='row'><a class='text-heading font-semibold' href='#'>  {$p["nome"]} </a></td>";
                                            // echo "<td>  {$p["idUsuario"]} </td>";
                                            // echo "<td> {$p["email"]} </td>";
                                            // echo "<td> {$p["login"]} </td>";
                                            // echo "<td> {$p["idPerfil"]} </td>";
                                            // echo "<td class='text-end'><a href='#' class='btn btn-sm btn-neutral'>Alterar </a><button type='button' title='Apagar' class='btn btn-sm btn-square btn-neutral text-danger-hover'><i class='bi bi-trash'></i></button></td>";
                                            // echo '</tr>';
                                        }
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


    <?php
    include '../end/footer.php';
    ?>

    <?php
    include '../end/script.php';
    ?>