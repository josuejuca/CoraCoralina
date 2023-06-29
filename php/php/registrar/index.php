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
    include '../../php/end/header.php';
    ?>

    <div class="page-header border-bottom">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Criar Conta</h1>
                <nav class="woocommerce-breadcrumb font-size-2">
                    <a href="#" class="h-primary">Home</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                    <a href="#" class="h-primary">Conta</a>
                    <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Criar Conta
                </nav>
            </div>
        </div>
    </div>
    <div id="content" class="site-content space-bottom-3">
        <div class="col-full bg-white container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-6" class="post-6 page type-page status-publish hentry">
                        <header class="entry-header space-top-2 space-bottom-1 mb-2">
                            <h4 class="entry-title font-size-7 text-center">Registro</h4>
                        </header>

                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-info p-4 bg-white border">Ja possui conta?
                                    <a id="sidebarNavToggler" href="javascript:;" role="button" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500"> Entre</a>
                                </div>
                                <form action="../../controller/cadastraUsuarioController.php" method="post" class="checkout woocommerce-checkout row mt-8">
                                    <div style="margin: auto !important; padding: auto !important;" class="col2-set col-md-6 col-lg-7 col-xl-8 mb-6 mb-md-0" id="customer_details">
                                        <div class="px-4 pt-5 bg-white border">
                                            <div class="woocommerce-billing-fields">
                                                <h3 class="mb-4 font-size-3">Crie uma conta</h3>
                                                <div class="row">
                                                    <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                        <label for="billing_first_name" class="form-label">Nome *
                                                        </label>
                                                        <input type="text" class="input-text form-control" name="nome" id="billing_first_name" placeholder="Juca" value="" autocomplete="given-name" autofocus="autofocus">
                                                    </p>
                                                    <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                        <label for="billing_last_name" class="form-label">Telefone</label>
                                                        <input type="text" class="input-text form-control" name="telefone" id="telefone-input" placeholder="(61) 9 0000-0000" value="" autocomplete="family-name">
                                                    </p>

                                                    <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                        <label for="billing_first_name" class="form-label">CPF *
                                                        </label>
                                                        <input type="text" class="input-text form-control" name="cpf" id="cpf-input" placeholder="000.000.000-00">
                                                    </p>
                                                    <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                        <label for="billing_last_name" class="form-label">RG *</label>
                                                        <input type="text" class="input-text form-control" name="rg" id="rg-input" placeholder="0.000.000" value="" autocomplete="family-name">
                                                    </p>

                                                    <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required" id="billing_email_field" data-priority="110">
                                                        <label for="billing_email" class="form-label">Email *</label>
                                                        <input type="email" class="input-text form-control" name="email" id="billing_email" placeholder="etc.juca@gmail.com" value="" autocomplete="email">
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

                                                    <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                        <label for="billing_company" class="form-label">
                                                            Confirmar senha</label>
                                                        <input type="password" class="input-text form-control" name="billing_company" id="billing_company" placeholder="" value="" autocomplete="organization">
                                                    </p>

                                                </div>
                                                <button type="submit" class="btn btn-success">Cadastrar</button>

                                            </div>
                                        </div>
                                        <!-- <div class="px-4 pt-5 bg-white border border-top-0 mt-n-one">
                                            <div class="woocommerce-additional-fields">
                                                <h3 class="mb-4 font-size-3">Additional information</h3>
                                                <div class="woocommerce-additional-fields__field-wrapper">
                                                    <p class="col-12 mb-4d75 px-0 form-row notes"
                                                        id="order_comments_field" data-priority="">
                                                        <label for="order_comments" class="form-label">Order notes
                                                            (optional)</label>
                                                        <textarea name="order_comments" class="input-text form-control"
                                                            id="order_comments"
                                                            placeholder="Notes about your order, e.g. special notes for delivery."
                                                            rows="8" cols="5"></textarea>
                                                    </p>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>

                    </article>

                </main>

            </div>

        </div>

    </div>

    <hr>

    <?php
    include '../end/footer.php';
    ?>

    <?php
    include '../end/script.php';
    ?>