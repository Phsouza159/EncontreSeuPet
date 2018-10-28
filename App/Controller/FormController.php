<?php

include_once __DIR__ . "/ErroController.php";
include_once __DIR__ . "/SessionController.php";


if(isset( $_REQUEST['ACAO_FORM']))
{
    FormController::main($_REQUEST['ACAO_FORM']);
}

echo "<pre>";
    print_r($_REQUEST);
echo "</pre>";

class FormController {

    public static function main($oper)
    {
        switch($oper)
        {
            case "login":
                echo "login";
                self::FormLogin();
                break;
            default: 

                ErroController::erroFatal("nao foi possivel efetuar o controle de formularios para a acao: " . $oper);
                break;
        }
    }
    
    public static function FormLogin()
    {
        SessionController::verificarLogin( self::getKey('user_log')
                                          ,self::getKey('pass_log') 
                                          , null);
    }
    
    
    public static function  getKey($key = 'default')
    {
        if(array_key_exists($key, $_REQUEST))
        {
            return $_REQUEST[$key];
        }
        else
        {
            ErroController::erroFatal("Solicitacao de valor nao existe para o input : " . $key);
        }
    }
}
