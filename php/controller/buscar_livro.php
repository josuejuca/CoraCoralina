<?php

session_start();

require_once '../dao/usuarioDAO.php'; // Conexão com o banco de dados

// Dados do formulário
$livro = $_GET['livro'];

$usuarioDAO = new UsuarioDAO(); // Inicializa o objeto usuarioDAO

$resultados = $usuarioDAO->buscarLivro($livro);

header("Location: ../php/end/resultado.php?livros=" . urlencode(json_encode($resultados)));
exit();


?>

