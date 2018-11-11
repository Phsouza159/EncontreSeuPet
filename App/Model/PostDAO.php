<?php
/**

 */
class PostDAO extends CollectionsQuerys {
   
    public static function salvePost(PostDTO $post, $con){ // salvar um post no banco de dados
       
        $con->beginTransaction(); //função do PDO,desliga o comiti.  
             
        $query = "INSERT INTO `post` (`TipoPost`,`Titulo` , `DtCriacao` ,`HrCriacao` , `Ativo` , `CaminhoPost` , `LOCALIZACAO_ID`)"
                 ." VALUES (" . 
                        $post->getTipoPost()  
                . ", '".$post->getTitulo()    ."'"
                . ", '".$post->getDtCriacao()    ."'"
                . ", '".$post->getHrCriacao()   ."'"
                . ", ".$post->getAtivo() ." "
                . ", '".$post->getCaminhoPost() ."' "
                . ", ".$post->getLocalizacao() .")";
        try {

            $con->exec($query);
            self::ValidarCommit($con->commit(), $con);//verificação se deu certo o comiti
            
        } catch (PDOException $con) {
            ErroController::erroFatal("Nao foi possivel criar o novo pots :: " . $con->getMessage() . " :: sql :: " . $query);
        }
    }
    /*
     * EDITAR
     */
    public static function editarPost($id = null, PostDTO $post = null , $con = null)
    {
        $con->beginTransaction(); //função do PDO,desliga o comiti.  
             
        $query = "UPDATE post set `tipoPost`         =  ". $post->getTipoPost()  
                                  .",`Titulo`         = '". $post->getTitulo()     . "'"
                                  .",`DtCriacao`      = '" .$post->getDtCriacao()  ."'"
                                  .",`HrCriacao`      = '".$post->getDtCriacao()   ."'"
                                  .",`Ativo`          =  ".$post->getAtivo()       
                                  .",`CaminhoPost`    = '".$post->getCaminhoPost() ."'"
                                  .",`LOCALIZACAO_ID` =  ".$post->getLocalizacao()
                                  ." where id = " . $post->getId();
        
        try {

            $con->exec($query);
            self::ValidarCommit($con->commit(), $con);//verificação se deu certo o comiti
            
        } catch (PDOException $con) {
            ErroController::erroFatal("Nao foi possivel criar o novo pots :: " . $con->getMessage() . " :: sql :: " . $query);
        }
    }
    /*
     * Excluir // Inativar
     */
        public static function inativarPost($id = null , $con = null)
    {
        $con->beginTransaction(); //função do PDO,desliga o comiti.  
             
        $query = "UPDATE post set `Ativo` = 0 where id = " . $id;
        
        try {

            $con->exec($query);
            self::ValidarCommit($con->commit(), $con);//verificação se deu certo o comiti
            
        } catch (PDOException $con) {
            ErroController::erroFatal("Nao foi possivel criar o novo pots :: " . $con->getMessage() . " :: sql :: " . $query);
        }
    }
    /**
     * Buscar quantidade 
     */
    public static function quantidadePost($con){
         
        try {
            
            $query = "SELECT COUNT(ativo) FROM post WHERE ativo = 1;";
            
            $dbn = $con->prepare($query);
            $dbn->execute();
            $count = self::GetTratarValores('default', $dbn );
            return $count[0]['COUNT(ativo)'];
            
            
        } catch (Exception $exc) {
            
          //  echo $exc->getTraceAsString();
        }
    }
    
    /**
     * Get todos os post 
     */
    
    public static function getPostALL( $con)
    {
             
        try {
            
            $query = "SELECT * FROM post where `Ativo` = 1 ORDER BY id DESC" ;
            
            $dbn = $con->prepare($query);
            $dbn->execute();
            return self::GetTratarValores('default', $dbn );
            
        } catch (Exception $exc) {
            
           ErroController::erroFatal('Nao foi possivel buscar todos os posts :: ' . $exc->getMessage());
        }
    }
    
    public static function getPost($id , $con)
    {
        try {
            
            $query = "SELECT * FROM post where id = '" . $id ."'  && `Ativo` = 1";
            
            $dbn = $con->prepare($query);
            $dbn->execute();
            
            
            $values = self::GetTratarValores('default', $dbn );
            if($values  == Null)
            {
                echo "Sem registro";
                return;
            }
            return self::alimentarPostDados( new PostDTO() , $values[0] , $con); // ver controller depos para dois id iguais 
            
        } catch (Exception $exc) {
            
            ErroController::erroFatal('Nao foi possivel buscar post :: ' .$exc->getMessage());
        }
    }
    /*
     * Alimentar Objeto 
     */
    private static function alimentarPostDados(PostDTO $post ,array $values , $con) : PostDTO
    {
       try{
           // $post->setId_dono() value[id] // carregar objeto ;; ainda nao existe :(
          $post->setId($values['ID']);
          $post->setTipoPost($values['TipoPost']);
          $post->setTitulo($values['Titulo']); 
          $post->setDtCriacao($values['DtCriacao']);
          $post->setHrCriacao($values['HrCriacao']);
          $post->setAtivo($values['Ativo']);
          $post->setCaminhoPost($values['CaminhoPost']);
           return $post;
        }
        catch (Exception $post)
        {
            ErroController::erroFatal("Não Foi possivel recuperar valores para a classe Post :: " . $post->getMessage());
        }
    }
}
