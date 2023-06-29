<?php

// Conexão com o BD
require_once 'conexao/conexao.php';

// Inicio da class usuarioDAO
class UsuarioDAO
{

    public $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(UsuarioDTO $usuarioDTO)
    {
        try {
            $sql = "INSERT INTO usuario (email, senha, perfil_idperfil,nome,dt_nasc,cpf,rg,endereco,telefone)
 VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getEmail());
            $stmt->bindValue(2, $usuarioDTO->getSenha());
            $stmt->bindValue(3, $usuarioDTO->getPerfil_idperfil());
            $stmt->bindValue(4, $usuarioDTO->getNome());
            $stmt->bindValue(5, $usuarioDTO->getDt_nasc());
            $stmt->bindValue(6, $usuarioDTO->getCpf());
            $stmt->bindValue(7, $usuarioDTO->getRg());
            $stmt->bindValue(8, $usuarioDTO->getEndereco());
            $stmt->bindValue(9, $usuarioDTO->getTelefone());


            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // SELECT TODOS
    public function selecionaTds()
    {
        try {
            $sql = "SELECT * FROM usuario
                    inner join perfil on idperfil=perfil_idperfil";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT UNICO
    public function selecionaID($idusuario)
    {
        try {
            $sql = "SELECT * FROM usuario where idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //DELETE
    public function excluir($idusuario)
    {
        try {
            $sql = "DELETE FROM usuario where idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // UPDATE 
    public function alterar(usuarioDTO $usuarioDTO)
    {
        try {
            $sql = "UPDATE usuario SET 
                        email = ?,
                        nome = ?,
                        dt_nasc = ?,
                        cpf = ?,
                        rg = ?,
                        endereco = ?,
                        telefone = ?
                    WHERE idusuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getEmail());
            // $stmt->bindValue(2, $usuarioDTO->getSenha());
            $stmt->bindValue(2, $usuarioDTO->getNome());
            $stmt->bindValue(3, $usuarioDTO->getDt_nasc());
            $stmt->bindValue(4, $usuarioDTO->getCpf());
            $stmt->bindValue(5, $usuarioDTO->getRg());
            $stmt->bindValue(6, $usuarioDTO->getEndereco());
            $stmt->bindValue(7, $usuarioDTO->getTelefone());
            $stmt->bindValue(8, $usuarioDTO->getIdusuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // Mudar senha
    public function alterarSenha(usuarioDTO $usuarioDTO)
    {
        try {
            $sql = "UPDATE usuario SET senha = ? WHERE idusuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNovaSenha());
            $stmt->bindValue(2, $usuarioDTO->getIdusuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function selecionaCPF($cpfusuario)
    {
        try {
            $sql = "SELECT * FROM usuario where cpf=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cpfusuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // Livros 

    // INSERT
    public function salvarLivro(LivroDTO $livroDTO)
    {
        try {
            $sql = "INSERT INTO acervo (autor,genero,data_cadastro,livro_nome,sinopse,data_livro,quantidade,midia,capa,isbn,editora,sobre_autor,idioma,num_pa,info_ad1,info_ad2,info_ad3,usuario_idusuario)
 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $livroDTO->getAutor());
            $stmt->bindValue(2, $livroDTO->getGenero());
            $stmt->bindValue(3, $livroDTO->getDataCadastro());
            $stmt->bindValue(4, $livroDTO->getLivro());
            $stmt->bindValue(5, $livroDTO->getSinopse());
            $stmt->bindValue(6, $livroDTO->getDataLivro());
            $stmt->bindValue(7, $livroDTO->getQuantidade());
            $stmt->bindValue(8, $livroDTO->getMidia());
            $stmt->bindValue(9, $livroDTO->getCapa());
            $stmt->bindValue(10, $livroDTO->getISBN());
            $stmt->bindValue(11, $livroDTO->getEditora());
            $stmt->bindValue(12, $livroDTO->getSobre_autor());
            $stmt->bindValue(13, $livroDTO->getIdioma());
            $stmt->bindValue(14, $livroDTO->getNum_pa());
            $stmt->bindValue(15, $livroDTO->getInfo_ad1());
            $stmt->bindValue(16, $livroDTO->getInfo_ad2());
            $stmt->bindValue(17, $livroDTO->getInfo_ad3());

            $stmt->bindValue(18, $livroDTO->getUsuarioIdusuario());



            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    // 
    public function selecionaTdsLivro()
    {
        try {
            $sql = "SELECT * FROM acervo";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $livros;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


    //SELECT UNICO
    public function selecionaIDLivro($idLivro)
    {
        try {
            $sql = "SELECT * FROM acervo where idacervo=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idLivro);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // Livro aleatorio
    public function selecionaLivroAleatorio()
    {
        try {
            $sql = "SELECT * FROM acervo ORDER BY RAND() LIMIT 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $livro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $livro;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


    //SELECT UNICO
    public function selecionaISNBLivro($isbnLivro)
    {
        try {
            $sql = "SELECT * FROM acervo where isbn=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $isbnLivro);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


    public function salvarEmprestimo(Emprestimo $livroDTO)
    {
        try {
            $sql = "INSERT INTO emprestimo (data, status,usuario_idusuario,acervo_idacervo)
 VALUES (?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $livroDTO->getData());
            $stmt->bindValue(2, $livroDTO->getstatus());
            $stmt->bindValue(3, $livroDTO->getUsuarioIdusuario());
            $stmt->bindValue(4, $livroDTO->getAcervo_idacervo());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // Quantidade 
    public function atualizarQuantidadeAcervo($idacervo)
    {
        try {
            $sql = "UPDATE acervo SET quantidade = quantidade - 1 WHERE idacervo = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idacervo);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


    // SELECT ÚLTIMOS LIVROS
    public function selecionaUltimosLivros($quantidade)
    {
        try {
            $sql = "SELECT * FROM acervo ORDER BY data_cadastro DESC LIMIT :quantidade";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':quantidade', $quantidade, PDO::PARAM_INT);
            $stmt->execute();
            $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $livros;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function selecionaUltimosLivrosPorGereno($genero, $quantidade)
    {
        try {
            $sql = "SELECT * FROM acervo WHERE genero = :genero ORDER BY data_cadastro DESC LIMIT :quantidade";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':genero', $genero, PDO::PARAM_STR);
            $stmt->bindValue(':quantidade', $quantidade, PDO::PARAM_INT);
            $stmt->execute();
            $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $livros;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function buscarLivro($livro)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM acervo WHERE livro_nome LIKE :livro");
            $stmt->bindValue(':livro', '%' . $livro . '%');
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function selecionaTdsEmprestimo()
    {
        try {
            $sql = "SELECT emprestimo.*, acervo.*, usuario.*
                FROM emprestimo
                INNER JOIN acervo ON emprestimo.acervo_idacervo = acervo.idacervo
                INNER JOIN usuario ON emprestimo.usuario_idusuario = usuario.idusuario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $emprestimos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $emprestimos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    // emprestimo unico 

    //SELECT UNICO
    // public function selecionaIDEmprestimo($idemprestimo)
    // {
    //     try {
    //         $sql = "SELECT * FROM emprestimo where idemprestimo=?
    //         ";
    //         $stmt = $this->pdo->prepare($sql);
    //         $stmt->bindValue(1, $idemprestimo);
    //         $stmt->execute();
    //         $emprestimo = $stmt->fetch(PDO::FETCH_ASSOC);
    //         return $emprestimo;
    //     } catch (PDOException $exc) {
    //         echo $exc->getMessage();
    //     }
    // }

    public function selecionaIDEmprestimo($idemprestimo)
    {
        try {
            $sql = "SELECT emprestimo.*, acervo.*, usuario.*
                FROM emprestimo
                INNER JOIN acervo ON emprestimo.acervo_idacervo = acervo.idacervo
                INNER JOIN usuario ON emprestimo.usuario_idusuario = usuario.idusuario
                WHERE emprestimo.idemprestimo = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$idemprestimo]);
            $emprestimo = $stmt->fetch(PDO::FETCH_ASSOC);
            return $emprestimo;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
