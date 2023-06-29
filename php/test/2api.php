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
    $title = $_GET['title'] ?? '';
    $authors = $_GET['authors'] ?? '';
    $publisher = $_GET['publisher'] ?? '';
    $pageCount = $_GET['pageCount'] ?? '';
    $description = $_GET['description'] ?? '';
    $coverId = $_GET['coverId'] ?? '';
    $error = $_GET['error'] ?? '';

    if ($error === 'true') {
        echo '<p>Não foi possível encontrar informações para o ISBN fornecido.</p>';
    }
    ?>

    <form action="2sAPI.php" method="get">
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn" value="<?php echo $isbn; ?>" required>

        <input type="submit" value="Buscar">
    </form>

    <?php if (!empty($isbn) && empty($error)) : ?>
        <h2><?php echo $title; ?></h2>
        <p>Autor(es): <?php echo $authors; ?></p>
        <p>Editora: <?php echo $publisher; ?></p>
        <p>Número de Páginas: <?php echo $pageCount; ?></p>
        <p>Descrição: <?php echo $description; ?></p>

        <!-- Exibição da imagem da capa -->
        <?php if (!empty($coverId)) : ?>
            <img src="https://covers.openlibrary.org/b/id/<?php echo $coverId; ?>-L.jpg" alt="Capa do Livro">
        <?php else : ?>
            <p>A capa deste livro não está disponível.</p>
        <?php endif; ?>
    <?php endif; ?>

</body>


</html>