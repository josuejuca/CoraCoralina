<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Criar Conta | Conta Coralina</title>

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

<body class="right-sidebar woocommerce-checkout">
    <?php
    session_start();
    
  
    ?>


    <?php
    include '../../php/end/header.php';
    ?>

    <div class="page-header border-bottom">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">RECUPERAR SENHA</h1>
                <nav class="woocommerce-breadcrumb font-size-2">
                    <a href="#" class="h-primary">CONTA</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                    <a href="#" class="h-primary">RECUPERAR SENHA</a>
                    <!-- <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Fazer Emprestimo -->
                </nav>
            </div>
        </div>
    </div>


    <main id="content">
        <div class="container">
            <div class="space-bottom-2 space-bottom-lg-4">
                <form action="https://formspree.io/f/mayzrzwn" method="post">
                    <div class="pb-lg-2">
                        <div class="py-4 pt-lg-8 pb-lg-7">
                            <h6 class="font-weight-medium font-size-7 text-center">Recuperar Senha</h6>
                        </div>
                        <div class="max-width-770 mx-auto">
                            <p class="font-size-2 text-center text-lh-1dot72 text-gray-600 mb-6"></p>
                        </div>
                        <div class="row mb-6">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <div class="js-form-message">
                                    <label for="exampleFormControlInput1">E-mail</label>
                                    <?php // echo $isbn; ?>
                                    <input type="email" class="form-control rounded-0" name="email" value="" aria-label="Jack Wayley" id="exampleFormControlInput1" required data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="js-form-message">
                                    <label for="exampleFormControlInput2">CPF do leitor</label>
                                    <input type="text" class="form-control rounded-0 font-size pl-3 placeholder-color-3" id="exampleFormControlInput2" name="cpf" aria-label="000.000.000-00" required placeholder="000.000.000-00" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-lg-start">
                            <button type="submit" class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-250">Finalizar</button>
                        </div>
                    </div>
                </form>
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