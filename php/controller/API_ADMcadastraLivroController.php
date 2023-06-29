<?php
session_start();

require_once '../dto/usuarioDTO.php'; 
require_once '../dao/usuarioDAO.php'; // Conexão com o banco de dados





//dados do formulario
$livro_nome = $_POST["livro_nome"]; // ok
$quantidade = $_POST["quantidade"]; // ok
$midia = $_POST["midia"]; // ok
$capa = $_GET["capa"]; // ok 
$isbn = $_POST["isbn"]; // ok
$editora = $_POST["editora"]; // ok
$sobre_autor = $_POST["sobre_autor"]; // ok
$idioma = $_POST["idioma"]; // ok
$num_pa = $_POST["num_pa"]; // ok 
$info_ad1 = $_POST["info_ad1"]; //ok  (Data do livro)
$autor = $_POST["autor"];
$genero = $_POST["genero"];
$sinopse = $_POST["sinopse"];;
$data_cadastro =  date('Y-m-d H:i:s');
// Informação do user 
$idusuario = $_SESSION["idusuario"];


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
$usuarioDTO->setCapa($capa);
$usuarioDTO->setSobre_autor($sobre_autor);

$usuarioDTO->setQuantidade($quantidade);

$usuarioDTO->setInfo_ad1($info_ad1);
$usuarioDTO->setUsuarioIdusuario($idusuario);

$usuarioDAO = new usuarioDAO();
$sucesso = $usuarioDAO->salvarLivro($usuarioDTO);


if ($sucesso) {
    $msg = "Usuário Cadastrado com sucesso";
    echo "<script>";
    // echo "alert('{$msg}')";
    echo "window.location.href='../php/adm/acervo.php' ";
    echo "</script> ";
}

?>



