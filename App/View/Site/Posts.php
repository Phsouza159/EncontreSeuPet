<?php
try{
    


 include_once '../Site/Layout/MenuNav.php';
 
 include_once '../../Controller/ErroController.php';
 include_once '../../Controller/MotorPostMini.php';
 
 include_once '../../Model/Infra/CollectionsQuerys.php';
 include_once '../../Model/Infra/DbContextoDAO.php';
 include_once '../../Model/Conexao.php';
 include_once '../../Model/PostDAO.php';
 
 include_once '../../NucleoClass/Post.php';
 include_once '../../NucleoClass/PerdidoPOST.php';
 
 } catch (Exception $ex) {
     
  
}
   $con = new Conexao();
   
   $qntPost = PostDAO::quantidadePost( $con->getCon() );  
   
   $GaleriaPosts = new MotorPostMini( $qntPost , PostDAO::getPostALL( $con->getCon() ) , 2);

 ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title></title>
                <title>Cadastro</title>
                <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Post.less?v=1.0.8" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/footer.less?v=<?php echo random_int(1, 10000) ?>" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
        <!-- include bootstrap --> 
        <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css">
    </head>
    <body>
        <?php
         MenuNav::menu();
         ?>
        
        <div class="container">
           <?php
            $GaleriaPosts->ViewMiniPost();
          ?>
        </div>
        
         <?php
           MenuNav::footer();
         ?>
           
        <!-- Chamar dependencias javascript -->
        <script src="../Contents/js/jquery3.3.1.js"></script>
        <script src="../Contents/js/bootstrap.min.js"></script>
    </body>
    
</html>
