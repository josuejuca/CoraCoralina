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

<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>
    <form method="GET">
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn" required value="<?php echo isset($_GET['isbn']) ? $_GET['isbn'] : ''; ?>">
        <button type="submit">Buscar</button>
    </form>
    

    <?php // echo $sem_lirvo; ?>
    <form>
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="<?php echo $title; ?>" readonly><br>

        <label for="authors">Autores:</label>
        <input type="text" name="authors" id="authors" value="<?php echo $authors; ?>" readonly><br>

        <label for="publish_year">Ano de Publicação:</label>
        <input type="text" name="publish_year" id="publish_year" value="<?php echo $publish_year; ?>" readonly><br>

        <label for="publisher">Editora:</label>
        <input type="text" name="publisher" id="publisher" value="<?php echo $publisher; ?>" readonly><br>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description" readonly><?php echo $description; ?></textarea><br>

        <label for="num_pages">Número de Páginas:</label>
        <input type="text" name="num_pages" id="num_pages" value="<?php echo $num_pages; ?>" readonly><br>

        <label for="subjects">Assuntos:</label>
        <input type="text" name="subjects" id="subjects" value="<?php echo $subjects; ?>" readonly><br>

        <?php if (!empty($cover)): ?>
            <label for="cover">Capa:</label>
            <img src="<?php echo $cover; ?>" alt="Capa do Livro"><br>
        <?php endif; ?>
    </form>
</body>
</html>
