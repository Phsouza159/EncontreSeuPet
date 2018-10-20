<?php

class MenuNav {
   public static function menu()
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
                        <a class='nav-link' href='./Home.php'>Home</a>
                  </li>
                  
                    <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='./CriarPost.php' >Criar Posts</a>
                                <div class = 'dropdown-menu'>
                            <a class = 'dropdown-item' href = './CriarPost.php'>Perdidos</a>
                            <a class = 'dropdown-item' href = './CriarPost.php'>Doção</a>
                                </div>
                    </li>
                    
                    <li class='nav-item'>
                        <a class='nav-link' href='./Cadastro.php'>Desaparecido</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='./CadastroAdocao.php'>Adoção</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='./CadastroPatrocinador.php'>Patrocinadores</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Administrador</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>";
   }
}
