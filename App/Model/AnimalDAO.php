<?php

class AnimalDAO extends CollectionsQuerys {
  
    public static function SetNovoAnimal(Animal $Animal = null,$con = null) {
        
        parent::VerificarParametros($Animal, $con , 'Insert into Animal');

        $con->beginTransaction();

        $query = "INSERT INTO `animal` (`NomePet`, `PortePet`, `RacaPet`, `CorPet`, `SexoPet`, `PesoPet`, `Idadepet`, `NomeDono`, `Localizacao`, `FotoPet`)"
                . " VALUES ('".$Animal->getNomePet()."'"
                . ",  ".$Animal->getPesoPet().""
                . ", '".$Animal->getRacaPet()."'"
                . ", '".$Animal->getCorPet()."'"
                . ", ".$Animal->getSexoPet().""
                . ", ".$Animal->getPesoPet().""
                . ", ".$Animal->getIdadepet().""
                . ", '".$Animal->getNomeDono()."'"
                . ", '".$Animal->getLocalização()."'"
                . ", '".$Animal->getFotoPet()."')";
        
        try {

            $con->exec($query);
            self::ValidarCommit($con->commit(), $con);
            return self::Get_NEXT_ID_AUTO_INCREMENT_TABLE('Animal' , $con) - 1;

        } catch (PDOException $con) {
            ErroController::erroFatal("Nao foi possivel salvar o animal na base de dados: Querey -> " . $query . " erro :" . $con->getMessage() );
        }
    }
    
    public static function GetAnimal(int $id = 0,$con = null)
    {
         self::VerificarParametros($id, $con , 'Get Animal ' . $id);
         
         $query = "SELECT * FROM Animal WHERE id = " . $id;
     
       try {
            $dbn = $con->prepare($query);
            $dbn->execute();
            
            $values = parent::GetTratarValores('default', $dbn );
            if(empty($values))
            {
                return "Pots sem animal";
            }
                       
            //echo "<pre>";
            //  print_r($values);
            //echo "</pre>";
            return self::alimentarAnimalDados(new Animal() , $values[0]);
           
              
        } catch (PDOException $con) {
            ErroController::erroFatal("Nao foi possivel salvar o animal na base de dados: Querey -> " . $query . " erro :" . $con->getMessage() );
        }
    }
    
    private static function alimentarAnimalDados(Animal $Animal ,array $values) : Animal
    {
        try{
           $Animal->setId($values['id']);
           $Animal->setIdDono($values['id_dono']);
           $Animal->setNomePet($values['NomePet']);
           $Animal->setPortePet($values['PortePet']);
           $Animal->setRacaPet($values['RacaPet']);
           $Animal->setCorPet($values['CorPet']);
           $Animal->setSexoPet($values['SexoPet']);
           $Animal->setPesoPet($values['PesoPet']);
           $Animal->setIdadepet($values['Idadepet']);
           $Animal->setNomeDono($values['NomeDono']);
           $Animal->setLocalização($values['NomeDono']);
           $Animal->setFotoPet($values['FotoPet']);
           
           return $Animal;
        }
        catch (Exception $Animal)
        {
            ErroController::erroFatal("Não Foi possivel recuperar valores para a classe Animal :: " . $Animal->getMessage());
        }
    }
    
}
?>