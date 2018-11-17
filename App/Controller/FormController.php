<?php

 /*Controla os formularios esse arquivo*/  
 /*DIR: caminho fisico do arquivo*/  
include_once __DIR__ . "/ErroController.php";
include_once __DIR__ . "/SessionController.php";
include_once __DIR__ . "../../Model/Conexao.php";
include_once __DIR__ . "../../Model/PessoaDAO.php";
include_once __DIR__ . "../../NucleoClass/AnimalDTO.php";
include_once __DIR__ . "../../NucleoClass/PostDTO.php";
include_once __DIR__ . "../../NucleoClass/PessoaDTO.php";

include_once __DIR__ . "/GerarPaginaWebPost.php";

if(isset( $_REQUEST['ACAO_FORM']))  /*função fora da classe, executa sem chamar classe, código somente para esse arquivo*/  
{  /*isset: verificação se o valor, a variavel existe*/  
    FormController::main($_REQUEST['ACAO_FORM']);  /*request: post e get em uma variavel, request.*/  
}



class FormController {  /*apenas o  nome da classe*/  

    public static $CON;  /*valor conexão*/  
    
    
    public static function main($oper) /*principal metodo da classe: main*/  
    {
        self::$CON = new Conexao();
        
        switch($oper)  /*switch:if*/    /*$oper: operação, valor do parametro*/  
        {
            
            
            case "login":  /**/  
                echo "login";
                self::FormLogin();
                break;  /*parar, sai do switch*/  
            
            
            case "CADASTRO-POST":
                $id = self::FormCadastroPessoa();
                self::FormCadastroPost($id);
                break;
            
            case "EXCLUIR_POST":
                self::FormExcluirPost();
                break;
            
            case "EDITAR_POST":
                self::FormEditarPost();
                break;
            
            case "ALTERACAO-POST-ADMIN";
                self::FormEdicaoPostViaAdmin();
                break;
            
            default:  /*valor não encontrado e aciona o controle de erro:*/  

                ErroController::erroFatal("nao foi possivel efetuar o controle de formularios para a acao: " . $oper);
                break;
        }
    }
    
    public static function  getKey($key = 'default')  /*busca chave, key: array*/  
    {
        if(array_key_exists($key, $_REQUEST))  /*verificando se o valor existe no request*/  
        {
            return $_REQUEST[$key];  /*se sim retorna a chave*/  
        }
        else
        {
            ErroController::erroFatal("Solicitacao de valor nao existe para o input no formulario enviado : " . $key ." :: RESQUEST : <pre>". print_r($_REQUEST)."</pre>");
            /*se não retorna o erro*/ 
        }
    }
    /**
     * Carregar arquivo
     */
    private static function FormUploadFile($nome , $caminho = "../view/Contents/img/")
    {
        if(array_key_exists($nome, $_FILES))
        {           
            $File = $_FILES[$nome];
            $ext = strtolower(substr($File['name'], -4));
            $NomeArquivo = md5(time()) . $ext;
            $Dir = $caminho . $NomeArquivo;
            
            move_uploaded_file($File["tmp_name"] ,__DIR__ ."/". $Dir);
    
            return $NomeArquivo;
        }
        else
        {
            ErroController::erroFatal("Nao foi possivel achar o arquivo : " . $nome);
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
    /**
     * PARA CADASTRO PESSOA
     */
    
    private static function FormCadastroPessoa()
    {
        
        $Pessoa = new PessoaDTO(
                null // ID
                 ,self::getKey("cadastro-nome")
                 ,self::getKey("cadastro-sobrenome")
                 ,self::getKey("cadastro-sexo")
                 ,self::getKey("cadastro-dataNescimento")
                 ,TRUE
                 ,NULL
                 ,1 );
        
       return pessoaDAO::SetNovoUsuario($Pessoa, self::$CON->getCon());
        
    }

    

    /**
     * PARA LOGIN
     */
    private static function FormCadastroPost($id)
    {
              
        $Animal = new AnimalDTO( 
                                null // ID
                                ,self::getKey("POST-ANIMAL-TIPO")
                                ,self::getKey("POST-NOME-PET")
                                ,self::getKey("POST-ANIMAL-PORT")
                                ,self::getKey("POST-RACA-PET")
                                ,self::getKey("POST-COR-ANIMAL")
                                ,self::getKey("POST-SEXO-PET")
                                ,self::getKey("POST-IDADE-PET")
                                ,self::FormUploadFile("CADASTRO-FOTO-ANIMAL")
                                ,true
                                ,NULL
                                ,$id
                            );
         

        $Post = new PostDTO( 
                            null 
                            , $Animal 
                            , self::getKey("TIPO-POST")
                            , self::getKey('POST-TITULO'));
        
        GerarPaginaWebPost::main($Post);
        exit;
    }
    

    /*
     * Excluir Post
     */
    public static function FormExcluirPost()
    {
        PostDAO::inativarPost(self::getKey('excluirId') , self::$CON->getCon());
    }
    
    
    /*
     * Editar Post
     */
    public static function FormEditarPost()
    {
           $post = new PostDTO( self::getKey('ID')
                               ,NULL
                               ,self::getKey('TipoPost')
                               ,self::getKey('Titulo')
                               ,self::getKey('DtCriacao')
                               ,self::getKey('HrCriacao')
                               ,self::getKey('Ativo')
                               ,self::getKey('CaminhoPost') );
        
        PostDAO::editarPost($post ,self::$CON->getCon());
    }
    /**
     * Editar post via admin
     */
    public static function FormEdicaoPostViaAdmin()
    {
        self::FormEditarPost();
    }


    ////////////////////////////// END acoes para POST
}
