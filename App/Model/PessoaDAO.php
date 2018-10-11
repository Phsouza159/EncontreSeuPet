<?php

include_once 'Infra/CollectionsQuerys.php';


/**
 * Description of PessoaDAO
 *
 * @author paulo-pc
 */

class PessoaDAO extends CollectionsQuerys {
    //salvar um novo usuario
    public static function SetNovoUsuario(Pessoa $Pessoa = null,$con = null) {
        parent::VerificarParametros($Pessoa, $con , 'Insert into Pessoa');

        $con->beginTransaction();

        $query = "INSERT INTO `teste` (`nome`) VALUES ('" . $Pessoa->getNome() . "')";
        try {

            $con->exec($query);
            self::ValidarCommit($con->commit(), $con);
        } catch (PDOException $con) {
            // controle errro $exc->getMessage();
        }
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
