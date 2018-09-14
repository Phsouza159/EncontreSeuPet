<?php
/**
 * Entrada do Sistema 
 * 
 * Encotre seu pet :: Versão 0.0.1 
 * Estrutura do pojeto 
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- LINKS PARA CONFIG DO BOOTSTRAP E JQUERY -->
        <link rel="stylesheet" href="app/assets/css/bootstrap.css"/> 
        <script src="app/assets/js/jquery3.3.1.js"></script>
        <script src="app/assets/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">


        <style>
            body{
                margin: 0px;
                background-color: #000; 
            }

            .div-01{
                widht: 100%;
                height: 100vh;
                background-image: url("APP/assets/img/div_3.jpg");
            }

            .div-02{
                widht: 100%;
                height: 100vh;
                background-image: url("APP/assets/img/div_4.jpg");
            }

            .div-03{
                widht: 100%;
                height: 100vh;
                background-image: url("APP/assets/img/div_6.jpg");

            }

            .div-04{
                widht: 100vh;
                height: 100vh;
                widht: 100%;
                height: 100vh;
                background-image: url("APP/assets/img/div_5.jpg");
                /*   background-repeat: no-repeat;
                   background-attachment: fixed ; 
                   background-size: 1300px 730px; */
                /*essa e a div 4, ultima ft SIm achei que era a do cachorro kk*/
            }

            /* config img fundo -> pegar tds as divs */
            .div-01 ,.div-02  ,.div-03  ,.div-04 
            {
                background-repeat: no-repeat;
                background-attachment: fixed ;
            } 
            .cabecalho-header{
                padding-left: 40%;
                position: absolute;
                margin-top: 0px;
                z-index: 100;
            }

            footer{
                padding: 0px;
                margin: 0px;
                background-color: black;
                width: 100%;
                height: 250px;
                color: white;
            }

            h1 , h2 , h3 , h4 , h5 , h6 {
                color:white;
                font-family: 'Asap', sans-serif;
            }

            /* mascara de cor -- background */
            .mask{
                background-color: rgba( 0 , 0 , 0 , 0.6);
                margin-top: 0px;
                position: fixed;
                height: 100vh;
                width: 100%;
                z-index: 100 ;
            }
            
            /* Corpo -- dentro do Slide */
            .conteiner-corpo
            {
                /* config as margem do conteudo para ficar legalzinho*/
               padding: 10% 15%;

            }
            
        </style>
    </head>
    <body>

        <header class='cabecalho-header'>
            <h1>Encontre seu pet</h1>
        </header>

        <div> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>  
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                   
                    <div class="item active">
                        <div class='div-01'>
                           <div class='conteiner-corpo'>
                           <center>
                               <h1>Ola visitante! :)</h1>
                               <h3>bola um texto ai era uma vez um grupo tentando fazer tcc, mas infelizmente a chapeuzinho vermelho invaiu e rackeou a aplicação. É isso, obreigada chapeuzinho</h3>
                               
                               <button tupe='button' class="btn btn-outline-primary" onclick="window.location.href='./APP/view/layout/COLOCAR AQUI O ARQUIVO QND CRIAR'">Visitantes</button>
                           </center>
                            </div>
                           </div>
                     </div>   
                    <div class="item">
                        <div class='div-02'>
                            <center> 
                                <button style="margin: 250px 0 0 250px" class="btn btn-primary" onclick="window.location.href='./APP/view/layout/Cadastro.php'">Perdidos</button>
                            </center>
                        </div>
                    </div>

                    <div class="item">
                        <div class='div-03'>
                            <center> 
                            <button style="margin: 250px 0 0 250px" class="btn btn-primary" onclick="window.location.href='./APP/view/layout/COLOCAR AQUI O ARQUIVO QND CRIAR'">Adoção</button>
                            </center>
                        </div>
                    </div>

                    <div class="item">
                        <div class='div-04'>
                            <center> 
                            <button style="margin: 250px 0 0 250px" class="btn btn-primary" onclick="window.location.href='./APP/view/layout/COLOCAR AQUI O ARQUIVO QND CRIAR'">Patrocinadores</button>
                            </center>

                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span><img style='margin-top: 50vh' src='APP/assets/img/seta-left.png' width='50px' height="50px"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span><img style='margin-top: 50vh' src='APP/assets/img/seta-right.png' width='50px' height="50px"></span>
                    <span class="sr-only">Next</span> 
                </a> 
            </div> 
        </div>

        <footer>
            <h1>RODAPE</h1>
        </footer>
    </body>

</html> 
