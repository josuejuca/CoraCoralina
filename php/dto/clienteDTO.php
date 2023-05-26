<?php

class ClienteDTO {
    private $idcliente;
    private $nome;
    private $cpf;
    private $rg;
    private $datanascimento;
    private $endereco;
    private $sexo;
    private $idusuario;
    
    function getIdcliente() {
        return $this->idcliente;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getDatanascimento() {
        return $this->datanascimento;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getIdusuario() {
        return $this->idusuario;
    }

    function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setDatanascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }




}

?>
