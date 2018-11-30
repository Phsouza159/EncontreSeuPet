<?php

include_once 'Infra/CollectionsQuerys.php';


/**
 * Description of PessoaDAO
 *
 * @author paulo-pc
 */

class PessoaDAO extends CollectionsQuerys {
    //salvar um novo usuario
    public static function SetNovoUsuario($Pessoa = null,$con = null) {

        $con->beginTransaction();

        $query = "INSERT INTO `PESSOA` (`Nome`,`Sobrenome`,`DtNascimento`,`Sexo`,`Ativo`"
                ." ,`TIPOPESSOA_ID`, `TELEFONE_ID`,`ENDERECO_ID`,`ACESSO_ID`) "
                . "VALUES ('" . $Pessoa->getNome() . "'"
                . ", '".$Pessoa->getSobrenome()."'"
                . ", '".$Pessoa->getDtNascimento()."'"
                . ", '".$Pessoa->getSexo()."'"
                . ", ".$Pessoa->getAtivo()
                //. ", '".$Pessoa->getTipoPessoa()."'"
                .",1"
                //  . ", ".$Pessoa->getTelefone().""
                .",1"
                //. ", '".$Pessoa->getEndereco()."'"
                .",1"
                //. ", '".$Pessoa->getAcesso()."'"
                .",1)";
                
        try {

            $con->exec($query);
            self::ValidarCommit($con->commit(), $con);
        } catch (PDOException $con) {
            ErroController::erroFatal("Nao foi possivel salvar a pessoa :: " . $con->getMessage() . "Na sql :: ".$query);
        }
        
        return (self::Get_NEXT_ID_AUTO_INCREMENT_TABLE("Pessoa", $con) -1);
    }

    //Buscar todos os usurarios 
    public static function getPessoaALL($con = null) {
        parent::VerificarParametros('Default', $con , 'Get into Pessoa');

        $con->beginTransaction();

        $query = "SELECT * , e.ID as ID_ENDERECO , t.ID as ID_TELEFONE FROM pessoa p inner join endereco e on p.ENDERECO_ID = e.ID  left join telefone t on p.TELEFONE_ID = t.ID where p.Ativo = 1";

        try {
            $dbn = $con->prepare($query);
            $dbn->execute();
            return parent::GetTratarValores('default', $dbn );
            
        } catch (PDOException $con) {
            echo 'falta erro: ' . $con->errorInfo;
        }
    }
    /**
     * Buscar quantidade 
     */
    public static function quantidadePessoa($con){
         
        try {
            
            $query = "SELECT COUNT(ativo) FROM pessoa WHERE ativo = 1;";
            
            $dbn = $con->prepare($query);
            $dbn->execute();
            $count = self::GetTratarValores('default', $dbn );
            return $count[0]['COUNT(ativo)'];
            
            
        } catch (Exception $exc) {
            
          
        }
        }
    /**
     * 
     */
    public static function  EditarPessoa(PessoaDTO $Pessoa , $Con)
    {
        $Query = "UPDATE pessoa "
                . "  SET Nome           = '".$Pessoa->getNome()."'"
                . ", Sobrenome          = '".$Pessoa->getSobrenome()."'"
                . ", DtNascimento       = '".$Pessoa->getDtNascimento()."'"
                . ", Sexo               = '".$Pessoa->getSexo()."'"
                . ", Ativo              =  ".$Pessoa->getAtivo()
                . ", POST_ID            =  ".$Pessoa->getPOST()
                . ", TIPOPESSOA_ID      =  ".$Pessoa->getTipoPessoa()
                . ", TELEFONE_ID        =  ".$Pessoa->getTelefone()
                . ", ENDERECO_ID        =  ".$Pessoa->getEndereco()
                . ", ACESSO_ID          =  ".$Pessoa->getAcesso()
                . ", ANUNCIO_ID         =  ".$Pessoa->getANUNCIO()
                . " WHERE ID = " . $Pessoa->getId();
        
        try{
            $dbn = $Con->prepare($Query);
            $dbn->execute();
            
            return true;
            
        } catch (Exception $dbn) {
            echo $Query;
            echo $dbn->getMessage();
            
            return false;
        }
    }
}
