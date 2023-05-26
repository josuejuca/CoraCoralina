<?php

class usuarioDTO {

    private $idusuario;
    private $nome;
    private $email;
    private $senha;
    private $dt_nasc;
    private $cpf;
    private $rg;
    private $endereco;
    private $telefone;
    private $perfil_idperfil;

    function getIdusuario() {
        return $this->idusuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getDt_nasc() {
        return $this->dt_nasc;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getEndereco() {
        return $this->endereco;
    }


    function getTelefone() {
        return $this->telefone;
    }


    function getSenha() {
        return $this->senha;
    }

    function getPerfil_idperfil() {
        return $this->perfil_idperfil;
    }
// SET
    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setDt_nasc($dt_nasc) {
        return $this->dt_nasc =$dt_nasc;
    }

    function setCpf($cpf) {
        return $this->cpf =$cpf;
    }

    function setRg($rg) {
        return $this->rg =$rg;
    }

    function setEndereco($endereco) {
        return $this->endereco =$endereco;
    }


    function setTelefone($telefone) {
        return $this->telefone =$telefone;
    }


    function setPerfil_idperfil($perfil_idperfil) {
        $this->perfil_idperfil = $perfil_idperfil;
    }

}
