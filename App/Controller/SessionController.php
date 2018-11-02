 <?php


include_once __DIR__ . "/ErroController.php"; /*DIR: endereço de onde esta a classe, endereço fisico e inclui direto*/
include_once __DIR__ . "/GetConfigApp.php";


/* classe que cria a sessão*/

/**/
Class SessionController
{
    private static $config; /*static = não há necessidade de estanciar, ou seja, não precisa criar um objeto*/
    private static $reload; /* pega ultima url*/
    
    public static function validarAcesso() /*valida o acesso*/
    {
        self::$config = GetConfigApp::Get("Server_hospedagem"); /*self: apelido da classe. Self só é valido para o static, o self apelida*/
        
        self::sessionStatus(); /**/
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
        
        $_SESSION['SESSION_USER_LOG'] = $user; /* criando uma sessão com o indice */ 
        
        
        echo "<pre>";
            print_r($_SESSION['SESSION_USER_LOG']);
        echo "</pre>";
        
        echo "<a type='button' href='./App/View/Site/Home.php'>Ir para a Home</a>";
       // header("Location: ./App/View/Site/Home.php"); /*location: muda pra pagina que está no caminho */ 
    }
    
    private static function sessionStatus() /* verificar se a sessão esta ligada ou desligada */ 
    {
        if(session_status() !== PHP_SESSION_ACTIVE)/* variavel global:session_status= se está ligada a sessão */ 
        {
            session_start(); /* inicando sessão*/ 
            return true; /*retorno como verdadeiro*/ 
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
    
    public static function verificarLogin($login = null , $senha = null , $conexao = null) /*três parametros */ 
    { 
        // UserDAO -- CRIAR
        //$usuario = UserDAO($login , $senha , $conexao)
        $acesso = GetConfigApp::Get('server'); /* puxa server do getConfigApp.ini  */ 
        
        if($login == $acesso['userAcesso'] && $senha == $acesso['senhaAcesso'])
        {
           self::setSessionUser();
        }
        else{
            echo "<script>alert('Usuario ou senhas incoretas')</script>";
        }
    }
}
