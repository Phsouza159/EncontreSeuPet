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
    public static function GetUsuarios($con = null) {
        parent::VerificarParametros('Default', $con , 'Get into Pessoa');

        $con->beginTransaction();

        $query = "SELECT * FROM `teste`;";

        try {
            $dbn = $con->prepare($query);
            $dbn->execute();
            return parent::GetTratarValores('default', $dbn );
            
        } catch (PDOException $con) {
            echo 'falta erro: ' . $con->errorInfo;
        }
    }
    
}
