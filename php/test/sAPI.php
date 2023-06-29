<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $isbn = $_GET['isbn'] ?? '';

    if (!empty($isbn)) {
        $url = "https://openlibrary.org/api/books?bibkeys=ISBN:$isbn&format=json&jscmd=data";
        $response = file_get_contents($url);

        if ($response !== false) {
            $bookData = json_decode($response, true);

            // Verifica se existem informações disponíveis para o ISBN fornecido
            if (!empty($bookData["ISBN:$isbn"])) {
                $book = $bookData["ISBN:$isbn"];

                $title = $book['title'] ?? '';
                $authors = $book['authors'][0]['name'] ?? '';
                $publisher = $book['publishers'][0]['name'] ?? '';
                $pageCount = $book['number_of_pages'] ?? '';
                $description = $book['description'] ?? '';
                $coverUrls = $book['cover']['large'] ?? '';

                // HTML da página
    ?>

                <!DOCTYPE html>
                <html>

                <head>
                    <title>Detalhes do Livro</title>
                </head>

                <body>
                    <h2><?php echo $title; ?></h2>
                    <p>Autor(es): <?php echo $authors; ?></p>
                    <p>Editora: <?php echo $publisher; ?></p>
                    <p>Número de Páginas: <?php echo $pageCount; ?></p>
                    <p>Descrição: <?php echo $description; ?></p>

                    <?php if (!empty($coverUrls)) : ?>
                        <img src="<?php echo $coverUrls[0]; ?>" alt="Capa do Livro">
                    <?php else : ?>
                        <p>A capa deste livro não está disponível.</p>
                    <?php endif; ?>
                </body>

                </html>

    <?php
            } else {
                echo 'Não foi possível encontrar informações para o ISBN fornecido.';
                
            }
        } else {
            echo 'Ocorreu um erro ao acessar a API.';
        }
    }

    ?>

</body>

</html>