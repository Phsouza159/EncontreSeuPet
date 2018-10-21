<?php
 
 require_once '../View.php';
 include_once 'layout/MenuNav.php';


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Perdidos</title>
                <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Cadastro.less?v=1.0.8" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
        <!-- include bootstrap --> 
        <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css">
    </head>
    <body>
        <?php 
        MenuNav::menu(); 
        ?>

        <header class="conteiner-center">
            
            <div class="cadastro-etapa-01">  
              <?php 
                View::getTelaCadastro();
              ?> 
            </div>
            <!--
            <div class="cadastro-etapa-02">
                < ?php
                View::getTelaCadastro();
                ?>
              
            </div>
             -->
        </header>
       
        <!-- Chamar dependencias javascript -->
        <script src="../Contents/js/jquery3.3.1.js"></script>
        <script src="../Contents/js/bootstrap.min.js"></script>
    </body>
</html>

