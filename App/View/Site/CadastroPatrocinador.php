<?php
 
 require_once '../View.php';
 include_once './Layout/MenuNav.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Patrocinador</title>
                <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/CadastroPatrocinador.less?v=1.0.8" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="../Contents/plugins/less/dist/less.js" ></script>
        <!-- include bootstrap --> 
        <link rel="stylesheet" href="../Contents/plugins/bootstrap/css/bootstrap.css"> 
        <title>Cadastro Patrocinador</title>
    </head>
    <body>
      <?php 
        MenuNav::menu(); 
        ?>

        <h1>Cadastro Patrocinador</h1>
        
        <script src="../Contents/js/jquery3.3.1.js"></script>
        <script src="../Contents/plugins/bootstrap/js/bootstrap.js" ></script>
    </body>
</html>
       
      
   