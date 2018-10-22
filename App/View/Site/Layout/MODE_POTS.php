<?php

 include_once '../Site/Layout/MenuNav.php';

 include_once '../../Controller/ErroController.php';

 include_once '../../Model/Infra/CollectionsQuerys.php';
 include_once '../../Model/Infra/DbContextoDAO.php';
 include_once '../../Model/Conexao.php';
 include_once '../../Model/PostDAO.php';
 include_once '../../NucleoClass/Animal.php';
 include_once '../../NucleoClass/Pessoa.php';
 include_once '../../NucleoClass/Post.php';
 include_once '../../NucleoClass/PerdidoPOST.php';
    
 
 $con  = new Conexao();
 $post = PostDAO::getPots( $id_POST , $con->getCon());
 
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
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Post.less?v=1.0.<?php echo random_int(1 , 100)?>" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/footer.less?v=1.0.<?php echo random_int(1 , 100)?>" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
        <!-- include bootstrap --> 
        <!-- <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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
                 <button onclick="window.location.href='../Site/Layout/CriarPost.php'" >Criar novo Posts</button>
                 <button onclick="window.location.href='../Site/Posts.php'" >Voltar Galeria</button>
            </div>
        </div>
        <?php
          MenuNav::footer();
        ?>
    </body>
</html>
