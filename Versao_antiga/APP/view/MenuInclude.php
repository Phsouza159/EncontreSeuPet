<?php

    /**
     * ta obsevando , criei essa funcao, nela vou da um echo, ele vai imprimir o menu. toda a pagina que eu quero o menu. e so chamar essa funcao
     * Funcao de criacao de menu 
     * echo na tela com o menu 
     * 21-09-2018
     */ 
     class Menus
     {
         
        public static $paginas = array(
                                        'index' => './index.php'
                                        ); 
         
         
        public static function ViewMenuIndex()
        {
        echo " 
          <div>
            <ul class='menu-pags'>
                <a href='".self::$paginas['index']."'><li>Home</li></a>
                <a href='#'><li>CSS TUTORIAL</li></a>
                <a href='#'><li>CSS Layout</li></a>
                <a href='#'><li>CSS Links</li></a>
                <a href='#'><li>CSS Menu</li></a>
                <a href='#'><li>CSS Print</li></a>
                <a href='#'><li>Contato</li></a>
            </ul>
        </div>";
    
       }
     }

?>