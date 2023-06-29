<?php

class usuarioDTO
{

    private $idusuario;
    private $nome;
    private $email;
    private $senha;
    private $novaSenha;
    private $dt_nasc;
    private $cpf;
    private $rg;
    private $endereco;
    private $telefone;
    private $perfil_idperfil;

    function getIdusuario()
    {
        return $this->idusuario;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getDt_nasc()
    {
        return $this->dt_nasc;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function getRg()
    {
        return $this->rg;
    }

    function getEndereco()
    {
        return $this->endereco;
    }


    function getTelefone()
    {
        return $this->telefone;
    }


    function getSenha()
    {
        return $this->senha;
    }

    function getnovaSenha()
    {
        return $this->novaSenha;
    }

    function getPerfil_idperfil()
    {
        return $this->perfil_idperfil;
    }
    // SET
    function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function setNovaSenha($novaSenha)
    { // Modificado de setNovaSenha($novasenha) para setNovaSenha($novaSenha)
        $this->novaSenha = $novaSenha;
    }

    function setDt_nasc($dt_nasc)
    {
        return $this->dt_nasc = $dt_nasc;
    }

    function setCpf($cpf)
    {
        return $this->cpf = $cpf;
    }

    function setRg($rg)
    {
        return $this->rg = $rg;
    }

    function setEndereco($endereco)
    {
        return $this->endereco = $endereco;
    }


    function setTelefone($telefone)
    {
        return $this->telefone = $telefone;
    }


    function setPerfil_idperfil($perfil_idperfil)
    {
        $this->perfil_idperfil = $perfil_idperfil;
    }
}

class LivroDTO
{
    private $autor; // ok
    private $genero;  // ok
    private $data_cadastro; // ok
    private $livro_nome; // ok
    private $sinopse; // ok
    private $data_livro; //  ok
    private $quantidade; // ok
    private $midia; // ok
    private $capa; // ok
    private $isbn; // ok
    private $editora; // ok
    private $sobre_autor; // ok
    private $idioma; // ok
    private $num_pa; // ok 
    private $info_ad1; //ok 
    private $info_ad2; //ok 
    private $info_ad3; //ok 
    private $usuario_idusuario; // ok 


    // 
    public function getInfo_ad1()
    {
        return $this->info_ad1;
    }

    public function setInfo_ad1($info_ad1)
    {
        $this->info_ad1 = $info_ad1;
    }

    public function getInfo_ad2()
    {
        return $this->info_ad2;
    }

    public function setInfo_ad2($info_ad2)
    {
        $this->info_ad2 = $info_ad2;
    }

    public function getInfo_ad3()
    {
        return $this->info_ad3;
    }

    public function setInfo_ad3($info_ad3)
    {
        $this->info_ad3 = $info_ad3;
    }

    public function getNum_pa()
    {
        return $this->num_pa;
    }

    public function setNum_pa($num_pa)
    {
        $this->num_pa = $num_pa;
    }

    public function getIdioma()
    {
        return $this->idioma;
    }

    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;
    }


    public function getEditora()
    {
        return $this->editora;
    }

    public function setEditora($editora)
    {
        $this->editora = $editora;
    }

    public function getSobre_autor()
    {
        return $this->sobre_autor;
    }

    public function setSobre_autor($sobre_autor)
    {
        $this->sobre_autor = $sobre_autor;
    }

    public function getISBN()
    {
        return $this->isbn;
    }

    public function setISBN($isbn)
    {
        $this->isbn = $isbn;
    }


    public function getCapa()
    {
        return $this->capa;
    }

    public function setCapa($capa)
    {
        $this->capa = $capa;
    }


    public function getMidia()
    {
        return $this->midia;
    }

    public function setMidia($midia)
    {
        $this->midia = $midia;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    //    


    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }

    public function getLivro()
    {
        return $this->livro_nome;
    }

    public function setLivro($livro_nome)
    {
        $this->livro_nome = $livro_nome;
    }

    public function getSinopse()
    {
        return $this->sinopse;
    }

    public function setSinopse($sinopse)
    {
        $this->sinopse = $sinopse;
    }

    public function getDataLivro()
    {
        return $this->data_livro;
    }

    public function setDataLivro($data_livro)
    {
        $this->data_livro = $data_livro;
    }



    public function getUsuarioIdusuario()
    {
        return $this->usuario_idusuario;
    }

    public function setUsuarioIdusuario($usuario_idusuario)
    {
        $this->usuario_idusuario = $usuario_idusuario;
    }
}

class Emprestimo
{
    private $data;
    private $status;
    private $usuario_idusuario;
    private $acervo_idacervo;

    public function getUsuarioIdusuario()
    {
        return $this->usuario_idusuario;
    }

    public function setUsuarioIdusuario($usuario_idusuario)
    {
        $this->usuario_idusuario = $usuario_idusuario;
    }


    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getstatus()
    {
        return $this->status;
    }

    public function setstatus($status)
    {
        $this->status = $status;
    }

    public function getAcervo_idacervo()
    {
        return $this->acervo_idacervo;
    }

    public function setAcervo_idacervo($acervo_idacervo)
    {
        $this->acervo_idacervo = $acervo_idacervo;
    }
}


class Devolucao
{
    private $data;
    private $iddevolucao;
    private $emprestimo_idemprestimo;    

    public function getUsuarioIdusuario()
    {
        return $this->emprestimo_idemprestimo;
    }

    public function setUsuarioIdusuario($emprestimo_idemprestimo)
    {
        $this->emprestimo_idemprestimo = $emprestimo_idemprestimo;
    }


    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getiddevolucao()
    {
        return $this->iddevolucao;
    }

    public function setiddevolucao($iddevolucao)
    {
        $this->iddevolucao = $iddevolucao;
    }    
}
