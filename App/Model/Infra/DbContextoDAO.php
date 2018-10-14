<?php

/**
 * Description of DbContexto
 *
 * @author paulo-pc
 */
DbContextoDAO::ConexaoMysql();
echo 'a';
class DbContextoDAO {

    private static $ArquivoConfig = '../AppConfig.ini';
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
                    ) or die("Could connect to Database");

            if (!$con) {
                echo "Sem conexao";
            }
            return $con;
       } catch (Exception $ex) {
           echo "Erro fatal: conexao";
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
        // o arquivo exite ?
        if (file_exists(self::$ArquivoConfig)) {
            $aux = parse_ini_file(self::$ArquivoConfig, true);
            //tratar aux // nao existe ainda

            self::setDataConfig($aux['conexao_mysql']);
        } else {
            //controlle erro;
        }
    }

    private static function getDataConfig() {
        return self::$DataConfig;
    }

    private static function setDataConfig($DataConfig) {
        self::$DataConfig = $DataConfig;
    }

}