<?php
require_once 'conexao.php';
require_once 'UsuarioDAO.php';
require_once 'AbstractDAO.php';
require_once __DIR__.'\..\UsuarioDTO.php';
require_once __DIR__.'\..\AdministradorDTO.php';

class AdministradorDAO extends AbstractEntidadeDAO{


    public function recuperarPorUsuario(UsuarioDTO $usuario) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT u.idusuario as idUsuario, u.nome as nome, login,p.nome as perfil,
                a.matricula as matricula FROM usuario u 
                INNER JOIN perfil AS p ON  p.idperfil = u.idperfil_perfil 
                INNER JOIN administrador as a on a.idusuario_usuario = u.idUsuario
                 WHERE u.idusuario=:id ";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":id", $usuario->getIdUsuario());
            $stmt->execute();
           
              $adminFetch = $stmt->fetch(PDO::FETCH_ASSOC);
      
            if ($adminFetch != NULL) {
                $admin = new AdministradorDTO();   
                $admin->setIdUsuario($adminFetch['idUsuario']);
                $admin->setNome($adminFetch['nome']);
                $admin->setPerfil($adminFetch['perfil']);
                $admin->setMatricula($adminFetch['matricula']);
                return $admin;
            }
            return null;
        } catch (Exception $exc) {
            echo "erro" . $exc->getMessage();
            die();
        }    
    }

    public function getNomeClasseDTO() {
        return "AdministradorDTO";
    }

    public function getTabela() {
        return "administrador";
    }

    public function recuperarPorID($id) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT u.idusuario as idUsuario, u.nome as nome, login,p.nome as perfil,
                a.matricula as matricula FROM usuario u 
                INNER JOIN perfil AS p ON  p.idperfil = u.idperfil_perfil 
                INNER JOIN administrador as a on a.idusuario_usuario = u.idUsuario
                 WHERE a.idadministrador=:id ";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
           
              $adminFetch = $stmt->fetch(PDO::FETCH_ASSOC);
      
            if ($adminFetch != NULL) {
                
                $admin = new AdministradorDTO();   
                
                $admin->setIdUsuario($adminFetch['idUsuario']);
                $admin->setNome($adminFetch['nome']);
                $admin->setPerfil($adminFetch['perfil']);
                $admin->setMatricula($adminFetch['matricula']);
                return $admin;
            }
            return null;
        } catch (Exception $exc) {
            echo "erro" . $exc->getMessage();
            die();
        }    
        
    }

}
