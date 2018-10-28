<?php
    /*****************
     *  MAIN - ATLAS
     *
     *  @author Paulo Henrque R Souza
     *  @version 2.0
     *
     *****************/
    session_start();

    $main  = new Main();

    $_SESSION['main'] = $main;  // passar objeto por sessao

    $main->getStartMain();

     class Main
     {
        public $systemVersion = "2.0";
        public $systemName    = "Atlas";
        public $langSystem    = "";
        public $systemFiles   = array();
        public $idioma     = array();

        # ----- Modulo
        public const modTerminal      = "System/bin/src/mod_terminal.php";



        public $nae;
        public $reloadPag;
        public $indexPag;

        public $url  = array();
        public $get  = array();
        public $post = array();


        # ----------- name system
        public  const fileIndexAltas      = "atlas_index.php";
        public  const fileSystem          = "System/Atlas_system.php";
        public  const nameObejectAtlas    = "Atlas_system";
        public  const nameObejectConst    = "SystemConstructAll";
        public  const nameObejectTermi    = "terminalControl";

        # ---------- pacth
        public  const camSystem           = "System/";
        public  const modGetIdioma        = "System/pacth/mod_get_idioma.php";
        public  const modArraySearchFiles = "System/pacth/mod_map_search_file.php";
        public  const modControlErro      = "System/pacth/mod_control_erro.php";
        public  const modMapFile          = "System/pacth/mod_map_files.php";
                                            //SystemConstructAll
        public  const construtorSystem    = "System/bin/SystemConstructAll.php";
        public  const terminalControl     = "System/bin/terminalControl.php";


        function __construct()
        {
            $this->startSession();
            $this->getUrl();

            include_once Main::modGetIdioma;
            $this->langSystem  = $this->getIssetPass("lang" , 0 , true , "pt-br");
            mod_get_idioma( $this->langSystem );

            $this->idioma   = $this->getIssetPass("getIdioma" , 1 , true);
            $this->systemFiles = $this->getIssetPass("systemFiles" , 1 , true);

            //print_r($this->idioma);
            //exit;
            include_once Main::construtorSystem;
            include_once Main::fileSystem;
            include_once Main::modMapFile;
            include_once Main::terminalControl;

            $aux = "" ;

            if(!$this->getIssetPass("SystemConstructAll" , 1))
            {
                mod_map_files($aux , $Null , Main::camSystem);
                $this->getO( Main::nameObejectConst , $this->langSystem )->setSystem($aux);
            }
            if(!$this->getIssetPass("terminalControl" , 1))
            {

              $this->getO( Main::nameObejectTermi , $this->langSystem );

            //  exit;
            }

            //terminalControl.php

            unset($_SESSION['SystemConstructAll']);
            echo "<pre>";
                print_r($this->systemFiles);
                print_r($this->idioma);
            echo "</pre>";
        }
        /**
         * funcao de start - Entrada
         */
        public function getStartMain()
        {
            $this->includeSystem_modulos();
            $this->geturl();
            $this->getProcesValUrl();
            # --- carregar index padrao
            if( preg_match("/main.php/" , $_SERVER['REQUEST_URI']) ||  $_SERVER['REQUEST_URI'] == "/")
              $this->getPag( Main::fileIndexAltas );
        }
        /***
         * funcao de entrada
         *
         * @var string          =>      $par        : parametro passado para o sistema
         * @var boleano         =>      $return     : controle de retorno
         * @var boleano         =>      $Sytem      : controle do tipo de systema chamada // padrao atlas
         */
        public function init( $par = null , $return = FALSE , $Sytem = NULL)
        {
            $aux =  $this->getO( $Sytem )->start( $par );
            if($return)
                return $aux;
            return NULL;
        }
        public function getLang($langId = null , $return = FALSE)
        {

            if(is_null($langId)) return;

            if(is_null($this->idioma))
            {
                //erro de idioma
            }
            //exit;
            if($return)
                return $this->idioma[$langId];
                echo $this->idioma[$langId];
        }
        # ---------------- start session
        public function startSession()
        {
            if(session_status() !== PHP_SESSION_ACTIVE)
                session_start();

        }
        # ---------------- incluir systema
        private function includeSystem_modulos()
        {
            include_once Main::fileSystem;
            include_once Main::modArraySearchFiles;
            include_once Main::modControlErro;

        }
        # ---------------- carregar valores url
        private function getProcesValUrl()
        {

          # ---- caso de reload para pag externa
          if($this->getIssetPass("reload" , 1))
            $this->reload($this->getIssetPass("reload" , 0 , 1));

          # --- pegar outra pag com solicitacao feita na url
          if($this->getIssetPass("getPag"))
            $this->getPag();
        }
        # ---------------- buscar pag
        private function getPag( $get = NULL )
        {

         if(is_null($get))
            $get = $_SERVER['REQUEST_URI'];

          if(preg_match("/\//" , $get))
            $get = str_replace("/" , "" , $get);

         if(preg_match("/\?/" , $get))
         {
             $aux = explode("?" , $get);
             $get = $aux[0];
         }

            if($this->getO()->getInclude($get , FALSE) === FALSE)
            {
                $this->getPag( Main::fileIndexAltas );
                mod_control_erro(1 , "Pagina não encontrada. Pag:: " . $get );
            }

        }
        # ---------------- mandar para outra pagina
        private function reload( $pag )
        {
            $aux = mod_map_search_file( $pag );
            header("location: " . $aux['cam']);
        }
        /**
         *
         * carregar obejtos /// criar switch com os obejtos
         */
        public function getO( $Object = NULL , $paramentro = null)
        {
            if(is_null($Object))
                $Object = Main::nameObejectAtlas;

            return new $Object($paramentro);
        }

        # ------------- pegar valores da Url
        public function getUrl()
        {
            foreach ($_POST as $key => $aux)
                $this->post[$key] = $aux;

            foreach ($_GET as $key => $aux)
                $this->get[$key]  = $aux;

            $this->url = array_merge($this->get , $this->post);
        }
        # -------------- trazer valor se existir
        /**
         * Verificar se existe a passagem da variavel pelo post get session e etc
         *
         * @var string      =>      $name   : nome da variavel a ser verificada
         * @var boleano     =>      $return : da retorno da varivavel
         *                                      / FALSE     =>  retorna se existe ou nao na forma de boleano
         *                                      / TRUE      =>  retorna o valor da variavel se existir
         *                                          / NULL  =>  no caso de nao existir e forcar retorno retorna NULL
         * @var numeric     =>      $oper   : tipo de variavel a ser verificada
         *                                      / 0 para url
         *                                      / 1 para sessao
         *                                      / 2 para arrays
         * @var array       =>      $array  : verificar dentro do array no caso OPER = 2 ;
         */
        public function getIssetPass( $name , $oper = 0 , $return = NULL , $valorNull = NULL ,$array = NULL)
        {
            $aux = NULL;

            switch ($oper)
            {
                case 0:
                    $aux = isset($this->url[$name]) ?
                                 $this->url[$name] :
                                    $valorNull;
                    break;
                case 1:
                    $aux = isset($_SESSION[$name]) ?
                                $_SESSION[$name] :
                                    $valorNull;
                    break;
                case 2:
                    $aux = isset($array[$name]) ?
                                $array[$name] :
                                    $valorNull;
                    break;
                default:
                    # code...
                    break;
            }

            if(is_null($return))
            {
                if(is_null($aux))
                    return NULL;
                else
                    return TRUE;
            }
            if($return)
                return $aux;
        }
     }

?>
