<?php
session_start();

require_once '../dao/usuarioDAO.php'; // Inclua o arquivo com a definição da classe de acesso ao banco de dados

// Verifique se o ID do empréstimo foi passado como parâmetro na URL
if (isset($_GET['idemprestimo'])) {
    $idemprestimo = $_GET['idemprestimo'];
    
    // Verifique se o ID do empréstimo existe no banco de dados
    $usuarioDAO = new UsuarioDAO();
    $emprestimo = $usuarioDAO->selecionaIDEmprestimo($idemprestimo);
    
    if (!$emprestimo) {
        echo "Empréstimo não encontrado.";
        exit;
    }
} else {
    echo "ID do empréstimo não fornecido.";
    exit;
}

$idemprestimo = $_GET['idemprestimo']; // Obtém o ID do empréstimo a ser devolvido

$usuarioDAO = new UsuarioDAO(); // Inicializa o objeto usuarioDAO

// Atualiza o status do empréstimo para "Devolvido"
$usuarioDAO->atualizarStatusEmprestimo($idemprestimo, 'Devolvido');

// Obtém as informações do empréstimo
$emprestimo = $usuarioDAO->selecionaEmprestimoPorID($idemprestimo);

if ($emprestimo) {
    $idacervo = $emprestimo['acervo_idacervo']; // Obtém o ID do acervo do empréstimo

    // Incrementa a quantidade na tabela "acervo"
    $usuarioDAO->incrementarQuantidadeAcervo($idacervo);

    // Redireciona para a página de sucesso ou exibe uma mensagem de sucesso
    echo "<script>";
    echo "alert('Devolução realizada com sucesso!');";
    echo "window.location.href = '../php/adm/emprestimo.php';";
    echo "</script>";
} else {
    // Empréstimo não encontrado, redireciona ou exibe uma mensagem de erro
    echo "<script>";
    echo "alert('Empréstimo não encontrado!');";
    echo "window.location.href = '../php/adm/acervo.php';";
    echo "</script>";
}
?>
