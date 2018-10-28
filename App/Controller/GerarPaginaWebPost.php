<?php

//include './NucleoClass/PerdidoPOST.php';


 class GerarPaginaWebPost 
 {
     
     private static $codigoFonte    = FALSE;  // codigo fonte do post 
     private static $paginaWeb      = "";     // pagina a ser criada
     
     private static $caminhoSalvar  = "../Posts/"; // caminho a onde vai ser salvo o arquivo fisico
     
     private static $POST;
     
     public static function main( $cody = null)
     {
         self::setCodigoFonte($cody);
         self::GerarPagina(self::getCodigoFonte());      
     }   
     
     static function getPaginaWeb() 
     {
         return self::$paginaWeb;
     }

     static function setPaginaWeb($paginaWeb) 
     {
         self::$paginaWeb = $paginaWeb;
     }
  
     private static function getCodigoFonte()
     {
         return self::$codigoFonte;
     }

     private static function setCodigoFonte($codigoFonte = null)
     {
         if(is_null($codigoFonte))
         {
            $codigoFonte = isset($_REQUEST['cody-font-pag'])
                  ? $_REQUEST['cody-font-pag']
                      : NULL;
         }
         self::$codigoFonte = $codigoFonte;
     }

     private static function GerarPagina( $codigo_fonte = null)
     {
       // depois de criar o arquivo 
        if(is_null($codigo_fonte))
            return null;
        date_default_timezone_set('America/Sao_Paulo');
        $con = new Conexao();
        self::$POST = new Post();
        
        self::$POST->setTitulo("Novo Post");
        self::$POST->setDescricao($codigo_fonte);
        
         $nomeArquivi = "postFile" . random_int(10, 99999) . ".php";
         
         //$nomeArquivi = './MODE_POTS.php';
         //echo '<pre>';
         //print_r(file($nomeArquivi));
         //echo '</pre>';
         
         $id_next = PostDAO::Get_NEXT_ID_AUTO_INCREMENT_TABLE('post' , $con->getCon());
         
         
$POTS_PREPARA = "<?php
    \$id_POST = '".$id_next."'; 
    if(file_exists('../Site/Layout/MODE_POTS.php'))
    {
       include_once '../Site/Layout/MODE_POTS.php';
    }
    ?>";
         
         self::$POST->setCaminho($nomeArquivi);
         PostDAO::SalvePost(self::$POST , $con->getCon());
         
         if(file_put_contents(self::$caminhoSalvar.$nomeArquivi , $POTS_PREPARA ))
         {
             header("location: ".self::$caminhoSalvar.$nomeArquivi);
         }
         else
         {
             ErroController::erroFatal("Erro ao tentar criar Post");
            exit;
         } 
     }
 }