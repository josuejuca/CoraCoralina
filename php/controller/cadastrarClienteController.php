<?php
require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$datanascimento =$_POST["datanascimento"];
$sexo = $_POST["sexo"];
$endereco = $_POST["endereco"];
$idusuario = $_POST["idusuario"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setCpf($cpf);
$clienteDTO->setRg($rg);
$clienteDTO->setDatanascimento($datanascimento);
$clienteDTO->setSexo($sexo);
$clienteDTO->setEndereco($endereco);
$clienteDTO->setIdusuario($idusuario);

$clienteDAO = new ClienteDAO();
$sucesso = $clienteDAO->salvarCliente($clienteDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarCliente.php?msg={$msg}';";
   echo "</script> ";
}
?>

