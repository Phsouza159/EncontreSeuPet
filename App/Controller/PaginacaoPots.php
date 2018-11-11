<?php
  /**
   * Funcao que traz um mini poster contendo informcaoes.. bla bla
   */
  include_once __DIR__ . '/ErroController.php';

  Class PaginacaoPots // extends Post --- herdar atributos e metados da class POST (Criar class )
  {
    private $numPost;                     // quantidade de posters   
    private $posts;                        // array com pots
    private $numPostForBloc;              // quantidade de posts por bloco de exibicao
    private $numForPost;                  // numero de butoes necessarios para navegar entre os blocos que contem o postesMini
    private $atualNumMiniPost;            // bloco atual do posters -- um blco igual a @var numPostForBloc
    private $atualBlocMiniPost;           // o bloco atual em que esta a pag

    private $numQntExibirButtons;         // quantidade de buttons que vai na exibicao do nav buttons

    private $pagUrl;                      // aux para a pagina que vai a fucao

    
    private $controleDireitaEsquerda = false;
    private $postsNames = array();
    

        ##################################### --- CONSTRUTOR

    public function __construct( // valore padroes
                                $numPost             = 0,
                                $posts               = null,
                                $numPostForBloc      = 5,
                                $numQntExibirButtons = 6,
                                $pagUrl              = "./Posts.php")
    {
      
      $this->numPost             = $numPost;
      $this->numPostForBloc      = $numPostForBloc;
      $this->numQntExibirButtons = $numQntExibirButtons;
      $this->pagUrl              = $pagUrl;
      $this->CarregarPost($posts);
    }
    
    //************************
    public function CarregarPost($posts)
    {
        
        $this->posts = $posts;
        //echo "<pre>";
        // print_r($posts);
        //echo "</pre>";
        $pots_ = array();
        
        for($i = 0 ; $i < count($posts) ; $i++)
        {
           $pots_[] = $posts[$i]['CaminhoPost'];                   
        }
 
        $this->setPostsNames($pots_);
    }
    
    private function setPosts($posts)
    {
        $this->posts = $posts;
    }
    
    private function getPosts()
    {
        return $this->posts;
    }
    
    private function getPostsNames() 
    {
        return $this->postsNames;
    }

    private function setPostsNames($postsNames) 
    {
        $this->postsNames = $postsNames;
    }
    private function getNumPost() 
    {
        return $this->numPost;
    }

    private function setNumPost($numPost) 
    {
        $this->numPost = $numPost;
    }
    #-------------------------------------------------- FUNCOES DE SAIDA DE DADOS
    /**
      * Funcao Gerar View do motor dos Posts MINI
      */
    public function ViewMiniPost()
    {
      
        if($this->posts == null)
        {
            echo "sem registro :/";
            return;
        }
        
        
      #------ Carregar informacoes necessarias -- navegação
      $this->GetNumMiniPostNav();
      $this->GetAtualNavPost();
      
      
    //  $files  = $this->getPostsNames(); // nome dos arquivos que contem os pots 
     // $chaves = array_keys($files);
      
      
     
      echo "<fieldset>
              <legend>Posts</legend>";
              /**
                * @var int   $x                            = poster inicial do bloco
                * @var int   $this->numPostForBloc         = Quantidae de posts por bloco
                * @var bool  CONDICIONAL BREAK DO LACO     = Poster inicial + quantidade de exibicao de posts por bloco >> GERAR BLOCOS DE 5 Posters
                */
              for($x = $this->atualNumMiniPost ; $x < $this->atualNumMiniPost + $this->numPostForBloc ; $x++)
              {
                # ------ Buscar Poster MINI
                
                  // o primeiro parametro e o nome do arquivo : o segundo e o caminho dele : ai jogo para a funcao que cria o view do mini posts
                    //$this->GetMiniPost($chaves[$x-1] , "../Posts/".$files[$chaves[$x-1]]);
                    $this->GetMiniPost( $this->posts[$x - 1]);
                    
                    if(($x % 2 != 0))
                    {
                        AnuncioDTO::GerarAnuncio();
                    }
                    
                
                if($x == $this->numPost ) // Controlador -- bloquear de exibir mais posters do que existe
                  break;
              }
              


      echo"</fieldset>";
              #---- Gerar nav buttons
              $this->GetNavBarMiniPost();
    }

    /**
      * Gerar Nav buttons para navegacoes entre blocos ex: para ir do bloco 1 para bloco 3 > button com redirecionamento levando valor do bloco 3 para o >> GetAtualNavPost() tratar a informacao
      * Argumentos null, retorno null
      */
    private function GetNavBarMiniPost()
    {
      $auxAnter;          // valor do nav buttom anterior ao atual nav
      $auxProx;           // valor do proximo nav buttom ao atual nav
      $auxInicialNav;     // valor do primeiro nav buttom
      $auxFinalNav;       // valor do ultimo nav buttom

      // Setar os valores da configuracao
      $this->SetValButtoAnter($auxAnter);
      $this->SetValButtoNext($auxProx);
      $this->SetEfectButton($auxInicialNav ,$auxFinalNav );
      
    
      echo "<nav aria-label='Page navigation example'>
                  <ul class='pagination justify-content-center pagination-sm'>";

            
            if( 1 == $this->atualBlocMiniPost)
            {
                echo "<li class='page-item disabled'><a class='page-link' href='".$this->pagUrl."?AtualNavPost=1'><b><<</b></a></li>";
                echo "<li class='page-item disabled'><a class='page-link' href='".$this->pagUrl."?AtualNavPost=".$auxAnter."'><b><</b></a></li>";
            }
            else
            {
                echo "<li class='page-item'><a class='page-link' href='".$this->pagUrl."?AtualNavPost=1'><b><<</b></a></li>";
                echo "<li class='page-item'><a class='page-link' href='".$this->pagUrl."?AtualNavPost=".$auxAnter."'><b><</b></a></li>";
            }

            //echo "<button onclick=\"window.location.href='".$this->pagUrl."?AtualNavPost=1'\"><b><<</b></button>"; // voltar para o primeiro nav
            //echo "<button onclick=\"window.location.href='".$this->pagUrl."?AtualNavPost=".$auxAnter."'\"><b><</b></button>"; // voltar um nav antes - anterior

            /**
              * @var int  $x                       = $auxInicialNav > nav INICIAL
              * @var bool CONDICIONAL BREAK        =  $x <= $auxFinalNav > se x chegar a quantidade do buttom final de EXIBICAO ele para
              * @var int  $this->atualBlocMiniPost = a nav buttom que esta a bloco atual
              */
            for($x = $auxInicialNav ; $x <= $auxFinalNav ; $x++)
            {
                
              // gerar redirecionamento com o button pra cada nav com o seu bloco correspondente

              if($x == $this->atualBlocMiniPost)
              { // da efeito visual a onde o nav atual do bloco fica com a cor  > se ta no nav buttom 2 = o buttom 2 fica com a cor
                //  echo "<button class='btn-atual-nav-motorpost' onclick=\"window.location.href='".$this->pagUrl."?AtualNavPost=".$x."'\"><span class='body-post-mini-numInfo'>".$x."<span></button>";
                 echo "<li class='page-item active'><a class='page-link' href='".$this->pagUrl."?AtualNavPost=".$x."'>".$x."</a><span class='sr-only'>(current)</span></li>";
              }
              else
              { // demais buttons
               // echo "<button onclick=\"window.location.href='".$this->pagUrl."?AtualNavPost=".$x."'\"><span class='body-post-mini-numInfo'>".$x."<span></button>";
                 echo "<li class='page-item'><a class='page-link' href='".$this->pagUrl."?AtualNavPost=".$x."'>".$x."</a></li>";
              }
            }
             
            //echo "<button onclick=\"window.location.href='".$this->pagUrl."?AtualNavPost=".$auxProx."'\"><b>></b></button>"; // avancar um nav buttom
            //echo "<button onclick=\"window.location.href='".$this->pagUrl."?AtualNavPost=".$this->numForPost."'\"><b>>></b></button>"; // ir para o ultimo nav
 
            if($this->atualBlocMiniPost == $auxFinalNav)
            {
                echo "<li class='page-item disabled'><a class='page-link' href='".$this->pagUrl."?AtualNavPost=".$auxProx."'><b>></b></a></li>";
                echo "<li class='page-item disabled'><a class='page-link' href='".$this->pagUrl."?AtualNavPost=".$this->numForPost."'><b>>></b></a></li>";
            }
            else
            {
                echo "<li class='page-item'><a class='page-link' href='".$this->pagUrl."?AtualNavPost=".$auxProx."'><b>></b></a></li>";
                echo "<li class='page-item'><a class='page-link' href='".$this->pagUrl."?AtualNavPost=".$this->numForPost."'><b>>></b></a></li>";
            }

      echo "</ul>
          </nav>";
    }
    /**
      * Carregar valores do buttom anterior
      * Argumentos {
      *             @var int $Anter => valor que vai o numero anterior
      *            }
      *
      * return @var int  $Anter REFERENCIA -> @var int $auxAnter em (GetNavBarMiniPost()),
      */
      private function SetValButtoAnter( &$Anter)
      {
        ## Carregar o valor do button '<' anterior para a acao do click com base no nav atual
        if($this->atualBlocMiniPost <= 1 )
            $Anter= 1;
        else
            $Anter = ($this->atualBlocMiniPost - 1 );
      }
      ## mesmo mecanismo que a funcao de cima so que para o $prox
      private function SetValButtoNext( &$prox )
      {
        ## Carregar o valor do button '>' anterior para a acao do click com base no nav atual
        if($this->atualBlocMiniPost >= $this->numForPost)
            $prox  = $this->atualBlocMiniPost;
        else
            $prox  = ($this->atualBlocMiniPost + 1 );
      }

      /**
        * Funcao que seta o efeito do buttom atual sempre ficar no meio da div de exibicao dos buttons
        *            Carregar a quantidade de buttons que e exibidos
        *            WARNING: FUNCAO APENAS SETA OS VALORES ---- QUE FAZ A EXIBICAO E CONTROLE E O LACO DE REPETICAO NO FUNCAO GetNavBarMiniPost()!
        * Argumentos {
        *               @var int $auxInicialNav = nav buttom INICIAL de exibicao
        *               @var int $auxFinalNav   = nav buttom FINAL de exibicao
        *            }
        * retorno    {
        *               @var int  $auxInicialNav REFERENCIA -> @var int $auxInicialNav em (GetNavBarMiniPost()),
        *               @var int  $auxFinalNav   REFERENCIA -> @var int $auxFinalNav em (GetNavBarMiniPost()),
        *            }
        */
      private function SetEfectButton(&$auxInicialNav , &$auxFinalNav )
      {
        $numButtonsExibicao = $this->numQntExibirButtons; // Carregar a quantidade de exibicao de buttons
        
        
        if($numButtonsExibicao >= $this->numPost) // mecanismo de controle de erro --- numero de posts menor que a de buttons a exibir
        {
            $numButtonsExibicao = $this->numPost;
            $auxInicialNav      = 1;
            $auxFinalNav        = $this->numForPost;
            return null;
        }
        $intervaloDeButons = $numButtonsExibicao / 2; // Carregar intervalo do efeito

        $qntButtoesNecessario =  $this->numPost / $this->numPostForBloc;
        
        
        $qntButtoesNecessario = is_float($qntButtoesNecessario) // verificar se o resultdao da divisao de um numero real
                                            ? intval($qntButtoesNecessario) + 1 // se for numero real, pegar o seu valor inteiro e somar +1 ;
                                                 : $qntButtoesNecessario;
        
       // echo $qntButtoesNecessario . " -- " ;
        
                
        $intervaloDeButons = is_float($intervaloDeButons) // verificar se o resultdao da divisao de um numero real
                                            ? intval($intervaloDeButons) + 1 // se for numero real, pegar o seu valor inteiro e somar +1 ;
                                                 : $intervaloDeButons;
        //echo $intervaloDeButons;
        
        if($this->atualBlocMiniPost <= $intervaloDeButons) // incio dos nav -- efeito OFF
        {
          $auxInicialNav = 1;
          $auxFinalNav   = $qntButtoesNecessario <= $intervaloDeButons 
                                                       ? $numButtonsExibicao 
                                                       : $numButtonsExibicao > $qntButtoesNecessario 
                                                                                  ? $qntButtoesNecessario 
                                                                                  : $numButtonsExibicao;
        // echo " -- " .$auxFinalNav;
        }
        else                          
        {
          $auxInicialNav = $this->atualBlocMiniPost - $intervaloDeButons;// pegar o atual e diminuir pelo raio do efeito a esquerda (inicio)

          $auxFinalNav   = $this->atualBlocMiniPost + $intervaloDeButons; // pegar o atual e aumentar pelo raio do efeito a direita (final)

          if($auxFinalNav > $this->numForPost) // quando chegar no limite de exibicao dos navs buttons o efeito para -- efeito OFF
          {
            $auxFinalNav   = $this->numForPost;  // final pega o ultimo buttom
            $auxInicialNav = ($auxFinalNav - $numButtonsExibicao) <= 0 ? 1 : ($auxFinalNav - $numButtonsExibicao);


          }
          //echo " -- " .$auxInicialNav;
        }
      }

    /**
      * Funcao que ira pegar as informacoes do mini Poster
      * Argumentos {
      *               @var int $x = apenas controle de visualizacao
      *            }
      * retorno null
      */
   //private function GetMiniPost($titulo , $caminho)
    private function  GetMiniPost($post)
    {
        if($this->controleDireitaEsquerda)
        {
           include __DIR__ . "../../View/Site/Layout/MODE_MINI_POST_RIGHT.php"; 
           $this->controleDireitaEsquerda = false;
        }
        else 
        {
            include __DIR__ . "../../View/Site/Layout/MODE_MINI_POST_LEFT.php";
            $this->controleDireitaEsquerda = true;
        }
        
        
      /*echo "<div class='row card espaco-pots'>
              
                <div class='col'><img src='#'></div>
                
                <div class='card-body col'>
                
                    <h3 class='card-title'>".$post['titulo']."</h2>
                     
                    <p class='card-text'>".$post['descricao']."</p>
                    <a class='btn btn-primary' href='../Posts/".$post['caminho']."'>Visualizar post<a/> 
                    <br/>
                    </hr>
                    <p class='card-text'>publicação: ".$post['dtCriacao']."</p>
                </div>
             </div>";*/
    }


    /**
      * Funcao para pegar o atual bloco de Posters mini PELO VALOR QUE VEM NA URL >>> GET
      * Argumentos null, retorno null
      * @var  int     $aux                    = Auxiliar para tratamento das operacoes
      * @var  int     $this->atualNumMiniPost = numero do posts que vai no comeco do bloco
      * @var  int     $this->$numPostForBloc  = controle de posts por bloco
      */
    private function GetAtualNavPost()
    {
      //pegar o valor da url
      $aux = isset($_GET["AtualNavPost"]) ?
                    $_GET["AtualNavPost"] :
                        1;


      // pegar o atual bloco sem formatacao para o post inicial // codigo abaixo -> passar valor para o $this->atualBlocMiniPost = nav atual
      if($aux > 0 && $aux <= $this->numForPost)
          $this->atualBlocMiniPost = $aux;
      else
          $this->atualBlocMiniPost = 1;



      /********* FORMULAR PARA PEGAR O POSTER MINI INICIAL **********/
      if($aux < 0 || $aux == 1 || $aux > $this->numForPost || $aux == "")
        $aux = 1;

      elseif ($aux == 2)
      {
        $aux += ($this->numPostForBloc - 1);
      }
      else
      {
        $aux = ($aux * $this->numPostForBloc ) - ($this->numPostForBloc - 1);
      }
        /*   Explicacao:
              para AtualNavPost = 3; * valor do atual vem do nav buttoes -> que permite a nevegacao entre os blocos
                  quantidade de post = 17
                  exibicao por bloco = 5
                    temos:
                      aux = 3
                            se aux < 0 ou aux igual = 1 ou aux maior que a quantidade de nav buttons,
                                \> entao -> aux = 1 (posts do bloco comeca no primeiro 1)
                            se aux igual = 2
                                \> entao -> 2 + ( 5 'exibicao por bloco' - 1 ) ->aux =  6 (posts do bloco comeca na sexto 6)
                            se aux maior > 2
                                \> entao -> ( 3 'ou maior, depende do valor que aux recebe' *  5 'exibicao por bloco') - (5 'exibicao por bloco' - 1) > 15 - 4 -> aux = 11 (posts do bloco comeca na 11)

                            * fazendo a regra de exibicao conforme o valor de exibicao do bloco

      /*************************************************************/
      $this->atualNumMiniPost = $aux;
    }
    /**
      * Funcao para pegar a quantidade de nav buttons necessarios para navergar entre os blocos de posters mini
      *                                                       ex: 17 posts :: aux = 17/5 > aux = 3.4 > valor inteiro = 3 > 3 + 1 = 4 : 4 abas necessarias para exibir 17 posters em 4 blocos
      * Argumentos null, retorno null
      * @var  int     $aux                    = Auxiliar para tratamento das operacoes
      * @var  int     $this->numPost          = Quantidade de posters
      */
    private function GetNumMiniPostNav()
    {
      $aux = $this->numPost / $this->numPostForBloc; //dividir a quantidade de posts pela quantidae de saida dos posters na tela (que sao 5)
      if(is_float($aux)) // verificar se o resultdao da divisao der um numero real
      {
        $aux = intval($aux) + 1; // se for numero real, pegar o seu valor inteiro e somar +1 ;
      }
      if($aux < 0)
        $this->numForPost = 0;

        $this->numForPost = $aux;
    }

  }
 ?>
