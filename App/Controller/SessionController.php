<?php

include_once __DIR__ . "/ErroController.php";
include_once __DIR__ . "/GetConfigApp.php";



Class SessionController
{
    private static $config;
    private static $reload;
    
    public static function validarAcesso()
    {
        self::$config = GetConfigApp::Get("Server_hospedagem");
        
        self::sessionStatus();
        self::VerificarLogin();
        
        
    }
    
    private static function setSessionUser( /* $user = null*/)
    {
        date_default_timezone_set('America/Sao_Paulo');
        self::sessionStatus();
       // $_SESSION['SESSION_USER_LOG'] = $user;
        $user = array(
            'USER_ATIVO'    => 'Ativo'
           ,'INICIO_SESSAO' => date("h:m:s")
           ,'USER_DADOS'    => new Pessoa() 
           //,'USER_DADOS' =>  $user
        );
        
        $_SESSION['SESSION_USER_LOG'] = $user;
        
        
        echo "<pre>";
            print_r($_SESSION['SESSION_USER_LOG']);
        echo "</pre>";
        
        echo "<a type='button' href='./App/View/Site/Home.php'>Ir para a Home</a>";
       // header("Location: ./App/View/Site/Home.php");
    }
    
    private static function sessionStatus()
    {
        if(session_status() !== PHP_SESSION_ACTIVE)
        {
            session_start();
            return true;
        }
    }
    
    public static function VerificarSession()
    {
        self::sessionStatus();
        
        $session = isset( $_SESSION['SESSION_USER_LOG']) ? 
                            $_SESSION['SESSION_USER_LOG']
                            : null;
        if(is_null($session))
        {
            
            $url = $_SERVER['SERVER_NAME'] ."". $_SERVER['REQUEST_URI'];

            header("location:  http://" . $_SERVER['SERVER_NAME'] ."/EncontreSeuPet/index.php?pag_reload=" . $url);
        }
        
        if($session['USER_ATIVO'] == 'Ativo')
        {
            return  $session;
        }
        
        return false;
    }
    
    public static function verificarLogin($login = null , $senha = null , $conexao = null) 
    { 
        // UserDAO -- CRIAR
        //$usuario = UserDAO($login , $senha , $conexao)
        $acesso = GetConfigApp::Get('server');
        
        if($login == $acesso['userAcesso'] && $senha == $acesso['senhaAcesso'])
        {
           self::setSessionUser();
        }
        else{
            echo "<script>alert('Usuario ou senhas incoretas')</script>";
        }
    }
}
