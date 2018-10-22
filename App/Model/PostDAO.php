<?php

/**
 * Description of PostDAO
 *
 * @author paulo-pc
 */
class PostDAO extends CollectionsQuerys {

    public static function salvePost($post, $con){
        parent::VerificarParametros($post, $con , 'Insert novo Post');

        $con->beginTransaction();
    
        $query = "INSERT INTO `post` (`ativo` ,`titulo` , `caminho` , `descricao` , `dtCriacao` ,`hrCriacao`)"
                 ." VALUES ('" .$post->getAtivo()."' "
                . ", '".$post->getTitulo()    ."'"
                . ", '".$post->getCaminho()   ."'"
                . ", '".$post->getDescricao() ."' "
                . ", '".$post->getDtCriacao() ."' "
                . ", '".$post->getHrCriacao() ."')";
       // try {

            $con->exec($query);
            self::ValidarCommit($con->commit(), $con);
        //} catch (PDOException $con) {
           // echo "nao foi possivel salvar:<br/>".$query;
           /// exit;
        //}
    }
    
    public static function quantidadePost($con){
        parent::VerificarParametros('Default', $con , 'Quantidade de posts');
        
        try {
            
            $query = "SELECT COUNT(ativo) FROM post WHERE ativo = 1;";
            
            $dbn = $con->prepare($query);
            $dbn->execute();
            $count = parent::GetTratarValores('default', $dbn );
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
            
            $query = "SELECT * FROM post";
            
            $dbn = $con->prepare($query);
            $dbn->execute();
            return parent::GetTratarValores('default', $dbn );
            
        } catch (Exception $exc) {
            
           // echo $exc->getTraceAsString();
        }
    }
    
    public static function getPots($id , $con)
    {
        parent::VerificarParametros($id, $con , 'Buscar post pelo id');
        
        try {
            
            $query = "SELECT * FROM post where id = '" . $id ."'";
            
            $dbn = $con->prepare($query);
            $dbn->execute();
            
            $values = parent::GetTratarValores('default', $dbn );
            //echo "<pre>";
           // print_r($values);
            //echo "</pre>";
            
            return self::alimentarPostDados( new Post() , $values[0]); // ver controller depos para dois id iguais 
            
        } catch (Exception $exc) {
            
            echo $exc->getMessage();
        }
    }
    
    private static function alimentarPostDados($post , $values)
    {
        // $post->setId_dono() value[id] // carregar objeto ;; ainda nao existe :(
        // $post->setAnimal() $value[animal]
        $post->setId($values['id']);
        $post->setTitulo($values['titulo']);
        $post->setDescricao($values['descricao']);
        $post->setDtCriacao($values['dtCriacao']);
        $post->setHrCriacao($values['hrCriacao']);
        $post->setCaminho($values['caminho']);
        
        
        return $post;
    }
}
