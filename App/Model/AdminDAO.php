<?php

class AdminDAO extends CollectionsQuerys{

    public static function ProcessarScriptSql($script = null , $con = null)
    {
        self::VerificarParametros($script , $con);
        
        try{
            $con->beginTransaction();
            
            $dbn = $con->prepare($script);
            $dbn->execute();
            $count = self::GetTratarValores('default', $dbn );
            return $count;
            
        } catch (Exception $con) {
            return ErroController::errroSql("Erro ao execultar script :: " . $script . " -> " . $con->getMessage());
        }
        
    }
    
}
