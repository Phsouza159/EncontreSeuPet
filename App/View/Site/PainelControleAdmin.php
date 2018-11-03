<!DOCTYPE html>
<?php
 include_once '../Site/Layout/MenuNav.php';
 
 include_once '../../Controller/ErroController.php';
 include_once '../../Controller/PaginacaoPots.php';
 include_once '../../Controller/GetConfigApp.php';
 include_once '../../Model/Infra/CollectionsQuerys.php';
 include_once '../../Model/Infra/DbContextoDAO.php';
 include_once '../../Model/Conexao.php';
 include_once '../../Model/AnimalDAO.php';
 include_once '../../Model/PostDAO.php';
 
 include_once '../../NucleoClass/Post.php';
 include_once '../../NucleoClass/PerdidoPOST.php';
 
    $con = new Conexao(); //conexão bando de dados
   
   $qntPost   = PostDAO::quantidadePost( $con->getCon() );  
   $qntAnimal = AnimalDAO::quantidadeAnimal($con->getCon());
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Dashbord</title>
                <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/PainelAdministrador.less" />
        <!--  Chamar biblioteca (LESS)-->
        <script src="../Contents/plugins/less/dist/less.js" ></script>
        <!-- include bootstrap --> 
       
        <link rel="stylesheet" type="text/css" href="../Contents/plugins/bootstrap/css/bootstrap.css">
        
        <script src="../Contents/js/jquery3.3.1.js" ></script>
       
        <script>
        </script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
     <div class="row cards-opacao-acaoes-admins m-2">
     
        <div class="col-2 card card-sombra m-4" style="width: 18rem;">
            <div class="exibicao-numero-card">
               <p class="h6">Quantidade de pots registrados</p>
               <p class="h1"> <?php echo $qntPost ?></p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Pots</h5>
                <p class="card-text">...</p>
                 <a class="btn btn-primary" id="BT-VISULIZAR-POTS" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                     visualizar Pots
                 </a>
            </div>
        </div>
         
        <div class="col-2 card card-sombra m-4" style="width: 18rem;">
            <div class="exibicao-numero-card" style="background-color: greenyellow; color: black">
               <p class="h6">Quantidade de Animais registrados</p>
               <p class="h1"> <?php echo $qntAnimal ?></p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Animal</h5>
                <p class="card-text">...</p>
                <a class="btn btn-primary" id="BT-VISULIZAR-ANIMAIS" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                     visualizar Animais
                 </a>
            </div>
        </div>
         
       <div class="col-2 card card-sombra m-4" style="width: 18rem;">
            <div class="exibicao-numero-card" style="background-color: buttonface; color: black">
               <p class="h6">...</p>
               <p class="h1">...</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">...</h5>
                <p class="card-text">...</p>
                <a class="btn btn-primary" id="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    ...
                 </a>
            </div>
        </div>
         
       <div class="col-2 card card-sombra m-4" style="width: 18rem;">
            <div class="exibicao-numero-card" style="background-color: buttonface; color: black">
               <p class="h6">...</p>
               <p class="h1">...</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">...</h5>
                <p class="card-text">...</p>
                <a class="btn btn-primary" id="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    ...
                 </a>
            </div>
        </div>
         
       <div class="col-2 card card-sombra m-4" style="width: 18rem;">
            <div class="exibicao-numero-card" style="background-color: buttonface; color: black">
               <p class="h6">...</p>
               <p class="h1">...</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">...</h5>
                <p class="card-text">...</p>
                <a class="btn btn-primary" id="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    ...
                 </a>
            </div>
        </div>
         
       <div class="col-2 card card-sombra m-4" style="width: 18rem;">
            <div class="exibicao-numero-card" style="background-color: buttonface; color: black">
               <p class="h6">...</p>
               <p class="h1">...</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">...</h5>
                <p class="card-text">...</p>
                <a class="btn btn-primary" id="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    ...
                 </a>
            </div>
        </div>
         
       <div class="col-2 card card-sombra m-4" style="width: 18rem;">
            <div class="exibicao-numero-card" style="background-color: buttonface; color: black">
               <p class="h6">...</p>
               <p class="h1">...</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">...</h5>
                <p class="card-text">...</p>
                <a class="btn btn-primary" id="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    ...
                 </a>
            </div>
        </div>
         
       <div class="col-2 card card-sombra m-4" style="width: 18rem;">
            <div class="exibicao-numero-card" style="background-color: buttonface; color: black">
               <p class="h6">...</p>
               <p class="h1">...</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">...</h5>
                <p class="card-text">...</p>
                <a class="btn btn-primary" id="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    ...
                 </a>
            </div>
        </div>
         
    </div>
     
   <div class="body-acaoes">
       
  <div class="collapse" id="collapseExample">
    <div class="card card-body iframe-controle">
        <span id="POST-TABELA"></span>
    </div>
 </div>
    
       <div>
        
     <script src="../Contents/plugins/bootstrap/js/bootstrap.js"></script>
     <script>
         
         $(function () { 
             
             var controle = false;
             
             
             $("#BT-VISULIZAR-POTS").click(function () {
                    if(!controle)
                    {
                      document.getElementById("POST-TABELA").innerHTML = "<iframe src='./Layout/TABELA_POTS.php' frameborder='0' allowfullscreen></iframe>";
                      controle = true;
                    }
                    else
                    {
                        controle = false;
                    }
             });
             
             $("#BT-VISULIZAR-ANIMAIS").click(function () {
                    if(!controle)
                    {
                      document.getElementById("POST-TABELA").innerHTML = "<iframe src='./Layout/TABELA_ANIMAL.php' frameborder='0' allowfullscreen></iframe>";
                      controle = true;
                    }
                    else
                    {
                        controle = false;
                    }
             });
             
         });
     </script>
    </body>
</html>
