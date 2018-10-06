<?php
require_once 'conexao.php';
require_once 'UsuarioDAO.php';
require_once 'AbstractDAO.php';
require_once __DIR__.'\..\UsuarioDTO.php';
require_once __DIR__.'\..\ClienteDTO.php';

class ClienteDAO extends AbstractEntidadeDAO{


    public function recuperarPorUsuario(UsuarioDTO $usuario) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT u.idusuario as idUsuario, u.nome as nome, login,p.nome as perfil,
                c.endentrega as endereco FROM usuario u 
                INNER JOIN perfil AS p ON  p.idperfil = u.idperfil_perfil 
                INNER JOIN cliente as c on c.idusuario_usuario = u.idUsuario
                 WHERE u.idusuario=:id ";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":id", $usuario->getIdUsuario());
            $stmt->execute();
           
              $clienteFetch = $stmt->fetch(PDO::FETCH_ASSOC);
      
            if ($clienteFetch != NULL) {
                
                $cliente = new ClienteDTO();   
                
                $cliente->setIdUsuario($clienteFetch['idUsuario']);
                $cliente->setNome($clienteFetch['nome']);
                $cliente->setPerfil($clienteFetch['perfil']);
                $cliente->setEnderecoEntrega($clienteFetch['endereco']);
                return $cliente;
            }
            return null;
        } catch (Exception $exc) {
            echo "erro" . $exc->getMessage();
            die();
        }    
    }

    public function getNomeClasseDTO() {
        return "ClienteDTO";
    }

    public function getTabela() {
        return "cliente";
    }

    public function recuperarPorID($id) {
        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT u.idusuario as idUsuario, u.nome as nome, login,p.nome as perfil,
                c.endentrega as endereco FROM usuario u 
                INNER JOIN perfil AS p ON  p.idperfil = u.idperfil_perfil 
                INNER JOIN cliente as c on c.idusuario_usuario = u.idUsuario
                 WHERE c.idcliente=:id ";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
           
              $clienteFetch = $stmt->fetch(PDO::FETCH_ASSOC);
      
            if ($clienteFetch != NULL) {
                
                $cliente = new ClienteDTO();   
                
                $cliente->setIdUsuario($clienteFetch['idUsuario']);
                $cliente->setNome($clienteFetch['nome']);
                $cliente->setPerfil($clienteFetch['perfil']);
                $cliente->setEnderecoEntrega($clienteFetch['endereco']);
                return $cliente;
            }
            return null;
        } catch (Exception $exc) {
            echo "erro" . $exc->getMessage();
            die();
        }    
        
    }

}
