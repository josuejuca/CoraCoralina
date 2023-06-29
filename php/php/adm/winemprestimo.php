<!DOCTYPE html>
<html lang="en">

<head>

    <title>Emprestimo</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- <link rel="shortcut icon" href="../../assets/img/favicon.png"> -->
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/5328/5328095.png" type="image/x-icon">
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
    // Inclua o arquivo usuarioDAO.php e crie uma instância do objeto UsuarioDAO
    require_once '../../dao/usuarioDAO.php';
    $usuarioDAO = new UsuarioDAO();

    // Verifique se o ID do usuário está definido na URL
    if (isset($_GET["id"])) {
        $idem = $_GET["id"];

        // Chame a função selecionaID() para obter as informações do usuário com base no ID
        $emprestimo = $usuarioDAO->selecionaIDEmprestimo($idem);

        // Verifique se o usuário foi encontrado antes de exibir o formulário com os valores
        if ($emprestimo) {
            // Atribua os valores retornados às variáveis
            // $perfil_edit = $emprestimo['perfil_idperfil'];
            // $nome = $emprestimo['nome'];
            // $email = $emprestimo['email'];
            // $cpf = $emprestimo['cpf'];
            // $rg = $emprestimo['rg'];

            $data = $emprestimo['data'];
            $idemprestimo = $emprestimo['idemprestimo'];

            $dataObjeto = new DateTime($data);
            $dataFormatada = $dataObjeto->format('d/m/Y');
            // ... atribua outras informações do usuário conforme necessário
            $livro  = $emprestimo['livro_nome'];
            $status = $emprestimo['status'];
            // Agora você pode usar essas variáveis nos campos de entrada do formulário
            $leitor  = $emprestimo['nome'];
            $cpf = $emprestimo['cpf'];
            $telefone = $emprestimo['telefone'];
            $editora = $emprestimo['editora'];
            $isbn = $emprestimo['isbn'];
            $autor = $emprestimo['autor'];

            $idacervo = $emprestimo['idacervo'];
            
        } else {
            // Caso o usuário não seja encontrado, você pode redirecionar para uma página de erro ou fazer alguma outra ação adequada
            echo "Usuário não encontrado.";
            exit;
        }
    } else {
        // Caso o ID do usuário não esteja definido na URL, você pode redirecionar para uma página de erro ou fazer alguma outra ação adequada
        echo "ID do emprestimo não fornecido.";
        exit;
    }
    ?>


    <?php
    include '../../php/end/header.php';
    ?>
    <main id="content">
        <div class="space-bottom-3">
            <div class="container">
                <div class="py-5 py-lg-7">
                    <h6 class="font-weight-medium font-size-7 text-center mt-lg-1">Informações do emprestimo</h6>
                </div>
                <div class="max-width-890 mx-auto">
                    <div class="bg-white pt-6 border">
                        <h6 class="font-size-3 font-weight-medium text-center mb-4 pb-xl-1">Emprestimo realizado com sucesso!</h6>
                        <div class="border-bottom mb-5 pb-5 overflow-auto overflow-md-visible">
                            <div class="pl-3">
                                <table class="table table-borderless mb-0 ml-1">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="font-size-2 font-weight-normal py-0">ID:</th>
                                            <th scope="col" class="font-size-2 font-weight-normal py-0">Data:</th>
                                            <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-center">Status: </th>
                                            <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-right pr-md-9">Leitor:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="pr-0 py-0 font-weight-medium"><?php echo $idemprestimo; ?></th>
                                            <td class="pr-0 py-0 font-weight-medium"><?php echo $dataFormatada; ?></td>
                                            <td class="pr-0 py-0 font-weight-medium text-md-center"><?php echo $status; ?></td>
                                            <td class="pr-md-4 py-0 font-weight-medium text-md-right"><?php echo $leitor; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="border-bottom mb-5 pb-6">
                            <div class="px-3 px-md-4">
                                <div class="ml-md-2">
                                    <h6 class="font-size-3 on-weight-medium mb-4 pb-1">Sobre o livro</h6>
                                    <div class="d-flex justify-content-between mb-4">
                                        <div class="d-flex align-items-baseline">
                                            <div>
                                                <h6 class="font-size-2 font-weight-normal mb-1"><!-- Nome do livro --> <?php echo $livro; ?></h6>
                                            </div>
                                        </div>
                                        <span class="font-weight-medium font-size-2"><a href="">Ver Livro</a></span>
                                    </div>
                                    <ul class="list-unstyled px-3 pl-md-5 pr-md-4 mb-0">
                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium font-size-2">ISBN:</span>
                                            <span class="font-weight-medium font-size-2"><!--ISBN --><?php echo $isbn; ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium font-size-2">Autor:</span>
                                            <span class="font-weight-medium font-size-2"><!--Autor --><?php echo $autor; ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between pt-2">
                                            <span class="font-weight-medium font-size-2">Editora:</span>
                                            <span class="font-weight-medium font-size-2"><!-- Editora --><?php echo $editora; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-5 pb-6">
                            <div class="px-3 px-md-4">
                                <div class="ml-md-2">
                                    <h6 class="font-size-3 on-weight-medium mb-4 pb-1">Sobre o Leitor</h6>
                                    <ul class="list-unstyled px-3 pl-md-5 pr-md-4 mb-0">
                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium font-size-2">Nome:</span>
                                            <span class="font-weight-medium font-size-2"><!--Nome --><?php echo $leitor; ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between py-2">
                                            <span class="font-weight-medium font-size-2">CPF:</span>
                                            <span class="font-weight-medium font-size-2"><!--CPF --><?php echo $cpf; ?></span>
                                        </li>
                                        <li class="d-flex justify-content-between pt-2">
                                            <span class="font-weight-medium font-size-2">Telefone:</span>
                                            <span class="font-weight-medium font-size-2"><!-- Telefone --><?php echo $telefone; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <p>aqui</p> -->
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