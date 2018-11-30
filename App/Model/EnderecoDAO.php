<?php
include_once __DIR__ . "/../NucleoClass/EnderecoDTO.php";
include_once __DIR__ . "/Infra/CollectionsQuerys.php";
include_once __DIR__ . "/Infra/DbContextoDAO.php";
include_once __DIR__ . "/Conexao.php";
/*
 */
class EnderecoDAO extends CollectionsQuerys {
    
    public static function SetNovoEndereco(EnderecoDTO $Endereco , $Con)
    {
        $Con->beginTransaction();
        
        $Query = "INSERT INTO `endereco` (`ID`, `CEP`, `Endereco`, `Complemento`, `UF`) "
                . "VALUES (NULL, '".$Endereco->getCEP()."'"
                . ", '".$Endereco->getEndereco()."'"
                . ", '".$Endereco->getComplemento()."'"
                . ", '".$Endereco->getUF()."')";
        try{
            
            $Con->exec($Query);
            self::ValidarCommit($Con->commit(), $Con);
            
            return (self::Get_NEXT_ID_AUTO_INCREMENT_TABLE("endereco", $Con) - 1);
            
        } catch (Exception $Con) {
            ErroController::erroFatal("Nao foi possivel salvar o endereco :: " 
                                      . $Con->getMessage() . ". Na Query ::" . $Query);
        }
    }
    
    public static function EditarEndereco(EnderecoDTO $Endereco , $Con)
    {
        $Query = "UPDATE endereco "
                . "SET CEP = " . $Endereco->getCEP()
                . ", Endereco = '" . $Endereco->getEndereco() . "'"
                . ", Complemento = '" . $Endereco->getComplemento() . "'"
                . ", UF = '" . $Endereco->getUF() . "'"
                . "WHERE ID = " . $Endereco->getId();
        try {
            $Con->exec($Query);
            return true;
            
        } catch (Exception $Con) {
            
            echo $Query;
            echo $Con->getMessage();
           
            return false;
        }
    }
}
