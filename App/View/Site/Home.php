<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../../NucleoClass/AnuncioDTO.php';
include_once './Layout/MenuNav.php';
//include_once '../../Controller/SessionController.php';


//SessionController::VerificarSession();

?>
<html>
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width">
        <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Home.less?v=1" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/footer.less?v=1" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Anuncios.less?v=1" />
        <!-- Chamar biblioteca (LESS)-->
        <script type="text/javascript" src="../Contents/plugins/less/dist/less.min.js"></script> 
        
        <link rel="stylesheet" href="../Contents/Css/font-awesome.css" type="text/css" />
        <!-- include bootstrap --> 
         <link rel="stylesheet" type="text/css" href="../Contents/plugins/bootstrap/css/bootstrap.css">
    </head>
    <body>

        <?php
          MenuNav::menu();
        ?>

        <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>  
                <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                <li data-target="#carouselExampleFade" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">


                <div class="carousel-item active">
                    <div class='div-01'>   
                        <div class='conteiner-corpo'>
                            <center> 
                                <h1></h1>
                                <h3> 
                                    <span>
                                        Cadastre seu animal e crie um post para doação ou caso esteja desaparecido
                                        <br>
                                        <br>
                                        ...
                                        <br>
                                    </span>
                                </h3>
                                  <button tupe='button' class="btn-acao-links" onclick="window.location.href = './Cadastro.php'">Cadastro</button> 
                            <!-- -->    <!--   <button tupe='button' class="btn-acao-links" onclick="window.location.href = './Visitante.php'">Visitantes</button> --> 
                            </center>
                        </div>
                    </div>
                </div>

                <div class="carousel-item div-02">
                    <div class=''>
                        <div class='conteiner-corpo'>
                            <center> 
                                <h1></h1>
                                <h3> 
                                    <span>
                                        Post de animais desaparecido.<br>
                                       
                                        
                                    </span>
                                </h3>


                               <button tupe='button' class="btn-acao-links" onclick="window.location.href = './'">Visualizar</button>  
                            </center>             
                        </div>

                    </div>
                </div>
                <div class="carousel-item div-03">
                    <div class=''>
                        <div class='conteiner-corpo'>
                            <center> 
                                <h1></h1>
                                <h3> 
                                     <span>
                                        Post de animais para adoção.<br>
                                        
                                        
                                    </span>
                                </h3>
                                <button tupe='button' class="btn-acao-links" onclick="window.location.href = './'">Visualizar</button>
                            </center>
                        </div> 
                    </div>
                </div>

                <div class="carousel-item div-04">
                    <div class=''>
                        <div class='conteiner-corpo'>
                            <center> 
                                <h1></h1>
                                <h3> 
                                    <span>
                                        Encontre Seu Pet é um serviço de utilidade pública <br>
                                        e não visa lucro com a prestação deste serviço. <br>
                                        Para que a aplicação se mantenha, contamos com  <br>
                                        a ajuda de patrocinadores e colaboradores. <br><br>
                                        Torne patrocinador, e venha fazer parte                                                
                                    </span>
                                </h3> 
                                <button class="btn-acao-links" onclick="window.location.href = './CadastroPatrocinador.php'">Patrocinadores</button>
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
       <?php

        AnuncioDTO::GerarAnuncio();

       ?> 
       
        
        <footer class="footer-body">
           <?php
              MenuNav::footer();
           ?>

        </footer>

        <!-- Chamar dependencias javascript -->
        <script src="../Contents/js/jquery3.3.1.js"></script>
        <script src="../Contents/plugins/bootstrap/js/bootstrap.js"></script>

    </body>
</html>


