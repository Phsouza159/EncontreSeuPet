<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'layout/MenuNav.php';
?>

<html>
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width">
        <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Home.less?v=1.0.<?php echo random_int(1 , 100)?>" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
        <!-- include bootstrap --> 
        <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css">
    </head>
    <body>
        
        <?php 
        MenuNav::menu(); 
        ?>
        <!--
<div> 
    <h1 class="cabecalho-header" >Encontre Seu Pet</h1>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators - ->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>  
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides - -> 
                <div class="carousel-inner">

                    <div class="item active">
                        <div class='div-01'>

                            <div class='conteiner-corpo'>
                                <center>
                                    <h1>Ola visitante! :)</h1> 
                                    <h3>bola um texto ai era uma vez um grupo tentando fazer tcc, mas infelizmente a chapeuzinho vermelho invaiu e rackeou a aplicação. É isso, obreigada chapeuzinho</h3>
                                    
                                    <button tupe='button' class="btn btn-outline-primary" onclick="window.location.href = './Visitante.php'">Visitantes</button>
                                </center>
                            </div>

                        </div>
                    </div>   
                    <div class="item">

                        <div class='div-02'>
                            <div class='conteiner-corpo'>
                                <center> 
                                     <h1></h1>
                                     <h3> 
                                         <span>
                                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                         </span>
                                     </h3>
                                     
                                    
                                    <button tupe='button' class="btn btn-outline-primary" onclick="window.location.href = './Cadastro.php'">Cadastro</button> 
                            </div>
                        </div>
                    </div>

                    <div class="item">

                        <div class='div-03'>
                            <div class='conteiner-corpo'>
                                <center> 
                                    <button tupe='button' class="btn btn-outline-primary" onclick="window.location.href = './APP/view/layout/CadastroAdocao.php'">Adoção</button>
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="item">

                        <div class='div-04'>
                            <div class='conteiner-corpo'>
                                <center> 
                                    <button style="margin: 250px 0 0 250px" class="btn btn-outline-primary" onclick="window.location.href = './APP/view/layout/COLOCAR AQUI O ARQUIVO QND CRIAR'">Patrocinadores</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls  - ->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span><img style='margin-top: 50vh' src='../Contents/img/seta-left.png' width='50px' height="50px"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span><img style='margin-top: 50vh' src='../Contents/img/seta-right.png' width='50px' height="50px"></span>
                    <span class="sr-only">Next</span> 
                </a>  po que triste kkkk aloooooooooooooo to ouvindo sim, mas eu não posso falar agora kk blz
            </div> 
        </div>
-->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>  
                    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="3"></li>
                </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class='div-01 img-fluid'>   
                            <div class='conteiner-corpo'>
                                <center> 
                                    <button tupe='button' class="btn btn-outline-primary" onclick="window.location.href = './APP/view/layout/CadastroAdocao.php'">Adoção</button>
                                </center>
                            </div>
                        </div>
    </div>
    
      <div class="carousel-item">
          <div class='div-02'>
              <div class='conteiner-corpo'>
                                <center> 
                                     <h1></h1>
                                     <h3> 
                                         <span>
                                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                         </span>
                                     </h3>
                                     
                                    
                                    <button tupe='button' class="btn btn-outline-primary" onclick="window.location.href = './Cadastro.php'">Cadastro</button> 
                            </div>
          </div>
    </div>
        <div class="carousel-item">
            <div class='div-03'>
                
                <div class='conteiner-corpo'>
                                <center> 
                                    <button tupe='button' class="btn btn-outline-primary" onclick="window.location.href = './APP/view/layout/CadastroAdocao.php'">Adoção</button>
                                </center>
                            </div> 
            </div>
    </div>
      
      <div class="carousel-item">
          <div class='div-04'>
                                          <div class='conteiner-corpo'>
                                <center> 
                                    <button style="margin: 250px 0 0 250px" class="btn btn-outline-primary" onclick="window.location.href = './APP/view/layout/COLOCAR AQUI O ARQUIVO QND CRIAR'">Patrocinadores</button>
                                </center>
                            </div>
          </div>
    </div>
  
  </div>

    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
        <footer>
            <h1>RODAPE</h1>
        </footer>
        
        <!-- Chamar dependencias javascript -->
        <script src="../Contents/js/jquery3.3.1.js"></script>
        <script src="../Contents/js/bootstrap.min.js"></script>
        
    </body>
</html>


