<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <title>Home</title>
        <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Home.less?v=1.0.3" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
        <!-- include bootstrap --> 
        <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css">
    </head>
    <body>
<div> 
    <h1 class="cabecalho-header" >Encontre Seu Pet</h1>
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

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span><img style='margin-top: 50vh' src='../Contents/img/seta-left.png' width='50px' height="50px"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span><img style='margin-top: 50vh' src='../Contents/img/seta-right.png' width='50px' height="50px"></span>
                    <span class="sr-only">Next</span> 
                </a> 
            </div> 
        </div>

        <footer>
            <h1>RODAPE</h1>
        </footer>
        
        <!-- Chamar dependencias javascript -->
        <script src="../Contents/js/jquery3.3.1.js"></script>
        <script src="../Contents/js/bootstrap.min.js"></script>
        
    </body>
</html>

