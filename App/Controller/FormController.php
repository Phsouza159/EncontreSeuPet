<?php

 /*Controla os formularios esse arquivo*/  
 /*DIR: caminho fisico do arquivo*/  
include_once __DIR__ . "/ErroController.php";
include_once __DIR__ . "/SessionController.php";


if(isset( $_REQUEST['ACAO_FORM']))  /*função fora da classe, executa sem chamar classe, código somente para esse arquivo*/  
{  /*isset: verificação se o valor, a variavel existe*/  
    FormController::main($_REQUEST['ACAO_FORM']);  /*request: post e get em uma variavel, request.*/  
}



class FormController {  /*apenas o  nome da classe*/  

    public static $CON;  /*valor conexão*/  
    
    
    public static function main($oper) /*principal metodo da classe: main*/  
    {
        switch($oper)  /*switch:if*/    /*$oper: operação, valor do parametro*/  
        {
            case "login":  /**/  
                echo "login";
                self::FormLogin();
                break;  /*parar, sai do switch*/  
            
            case "CADASTRO-POTS":
                self::FormCadastroPots();
                break;
            default:  /*valor não encontrado e aciona o controle de erro:*/  

                ErroController::erroFatal("nao foi possivel efetuar o controle de formularios para a acao: " . $oper);
                break;
        }
    }
    
    private static function FormLogin()
    {
       /* $CON = new Conexao();  cria  objeto*/  
        
        echo "<pre>";
           print_r($_REQUEST);
        echo "</pre>";
        SessionController::verificarLogin( self::getKey('user_log')
                                          ,self::getKey('pass_log') 
                                          , null);  /*conexão de banco de dados*/  
    }
    
    private static function FormCadastroPots()
    {
        $CON    = new Conexao();
        
        $Animal = new Animal(self::getKey("POTS-NOME-PET")
                                ,self::getKey("POTS-PESO-ANIMAL")
                                ,self::getKey("POTS-RACA-PET")
                                ,self::getKey("POTS-COR-ANIMAL")
                                ,self::getKey("POTS-SEXO-PET")
                                ,self::getKey("POTS-PESO-ANIMAL")
                                ,self::getKey("POTS-IDADE-PET")
                                ,NULL
                                ,NULL
                                ,NULL
                            );
         
        $Pots = new Post( null 
                , $Animal 
                , self::getKey('POTS-TITULO')
                , self::getKey('POTS-DESCRICAO-POST'));
        
        echo "<pre>";
           print_r($_REQUEST);
        echo "</pre>";
        GerarPaginaWebPost::main($Pots, $CON->getCon());
        exit;
    }
    
    public static function  getKey($key = 'default')  /*busca chave, key: array*/  
    {
        if(array_key_exists($key, $_REQUEST))  /*verificando se o valor existe no request*/  
        {
            return $_REQUEST[$key];  /*se sim retorna a chave*/  
        }
        else
        {
            ErroController::erroFatal("Solicitacao de valor nao existe para o input : " . $key);
            /*se não retorna o erro*/ 
        }
    }
}
