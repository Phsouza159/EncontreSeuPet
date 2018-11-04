<?php
/**
 * Description of ErroController
 *
 * @author paulo-pc
 */
class ErroController {

    public static function erroFatal($mens = null)
    {
        echo "<head>
                <Title>Erro</Title>
                <meta charset='UTF-8'>
              </head>
                ";
        
        
        echo "<h1>Controle de Erros:</h1>";
        if(is_null($mens))
        {
            echo " Erro Desconhecido!";
            exit;
        }
        else
        {
            echo "<pre>";
             echo $mens;
            echo "</pre>";
            exit;
        }
    }
    public static function errroSql($sql = null)
    {
         if(is_null($sql))
        {
            echo " Erro Desconhecido!";
            exit;
        }
        else
        {
             return $sql;
        }
    }

    //put your code here
}
