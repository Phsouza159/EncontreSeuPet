<?php

/**
 * Description of CollectionsQuerys
 *
 * @author paulo-pc
 */
class CollectionsQuerys {

    public static function ValidarCommit(bool $commit = null, $con = null) {
        if (is_null($commit) || is_null($con)) {
            //controle erro
            exit;
        }

        if ($commit) { 
            return true;
        } else {

            $con->rollBack();
        }
    }

    public static function VerificarParametros($argsObject = null, $con = null, $oper = 'Oper default erro') {
        if (is_null($argsObject) || is_null($con) || is_null($oper)) {
            // controle de erro
            echo 'Falta de parametro na operacao: ' . $oper;
            exit;
        }
    }

    public static function GetTratarValores($objects = null, $con = null) {
        self::VerificarParametros($objects, $con, 'Tratar Valores do Banco');

        $Values = array();
        
        try {
            $Values = $con->fetchAll(PDO::FETCH_ASSOC);

            if (is_null($Values))
                echo 'Erro_ Retorno nullo';

            return $Values;
        } catch (Exception $exc) {
            
            $Values = $con->fetch(PDO::FETCH_ASSOC);

            if (is_null($Values))
                echo 'Erro_ Retorno nullo';

            return $Values;
        }
    }

}
