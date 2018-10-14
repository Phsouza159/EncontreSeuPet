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
                        <a class='nav-link' href='#'>Home</a>
                    </li>


                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='dropdownsite'
                           data-toggle='dropdawon'>Teste 1</a>
                        <div class='dropdown-menu'>
                            <a class='dropdown-item' href='#'>Produto 01</a>
                            <div class='dropdown-divider'></div>
                            <a class='dropdown-item' href='#'>Produto 02</a>
                            <a class='dropdown-item' href='#'>Produto 03</a>
                        </div>
                    </li>

                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Teste 2</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Teste 3</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Teste 4</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>";
   }
}
