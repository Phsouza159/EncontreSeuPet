<?php
require_once 'Conexao.php';
require_once 'AbstractDAO.php';
require_once __DIR__.'\..\UsuarioDTO.php';

class UsuarioDAO extends AbstractEntidadeDAO{
    
     public function fazerLogin($login, $senha) {
         
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT idusuario,u.nome as nome, login,p.nome as perfil FROM usuario u 
                INNER JOIN perfil AS p ON  p.idperfil = u.idperfil_perfil 
                WHERE u.login=:login AND u.senha =:senha";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":login", $login);
            $stmt->bindValue(":senha", md5($senha));
            $stmt->execute();
           
            $usuarioFetch = $stmt->fetch(PDO::FETCH_ASSOC);
      
            if ($usuarioFetch != NULL) {
                
                $usuario = new UsuarioDTO();   
                
                $usuario->setIdUsuario($usuarioFetch['idusuario']);
                $usuario->setNome($usuarioFetch['nome']);
                $usuario->setPerfil($usuarioFetch['perfil']);
  
                return $usuario;
            }
            return null;
        } catch (Exception $exc) {
            echo "erro" . $exc->getMessage();
            die();
        }
    }

    public function getNomeClasseDTO() {
        return "UsuarioDTO";
    }

    public function getTabela() {
        return "usuario";
    }

    public function recuperarPorID($id) {
                try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT idusuario,u.nome as nome, login,p.nome as perfil FROM usuario u 
                INNER JOIN perfil AS p ON  p.idperfil = u.idperfil_perfil 
                WHERE u.idusuario=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
           
            $usuarioFetch = $stmt->fetch(PDO::FETCH_ASSOC);
      
            if ($usuarioFetch != NULL) {
                
                $usuario = new UsuarioDTO();   
                
                $usuario->setIdUsuario($usuarioFetch['idusuario']);
                $usuario->setNome($usuarioFetch['nome']);
                $usuario->setPerfil($usuarioFetch['perfil']);
  
                return $usuario;
            }
            return null;
        } catch (Exception $exc) {
            echo "erro" . $exc->getMessage();
            die();
        }
    }

}
?>