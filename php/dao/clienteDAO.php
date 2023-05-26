<?php

require_once 'conexao/conexao.php';

class ClienteDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }
    // Busca todos os clientes
    public function getAllCliente() {
        try {
            $sql = "SELECT * FROM cliente";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    // Salva os clientes 
    public function salvarCliente(ClienteDTO $clienteDTO) {
        try {
            $sql = "INSERT INTO cliente (nome,cpf,rg,datanascimento,endereco,sexo,idusuario) 
                    VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getNome());
            $stmt->bindValue(2, $clienteDTO->getCpf());
            $stmt->bindValue(3, $clienteDTO->getRg());
            $stmt->bindValue(4, $clienteDTO->getDatanascimento());
            $stmt->bindValue(5, $clienteDTO->getEndereco());
            $stmt->bindValue(6, $clienteDTO->getSexo());
            $stmt->bindValue(7, $clienteDTO->getIdusuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirCliente($idcliente) {
        try {
            $sql = "DELETE FROM cliente 
                   WHERE idcliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcliente);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getClienteById($idcliente) {
        try {
            $sql = "SELECT * FROM cliente WHERE idcliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcliente);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateClienteById(ClienteDTO $clienteDTO) {
        try {
            $sql = "UPDATE cliente SET nome=?,
                                       cpf=?,
                                       rg=?,
                                       datanascimento=?,
                                       endereco=?,
                                       sexo=? 
                    WHERE idcliente= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getNome());
            $stmt->bindValue(2, $clienteDTO->getCpf());
            $stmt->bindValue(3, $clienteDTO->getRg());
            $stmt->bindValue(4, $clienteDTO->getDatanascimento());
            $stmt->bindValue(5, $clienteDTO->getEndereco());
            $stmt->bindValue(6, $clienteDTO->getSexo());
            $stmt->bindValue(7, $clienteDTO->getIdcliente());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
