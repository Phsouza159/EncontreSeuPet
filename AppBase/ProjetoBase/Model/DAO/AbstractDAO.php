<?php

abstract class AbstractEntidadeDAO {
    
    abstract public function getTabela();
    abstract public function getNomeClasseDTO();
    abstract public function recuperarPorID($id);
    public function consultarTodos(){
               try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM ".$this->getTabela();
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            return $usuarioFetch = $stmt->fetchAll(PDO::FETCH_CLASS, $this->getNomeClasse());

        } catch (PDOException $exc) {
            echo "erro" . $exc->getMessage();
            die();
        }
    }
    
}
