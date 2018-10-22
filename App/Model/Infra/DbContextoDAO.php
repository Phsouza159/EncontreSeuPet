<?php

/**
 * Description of DbContexto
 *
 * @author paulo-pc
 */

//echo __DIR__;
class DbContextoDAO {

    private static $ArquivoConfig = "AppConfig.ini";
    private static $DataConfig; //config de acesso ao banco static 
   

    /*
     * Carregar conexao
     */

    public static function ConexaoMysql() {
       try {
            self::GetConfiguracaoServer();
            
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8;',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    );

            $con = new PDO(
                    "mysql:host=" . self::$DataConfig['host'] 
                    . ";dbname=" . self::$DataConfig['datasource']
                    , self::$DataConfig['user']
                    , self::$DataConfig['password']
                    , $options
                    );

            if (!$con) {
                echo "Sem conexao";
                exit;
            }
            return $con;
       } catch (Exception $con) {
           ErroController::erroFatal("Erro ao conectar ao banco: " . $con->getMessage());
          exit;
       }
    }

    public static function ConexaoMysql_Close($con) {
        if ($con) {
           $con = null;

        } else
        {
        }
    }

    /**
     * Carregar configuracao do app config;
     */
    private static function GetConfiguracaoServer() {
        
        $arquivoConfig = self::verificarLocalizacaoArquivo();
        
        // o arquivo exite ?
        if (file_exists($arquivoConfig)) {
            $aux = parse_ini_file($arquivoConfig, true);
            //tratar aux // nao existe ainda
           
             if($aux['tipo_conexao']['localhost'] == true)
             {    
                 self::setDataConfig($aux['conexao_mysql_localhost']);
             }
             elseif($aux['tipo_conexao']['webhost'] == true)
             {
                 self::setDataConfig($aux['conexao_mysql_webhost']);
             }
             elseif($aux['tipo_conexao']['webhost'] == false && $aux['tipo_conexao']['localhost'] == false)
             {
                 ErroController::erroFatal("Nem uma tipo de conexao definida para a base de dados");
             }
             else
             {
                 ErroController::erroFatal("Nao foi possivel ler o tipo de conexao no arquivo de configuração");
             }
                       
            
        } else {
            echo self::verificarLocalizacaoArquivo();
            ErroController::erroFatal("Nao foi possivel ler arquivo de configuração.");
         
        }
    }
    public static function verificarLocalizacaoArquivo()
    {
        
        $cam = self::$ArquivoConfig;
        
        if(file_exists($cam))
        {
            return $cam;
        }
            
        
        for($int = 10 ; $int > 0 ; $int--)
        {
            $cam = "../" . $cam;
            
            if(file_exists($cam))
            {
                return $cam;
            }
        }
        
        return $cam;
    }
    
    private static function getDataConfig() {
        return self::$DataConfig;
    }

    private static function setDataConfig($DataConfig) {
        self::$DataConfig = $DataConfig;
    }

}
