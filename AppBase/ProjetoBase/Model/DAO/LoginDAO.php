<?php
require_once 'conexao.php';
require_once __DIR__.'\..\Usuario.php';
class LoginDAO {

    public function fazerLogin($login, $senha) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT nome, login,perfil FROM usuario u
                    WHERE u.login = :login AND u.senha = :senha";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":login", $login);
            $stmt->bindValue(":senha", $senha);
            $stmt->execute();
           
            $usuarioFetch = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuarioFetch != NULL) {
                
                $usuario = new Usuario();
                
                $usuario->setNome($usuarioFetch['nome']);
                $usuario->setPerfil($usuarioFetch['perfil']);
  
                return $usuario;
            }
        } catch (Exception $exc) {
            echo "erro" . $exc->getMessage();
        }
    }

}
