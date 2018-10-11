<?php

include_once 'Infra/DbContextoDAO.php';

/**
 * Description of Conexao
 *
 * @author paulo-pc
 */
class Conexao extends DbContextoDAO {
    
    private $con;//conexão

    function __construct() { //configurando
        
        $this->setCon( parent::ConexaoMysql()); 
        if($this->getCon())
        {
         //   echo 'Conexao sucesso!';
        }
        else if(!$this->getCon())
        {
         //   echo 'conexao falide';
        }
            
    }
    
    function __destruct() {
        parent::ConexaoMysql_Close($this->getCon());
    }
    
    public function getCon() {
        return $this->con;
    }

    private function setCon($con) {
        $this->con = $con;
    }
}
