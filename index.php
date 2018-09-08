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
    
        

        <style>
            body{
                margin: 0px;
                background-color: #000; 
            }
            
            .div-01{
                widht: 100%;
                height: 100vh;
                background-color: #c1e2b3;
            }

            .div-02{
                widht: 100%;
                height: 100vh;
                background-color: #1b6d85;
            }

            .div-03{
                widht: 100%;
                height: 100vh;
                background-color: #d58512;
            }

            .div-04{
                widht: 100vh;
                height: 100vh;
                background-color: #c9302c; 
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

                        </div>    
                    </div>

                    <div class="item">
                        <div class='div-02'>

                        </div>
                    </div>

                    <div class="item">
                        <div class='div-03'>

                        </div>
                    </div>

                    <div class="item">
                        <div class='div-04'>

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
