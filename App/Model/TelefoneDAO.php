<?php

include_once __DIR__ . "/../Controller/ErroController.php";

include_once __DIR__ . "/../NucleoClass/EnderecoDTO.php";
include_once __DIR__ . "/Infra/CollectionsQuerys.php";
include_once __DIR__ . "/Infra/DbContextoDAO.php";
include_once __DIR__ . "/Conexao.php";

class TelefoneDAO extends CollectionsQuerys {
    
    public static function SalvarNovoTelefone(TelefoneDTO $Telefone , $Con)
    {
        $Query = "INSERT INTO `telefone` (`ID`, `Ddd`, `Numero`) VALUES (NULL"
                . ", '".$Telefone->getDdd()."'"
                . ", '".$Telefone->getNumero()."')";
        
        try{
            $Con->beginTransaction();
                    
            $Con->exec($Query);
            self::ValidarCommit($Con->commit(), $Con);
            
            return (self::Get_NEXT_ID_AUTO_INCREMENT_TABLE("telefone", $Con) - 1);
            
        } catch (Exception $Con) {
            ErroController::erroFatal("Nao foi possivel salvar o Telefone :: " 
                                      . $Con->getMessage() . ". Na Query ::" . $Query);
        }
    }
}
