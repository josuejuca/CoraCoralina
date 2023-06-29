<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia - Cora Coralina</title>


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
    include '../../php/end/header.php';
    ?>


    <!-- Main -->

    <main id="content">
        <div class="container">
            <div class="py-4 py-lg-5 py-xl-8">
                <h6 class="font-weight-medium font-size-7 font-size-xs-25 text-center">Manual do usuário</h6>
            </div>
            <div class="col-lg-8 mx-auto">
                <div class="space-bottom-2 space-bottom-lg-3 faq-accordion">
                    <div class="pb-lg-1">
                        <div class="mb-8 pb-1">
                            <h6 class="font-weight-medium font-size-4 mb-5">Administrador / Funcionário</h6>

                            <div id="basicsAccordion">

                                <div class="card rounded-0 border-0">
                                    <div class="card-collapse card-header p-0 bg-transparent border-bottom-0" id="basicsHeadingOne">
                                        <button type="button" class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true" aria-controls="basicsCollapseOne">
                                            <span class="mx-md-1">Cadastrar Usuário</span>
                                            <svg class="minus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                            </svg>
                                            <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="basicsCollapseOne" class="collapse show" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                        <div class="card-body p-3 p-md-4">
                                            <div class="mx-md-1">
                                                <p class="mb-4 pb-1 font-size-2">Tutorial com foto de como fazer essa ação</p>
                                                <!-- <span class="font-size-2">Tristique parturient nulla ullamcorper at ullamcorper non orci iaculis neque augue.</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div>
                            <h6 class="font-weight-medium font-size-4 mb-5">Leitor</h6>

                            <div id="basicsAccordion1">

                                <div class="card rounded-0 border-0">
                                    <div class="card-collapse card-header p-0 bg-transparent border-bottom-0" id="basicsHeadingFive">
                                        <button type="button" class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="true" aria-controls="basicsCollapseFive">
                                            <span class="mx-md-1">Buscar Livro</span>
                                            <svg class="minus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                            </svg>
                                            <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="basicsCollapseFive" class="collapse show" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion1">
                                        <div class="card-body p-3 p-md-4">
                                            <div class=" mx-md-1">
                                                <p class="mb-4 pb-1 font-size-2">Tutorial com foto de como fazer essa ação.</p>
                                                <!-- <span class="font-size-2">Tristique parturient nulla ullamcorper at ullamcorper non orci iaculis neque augue.</span> -->
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
    <!-- // main -->

    <?php
    include '../end/footer.php';
    ?>

    <?php
    include '../end/script.php';
    ?>