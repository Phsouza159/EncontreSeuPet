<?php
/**
 * Description of ConfigApp
 *
 * @author paulo
 */
class GetConfigApp {

    private static $configuracao ;
    private static $nomeArquivoConfiguracao    = "AppConfig.ini";
    
    
    public static function Get($args = null)
    {
        self::LocalizacaoArquivo();
        self::LerArquivoConfiguracao();
        
       if(is_null($args))
       {
            ErroController::erroFatal("Argumento nulo na chamada de configuracao: ConfigApp");
       }
       if(array_key_exists($args, self::$configuracao))
       {
           return self::$configuracao[$args];
       }
       else
       {
           ErroController::erroFatal("Nao existe valor no arqumento de configuracao: ConfigApp");
       }
    }
    
    private static function LerArquivoConfiguracao()
    {
       self::$configuracao = parse_ini_file(self::LocalizacaoArquivo() , true);
       //echo "<pre>";
        //print_r(self::$configuracao);
       //echo "</pre>";
    }
    
    
    private static function LocalizacaoArquivo()
    {
        $cam = self::$nomeArquivoConfiguracao;
          
        if(file_exists("./App/".$cam))
        {
            return "./App/".$cam;
        }
        for($int = 10 ; $int > 0 ; $int--)
        {
            
            if(file_exists($cam))
            {
                return $cam;
            }
            $cam = "../" . $cam;
        }
             
        
       ErroController::erroFatal("Erro fatal, nao foi possivel localizar o arquivo de configuracao: ConfigApp");
    }
}
