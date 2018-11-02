<?php

/**
 * Description of PostDAO
 *
 * @author paulo-pc
 */
class PostDAO extends CollectionsQuerys {
    //reacionado com banco de dados 

    public static function salvePost(Post $post, $con){ // salvar um post no banco de dados
        parent::VerificarParametros($post, $con , 'Insert novo Post');

        $con->beginTransaction(); //função do PDO,desliga o comiti.  
        
        $query = "INSERT INTO `post` (`id_Animal` , `ativo` ,`titulo` , `caminho` , `descricao` , `dtCriacao` ,`hrCriacao`)"
                 ." VALUES (" . $post->getIdAnimal()
                . ", '".$post->getAtivo()     ."' "
                . ", '".$post->getTitulo()    ."'"
                . ", '".$post->getCaminho()   ."'"
                . ", '".$post->getDescricao() ."' "
                . ", '".$post->getDtCriacao() ."' "
                . ", '".$post->getHrCriacao() ."')";
        try {

            $con->exec($query);
            self::ValidarCommit($con->commit(), $con);//verificação se deu certo o comiti
            
        } catch (PDOException $con) {
            ErroController::erroFatal("Nao foi possivel criar o novo pots :: " . $con->getMessage() );
        }
    }
    
    public static function quantidadePost($con){
        parent::VerificarParametros('Default', $con , 'Quantidade de posts');
        
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
                parent::VerificarParametros('Default', $con , 'Buscar todos os posts');
        
        try {
            
            $query = "SELECT * FROM post ORDER BY id DESC";
            
            $dbn = $con->prepare($query);
            $dbn->execute();
            return self::GetTratarValores('default', $dbn );
            
        } catch (Exception $exc) {
            
           // echo $exc->getTraceAsString();
        }
    }
    
    public static function getPost($id , $con)
    {
        parent::VerificarParametros($id, $con , 'Buscar post pelo id');
        
        try {
            
            $query = "SELECT * FROM post where id = '" . $id ."'";
            
            $dbn = $con->prepare($query);
            $dbn->execute();
            
            $values = self::GetTratarValores('default', $dbn );
            //echo "<pre>";
           // print_r($values);
            //echo "</pre>";
            
            return self::alimentarPostDados( new Post() , $values[0] , $con); // ver controller depos para dois id iguais 
            
        } catch (Exception $exc) {
            
            echo $exc->getMessage();
        }
    }
    
    private static function alimentarPostDados(Post $post ,array $values , $con) : Post
    {
       try{
           // $post->setId_dono() value[id] // carregar objeto ;; ainda nao existe :(
           $post->setAnimal(AnimalDAO::GetAnimal($values['id_Animal'] , $con));
           $post->setId($values['id']);
           $post->setIdAnimal($values['id_Animal']);
           $post->setTitulo($values['titulo']);
           $post->setDescricao($values['descricao']);
           $post->setDtCriacao($values['dtCriacao']);
           $post->setHrCriacao($values['hrCriacao']);
           $post->setCaminho($values['caminho']);
           return $post;
        }
        catch (Exception $post)
        {
            ErroController::erroFatal("Não Foi possivel recuperar valores para a classe Post :: " . $post->getMessage());
        }
    }
}
