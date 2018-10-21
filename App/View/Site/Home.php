<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './layout/MenuNav.php';
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
                              Seja bem vindo
                              <br>
                              <br>
                              ...
                              <br>
                          </span>
                      </h3>

                      <button tupe='button' class="btn-acao-links" onclick="window.location.href = './Visitante.php'">Visitantes</button>
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
                              Seu animal de estimação está desaparecido?<br>
                              Você acaba de encontra r o lugar certo para anunciar seu Pet.<br>
                              Cadastre já em perdidos.
                          </span>
                      </h3>


                      <button tupe='button' class="btn-acao-links" onclick="window.location.href = './Cadastro.php'">Perdidos</button> 
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
                              Deseja doar algum animal?<br>
                              Você acaba de encontar o lugar certo para anunciar o Pet.<br>
                              Cadastre já em adoção, e ajude a encontrar um novo lar.  
                          </span>
                      </h3>
                  <button tupe='button' class="btn-acao-links" onclick="window.location.href = './APP/view/layout/CadastroAdocao.php'">Adoção</button>
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
                      <button class="btn-acao-links" onclick="window.location.href = './APP/view/layout/COLOCAR AQUI O ARQUIVO QND CRIAR'">Patrocinadores</button>
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


