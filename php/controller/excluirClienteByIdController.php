<?php
require_once '../dao/clienteDAO.php';

$idcliente = $_GET["id"];
//echo $idcliente;

$clienteDAO = new ClienteDAO();
$clienteDAO->excluirCliente($idcliente);

echo "<script>";
echo "window.location.href = '../view/listarAllCliente.php';";
echo "</script> ";
?>
