<?php

require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$datanascimento = dateBRtoDateUS($_POST["datanascimento"]);
$sexo = $_POST["sexo"];
$endereco = $_POST["endereco"];
$idcliente = $_POST["idcliente"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setCpf($cpf);
$clienteDTO->setRg($rg);
$clienteDTO->setDatanascimento($datanascimento);
$clienteDTO->setSexo($sexo);
$clienteDTO->setEndereco($endereco);
$clienteDTO->setIdcliente($idcliente);

$clienteDAO = new ClienteDAO();
$clienteDAO->updateClienteById($clienteDTO);


echo "<script>";
echo "window.location.href = '../view/listarAllCliente.php';";
echo "</script> ";
?>
