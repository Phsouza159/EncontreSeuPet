<?php

 include_once '../Site/Layout/MenuNav.php';

 include_once '../../Controller/ErroController.php';
 include_once '../../Controller/GetConfigApp.php';
 include_once '../../Model/Infra/CollectionsQuerys.php';
 include_once '../../Model/Infra/DbContextoDAO.php';
 include_once '../../Model/Conexao.php';
 include_once '../../Model/AnimalDAO.php';
 include_once '../../Model/PostDAO.php';
 include_once '../../NucleoClass/Anuncios.php';
 include_once '../../NucleoClass/Animal.php';
 include_once '../../NucleoClass/Pessoa.php';
 include_once '../../NucleoClass/Post.php';
 include_once '../../NucleoClass/PerdidoPOST.php';
    
 
 $con  = new Conexao();
 //AnimalDAO::GetAnimal(1 , $con->getCon());
 $post = PostDAO::getPost( $id_POST , $con->getCon());
 
 if(is_null($post))
 {
     ErroController::erroFatal("Erro ao carregar Post -- Post vazio :(");
 }
 
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Encontre seu Pet</title>
        
        <meta name="viewport" content="width=device-width">
        <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Post.less?v=1.0.1" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/footer.less?v=1.0.1" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Anuncios.less?v=1" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="../Contents/plugins/less/dist/less.js" ></script>
        <!-- include bootstrap --> 
        <!-- <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css"> -->
        <link rel="stylesheet" href="../Contents/plugins/bootstrap/css/bootstrap.css">
    </head>
    <body>
        <?php
        MenuNav::menu('../Site/');
        ?>
        <div class="container">
        <h1><?php echo $post->getTitulo()?></h1>
          <?php
           echo $post->getDescricao();
           
           echo "<br/><hr><p>Data de publicação: ".$post->getDtCriacao()."<br/>As ".$post->getHrCriacao()."</p>";
           
           
             echo '<pre>';
               print_r($post);
             echo '</pre>';
           
           ?>    
        
            <div>
                 <button onclick="window.location.href='../Site/CriarPost.php'" >Criar novo Posts</button>
                 <button onclick="window.location.href='../Site/Posts.php'" >Voltar Galeria</button>
            </div>
        <?php Anuncios::GerarAnuncio(); ?>
        </div>
        <?php
          
          MenuNav::footer();
        ?>
    </body>
</html>
