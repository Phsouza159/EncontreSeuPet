<?php 
    include_once '../../controller/GerarPaginaWebPost.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link rel="stylesheet" href="../../assets/css/bootstrap.css" />
        <link rel="stylesheet" href="./post/dist/summernote.css">

        <title>summernote</title>

        <script src="../../assets/js/jquery3.3.1.js"></script> 
        <script src="../../assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./post/dist/summernote.js"></script>


        <title></title>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.summernote').summernote({
                    widht: 400,
                    height: 400,
                    tabsize: 2
                });
            });

        </script>
        
        <style>
            .container-body
            {
                margin: 10%; 
            }
        </style>
    </head>
    
    <body>

        <div class="container-body">
            
            <h4> <i class="note-icon-summernote"></i> Summernote
                <span class="label label-info">Bootstrap v3.3.7</span>
                <span class="label label-success">with Summernote Icons</span>
            </h4>
            
            <form method="post" action="CriarPost.php">
                 <!-- <div class="summernote"><p>Hello World</p></div> -->
                <textarea class="summernote" name="cody-font-pag"><p>Ola crie seu post aqui!</p></textarea>
                
                <button class="btn btn-primary"  type="submit">Criar</button>
                
            </form>
                <button class="btn btn-primary" onclick="window.location.href='posts.php'" >Voltar Galeria</button>


        </div>
            <?php
                GerarPaginaWebPost::main();
            ?>
    </body>

</html>
