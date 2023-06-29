<?php
session_start();

require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php'; // Conexão com o banco de dados

$isbn = $_POST["isbn"]; // Obtém o ISBN do formulário
$cpf  = $_POST["cpf"]; // Obtém o CPF do formulário
$data = date('Y-m-d H:i:s');
$status = 'Emprestado';
$usuarioDAO = new UsuarioDAO(); // Inicializa o objeto usuarioDAO

// Chame a função selecionaISNBLivro() para obter as informações do livro com base no ISBN
$livro = $usuarioDAO->selecionaISNBLivro($isbn);

// Chame a função selecionaCPF() para obter as informações do usuário com base no CPF
$usuario = $usuarioDAO->selecionaCPF($cpf);

// Verifique se o livro foi encontrado
if ($livro) {
    // Atribua o valor do idacervo à variável $idacervo
    $idacervo = $livro['idacervo'];
    $qnt =  $livro['quantidade'];

    if ($qnt <= 0) {
        echo "<script>";
        echo "alert('Sem unidades disponives!');";
        echo "window.location.href = '../php/adm/emprestimo.php';";
        echo "</script>";
        exit;
    }

    // Restante da lógica do empréstimo...
} else {
    // Caso o livro não seja encontrado, você pode exibir uma mensagem de erro ou redirecionar para uma página apropriada
    echo "Livro não encontrado.";
    exit;
}

// Verifique se o usuário foi encontrado
if ($usuario) {
    // Atribua o valor do idusuario à variável $idusuario
    $idusuario = $usuario['idusuario'];

    // Restante da lógica do empréstimo...
} else {
    // Caso o usuário não seja encontrado, você pode exibir uma mensagem de erro ou redirecionar para uma página apropriada
    echo "<script>";
    echo "alert('Usuário não encontrado!');";
    echo "window.location.href = '../php/adm/emprestimo.php';";
    echo "</script>";

    // echo "Usuário não encontrado.";
    // echo $cpf;
    // echo $idusuario;
    exit;
}

// 

// Crie um objeto LivroDTO e defina os valores
$usuarioDTO = new Emprestimo;
$usuarioDTO->setAcervo_idacervo($idacervo);
$usuarioDTO->setData($data);
$usuarioDTO->setUsuarioIdusuario($idusuario);
$usuarioDTO->setstatus($status);

$usuarioDAO = new usuarioDAO();
$sucesso = $usuarioDAO->salvarEmprestimo($usuarioDTO);


// Verifica se o empréstimo foi realizado com sucesso antes de atualizar a quantidade do acervo
if ($sucesso) {
    $usuarioDAO->atualizarQuantidadeAcervo($idacervo);
}

echo "<script>";
echo "alert('Emprestimo realizado com Sucesso!');";
echo "window.location.href = '../php/adm/emprestimo.php';";
echo "</script>";
