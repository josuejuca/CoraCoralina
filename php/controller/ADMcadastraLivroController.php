<?php
session_start();

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php'; // Conexão com o banco de dados

//dados do formulário
$livro_nome = $_POST["livro_nome"];
$quantidade = $_POST["quantidade"];
$midia = $_POST["midia"];
$isbn = $_POST["isbn"];
$editora = $_POST["editora"];
$sobre_autor = $_POST["sobre_autor"];
$idioma = $_POST["idioma"];
$num_pa = $_POST["num_pa"];
$info_ad1 = $_POST["info_ad1"];
$autor = $_POST["autor"];
$genero = $_POST["genero"];
$sinopse = $_POST["sinopse"];
$data_cadastro = date('Y-m-d H:i:s');
// Informação do usuário
$idusuario = $_SESSION["idusuario"];

// Verifica se um arquivo foi enviado
if (isset($_FILES["capa"]) && $_FILES["capa"]["error"] == 0) {
    $upload_dir = __DIR__ . '/../assets/img/capa/'; // Substitua pelo diretório correto
    $filename = basename($_FILES["capa"]["name"]);
    $target_path = $upload_dir . $filename;

    // Move o arquivo para o diretório de destino
    if (move_uploaded_file($_FILES["capa"]["tmp_name"], $target_path)) {
        // Arquivo salvo com sucesso, agora você pode armazenar o caminho em uma variável
        $caminho_capa = '../../assets/img/capa/' . $filename;

        // Crie um objeto LivroDTO e defina os valores
        $usuarioDTO = new LivroDTO;
        $usuarioDTO->setlivro($livro_nome);
        $usuarioDTO->setAutor($autor);
        $usuarioDTO->setGenero($genero);
        $usuarioDTO->setDataLivro($info_ad1);
        $usuarioDTO->setSinopse($sinopse);
        $usuarioDTO->setDataCadastro($data_cadastro);
        $usuarioDTO->setEditora($editora);
        $usuarioDTO->setMidia($midia);
        $usuarioDTO->setISBN($isbn);
        $usuarioDTO->setIdioma($idioma);
        $usuarioDTO->setNum_pa($num_pa);
        $usuarioDTO->setCapa($caminho_capa);
        $usuarioDTO->setSobre_autor($sobre_autor);
        $usuarioDTO->setQuantidade($quantidade);
        $usuarioDTO->setInfo_ad1($info_ad1);
        $usuarioDTO->setUsuarioIdusuario($idusuario);

        $usuarioDAO = new usuarioDAO();
        $sucesso = $usuarioDAO->salvarLivro($usuarioDTO);

        // Verifica se o livro foi salvo com sucesso
        if ($sucesso) {
            // Livro salvo com sucesso
            echo "Livro cadastrado com sucesso!";
        } else {
            // Erro ao salvar o livro
            echo "Erro ao cadastrar o livro.";
        }
    } else {
        // O arquivo não pôde ser movido para o diretório de destino
        echo "Erro ao salvar a imagem.";
    }
} else {
    // Nenhum arquivo enviado ou ocorreu um erro no upload
    echo "Nenhuma imagem selecionada ou ocorreu um erro no upload.";
}

if ($sucesso) {
    $msg = "Usuário Cadastrado com sucesso";
    echo "<script>";
    // echo "alert('{$msg}')";
    echo "window.location.href='../php/adm/acervo.php' ";
    echo "</script> ";
}
?>
