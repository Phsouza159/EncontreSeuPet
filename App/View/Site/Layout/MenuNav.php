<?php

class MenuNav {
   public static function menu($camNormal = './')
   {
       echo "<nav class='navbar navbar-expand-lg navbar-dark bg-info sticky-top'>
        <div class='container '>
            <a class='navbar-brand' href='#'>Encontre seu pet <3</a>


            <button class='navbar-toggler' type='button'
                    data-toggle='collapse' data-target='#navbarSiteMenu'>
                    <span class='navbar-toggler-icon'></span>
            </button>


            <div class='collapse navbar-collapse' id='navbarSiteMenu'>

                <ul class='navbar-nav ml-auto'>

                    <li class='nav-item'>
                        <a class='nav-link' href='".$camNormal."Home.php'>Home</a>
                    </li>
                    
                    <li class='nav-item'>
                        <a class='nav-link' href='".$camNormal."Posts.php'>Galeria Posts</a>
                    </li>
                  
                    <li class='nav-item'>
                        <a class='nav-link' href='".$camNormal."CriarPost.php' >Criar Posts</a>
                    </li>
                    
                    <li class='nav-item'>
                        <a class='nav-link' href='".$camNormal."Cadastro.php'>Desaparecido</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='".$camNormal."CadastroAdocao.php'>Adoção</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='".$camNormal."CadastroPatrocinador.php'>Patrocinadores</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Administrador</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>";
   }

   public static function footer()
   {
     
       echo "<div class=''>
               <p class='h3 m-2 text-center p-5'>Alguns dos nossos patrocinadores:</p>
              <hr />
<div id='carouselFooter' class='carousel slide' data-ride='carousel'>

  
  <div class='carousel-inner container-fluid'>
    <div class='carousel-item active'>
      " . self::getPatrocinador() . "
    </div>
    <div class='carousel-item'>
      " . self::getPatrocinador() . "
    </div>
    <div class='carousel-item'>
      " . self::getPatrocinador() . "
    </div>
    
    
  
 </div>
  <a class='box-nav-carousel-prev' href='#carouselFooter' role='button' data-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='sr-only'>Previous</span>
  </a>
  <a class='box-nav-carousel-next' href='#carouselFooter' role='button' data-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true' ></span>
    <span class='sr-only'>Next</span>
  </a>

 <div class='footer-body-nav p-5'>
  <div class='row'>
    <div class='col element-card'>
      <p class='h2'>Grupo:</p>
        <hr />
        
        <p class='h5'>Paulo Henrique</p>
        <p class='h5'>Sabrina dos Santos</p>
        <p class='h5'>Wesley Lobão da Silva</p>
        <p class='h5'>Yasmim Lobão da Silva</p>

    </div>
    <div class='col element-card'>
         <p class='h2'>Navegação:</p>
         <br />
         <p class='h5'>Paulo Henrique</p>
        <p class='h5'>Sabrina dos Santos</p>
        <p class='h5'>Wesley Lobão da Silva</p>
        <p class='h5'>Yasmim Lobão da Silva</p>
        <hr />
        
      </hr>
    </div>
        <div class='col element-card'>
         <p class='h2'>Navegação:</p>
         
        <hr />
        
        <p class='h5'>Paulo Henrique</p>
        <p class='h5'>Sabrina dos Santos</p>
        <p class='h5'>Wesley Lobão da Silva</p>
        <p class='h5'>Yasmim Lobão da Silva</p>
      </hr>
    </div>
        <div class='col element-card'>
         <p class='h2'>Navegação:</p>
           <br />
         <p class='h5'>Paulo Henrique</p>
        <p class='h5'>Sabrina dos Santos</p>
        <p class='h5'>Wesley Lobão da Silva</p>
        <p class='h5'>Yasmim Lobão da Silva</p>
        <hr />
      </hr>
    </div>
  </div>
 
  </div>
</div></div>
<div class='p-3' style='background-color: rgb(65 , 64 , 65); font-size: 13px; color: white'>
<center>
<p class=''>© Project - Encontre seu pet - Versão: 2.0.2</p>
<img class='' src='../Contents/img/giphy.webp' style='filter: invert(75%);' width='75px' />
</center>
</div>
";
    }
   public static function getPatrocinador($camNormal = './')
   {
      $aux = "<div class='position-cards'>
              <section class=''>";   
   
      for($i = 0 ; $i < 4; $i++)
      {
          
        $aux .= " 
                <style>
                    .teste-box::after{
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation';
                    }    
                </style>
                <div class='col-2 super-box'>
                    <div class='container'>
                        <div class='box-card teste-box'>

                            <div class='icon_bg'> 

                            </div>
                        </div>
                        <div class='icon-card'>
                            <img class='simular-img'>

                            </img>
                        </div>
                    </div>
                    <div class='text'>
                        <p class='title'>
                            Teste 2
                        </p>
                    </div>
                </div>
            ";
      }
      $aux .= "</section></div>";
      
      return $aux;
   }
   
}
