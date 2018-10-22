<?php
 
 require_once '../View.php';
 include_once './Layout/MenuNav.php';


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Perdidos</title>
                <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Cadastro.less?v=1.0.8" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/footer.less?v=<?php echo random_int(1, 10000) ?>" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
        <!-- include bootstrap --> 
        <!-- <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
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
         <?php
           //MenuNav::footer();
         ?>
       
        <!-- Chamar dependencias javascript -->
        <script src="../Contents/js/jquery3.3.1.js"></script>
        <script src="../Contents/js/bootstrap.min.js"></script>
    </body>
</html>

