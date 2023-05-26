<?php

require_once 'conexao/conexao.php';

class LoginDAO {
    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($email, $senha) {
        try {
            $sql = "SELECT * FROM usuario u
                    INNER JOIN perfil p ON (u.perfil_idperfil = p.idperfil)
                    WHERE u.email = ? AND u.senha = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
        } catch (PDOException $exc) {
            // Tratar o erro adequadamente, por exemplo, lançando uma exceção
            throw new Exception($exc->getMessage());
        }
    }
}

?>
