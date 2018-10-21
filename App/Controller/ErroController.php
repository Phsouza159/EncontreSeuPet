<?php
/**
 * Description of ErroController
 *
 * @author paulo-pc
 */
class ErroController {

    public static function erroFatal($mens = null)
    {
        echo "<h1>Controle de Erros:</h1>";
        if(is_null($mens))
        {
            echo " Erro Desconhecido!";
            exit;
        }
        else
        {
            echo $mens;
            exit;
        }
    }


    //put your code here
}
