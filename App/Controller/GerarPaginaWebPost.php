<?php


 class GerarPaginaWebPost 
 {
     
     private static $codigoFonte    = FALSE;  // codigo fonte do post 
     private static $paginaWeb      = "";     // pagina a ser criada
     private static $caminhoSalvar  = "../../Posts/"; // caminho a onde vai ser salvo o arquivo fisico
     
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
        
         $nomeArquivi = "postFile" . random_int(10, 99999) . ".php";
         
         $head = "<head>"
                 . "<titulo>NOMO DO POST</titulo>"
                 . "</head>";
         
         $body   = "<body>"
                 . $codigo_fonte
                 . "<button onclick=\"window.location.href='../layout/CriarPost.php'\" >Criar novo Posts</button>"
                 . "<button onclick=\"window.location.href='../layout/posts.php'\" >Voltar Galeria</button>"
                 . "</boyd>";
         
         $pag = "<html>" . $head . $body . "</html>" ; 
         
         if(file_put_contents(self::$caminhoSalvar.$nomeArquivi , $pag ))
         {
             header("location: ".self::$caminhoSalvar.$nomeArquivi);
         }
         else
         {
            echo " erro ao criar a pagina";
         } 
     }
 }