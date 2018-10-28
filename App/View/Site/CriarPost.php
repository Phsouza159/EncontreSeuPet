<?php 
    include_once '../../Controller/GetConfigApp.php';
    include_once '../../Controller/GerarPaginaWebPost.php';
    include_once '../../Controller/ErroController.php';
    
    include_once './Layout/MenuNav.php';
    
    include_once '../../NucleoClass/Pessoa.php';
    include_once '../../NucleoClass/Animal.php';
    include_once '../../NucleoClass/Post.php';
    include_once '../../NucleoClass/PerdidoPOST.php';
    
    include_once "../../Model/Infra/DbContextoDAO.php";
    include_once "../../Model/Conexao.php";
    include_once "../../Model/Infra/CollectionsQuerys.php";
    include_once "../../Model/PostDAO.php";
    
    
    
    
    $dadosPostDoacao = isset($_REQUEST['Reload-Post']) ? $_REQUEST['Reload-Post'] : NULL;
    
    if(!is_null($dadosPostDoacao))
    {
        $dadosPostDoacao = $_REQUEST['DESCRICAO-POST-DOACAO'];
        $DadosCriarPosts = $dadosPostDoacao;
    }    
    else
    {
        $DadosCriarPosts = "Crie seu post aqui!";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link rel="stylesheet" type="text/css" href="../Contents/plugins/bootstrap/css/bootstrap.css">
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/footer.less?v=1" />
       
        <link rel="stylesheet" href="./Layout/post/dist/summernote-lite.css">

        <title>Criar Posts</title>

        <script src="../Contents/plugins/less/dist/less.js"></script> 
       
        <title>Criar Posts</title>


        
        <style>
            .container-body
            {
                margin: 10%; 
            }
        </style>
    </head>
    
    <body>

        <?php
        MenuNav::menu();
        ?>
        <!--
        <div class="container-body">
            
            
            
            <h4> <i class="note-icon-summernote"></i> Summernote
                <span class="label label-info">Bootstrap v3.3.7</span>
                <span class="label label-success">with Summernote Icons</span>
            </h4>
            
            <form method="post" action="CriarPost.php">
                 <!-- <div class="summernote"><p>Hello World</p></div> - ->
                <textarea class="summernote" name="cody-font-pag"><p>< ?php echo $DadosCriarPosts  ?></p></textarea>
                
                <button class="btn btn-primary"  type="submit">Criar</button>
                
            </form>
            <a class="btn btn-primary" href="../Posts.php" >Voltar Galeria</a>


        </div> -->
         <div class="container-body">
            
            <h4> <i class="note-icon-summernote"></i> Summernote
                <span class="label label-info">Bootstrap v3.3.7</span>
                <span class="label label-success">with Summernote Icons</span>
            </h4>
            
            <form method="get" action="CriarPost.php">
                <textarea id="summernote" name="cody-font-pag"><p>Crie seu pots aqui!</p></textarea>
                <!--<textarea id="summernote" name="cody-font-pag"></textarea>-->
                
                <button class="btn btn-primary"  type="submit">Criar</button>
                
            </form>
                <button class="btn btn-primary" onclick="window.location.href='posts.php'" >Voltar Galeria</button>


        </div>
            <?php
                GerarPaginaWebPost::main();
                MenuNav::footer()
            ?>
        <script src="../Contents/js/jquery3.3.1.js"></script> 
            <script type="text/javascript">
            //$('#summernote').summernote();
            $(document).ready(function () {
                $('#summernote').summernote({
                    widht: 400,
                    height: 400,
                    tabsize: 2
                });
            });

        </script>
        
        <script src="../Contents/plugins/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="./Layout/post/dist/summernote-lite.js"></script>
        <script src="./Layout/post/dist/lang/summernote-pt-BR.min.js"></script>
    </body>

</html>
