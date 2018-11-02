<?php

//include './NucleoClass/PerdidoPOST.php';


 class GerarPaginaWebPost 
 {
     private static $Con;


          private static $Pots;
     private static $paginaWeb;     // pagina a ser criada 
     private static $caminhoSalvar  = "../Posts/"; // caminho a onde vai ser salvo o arquivo fisico

     
     public static function main(Post $Pots = null , $con = null)
     {
         if(is_null($Pots) || is_null($con))
         {
             ErroController::erroFatal("Erro na passagem de parametros na classe Gerar Pots!");
         }
         
         self::$Con  = $con;
         self::$Pots = $Pots;
         self::GerarPagina();      
     }   

     private static function GerarPagina( )
     {
         date_default_timezone_set('America/Sao_Paulo');
         
         $Titulo = ucwords(self::$Pots->getTitulo());
         
         $nomeArquivi = $Titulo . date("ymd");
         
         $nomeArquivi = str_replace(" ", "", $nomeArquivi) . rand(0 , 100) . ".php";
         
         self::$Pots->setId(PostDAO::Get_NEXT_ID_AUTO_INCREMENT_TABLE('post' , self::$Con));
         self::$Pots->setCaminho($nomeArquivi); 
         
$POTS_PREPARA = "<?php
   \$id_POST = '".self::$Pots->getId()."'; 
   if(file_exists('../Site/Layout/MODE_POTS.php'))
   {
      include_once '../Site/Layout/MODE_POTS.php';
   }
   else 
   {
     echo 'Mode nao encontrado';
     exit;
   }
?>";
         
         $idAnimal = AnimalDAO::SetNovoAnimal(self::$Pots->getAnimal(), self::$Con);
         self::$Pots->setIdAnimal( $idAnimal );
         PostDAO::SalvePost(self::$Pots , self::$Con);
         
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