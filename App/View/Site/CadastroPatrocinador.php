<?php
 
 require_once '../View.php';
 include_once 'layout/MenuNav.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Patrocinador</title>
                <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/CadastroPatrocinador.less?v=1.0.8" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
        <!-- include bootstrap --> 
        <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css">
    </head>
    <body>
      <?php 
        MenuNav::menu(); 
        ?>

        <h1>Cadastro Patrocinador</h1>
       
      
   