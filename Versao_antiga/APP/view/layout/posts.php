<?php
    include_once "../lib/MotorPostMini.php";
    
    
    $post = new MotorPostMini();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Posts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link href="../../assets/css/MotorPostMini.css?v=3" rel="stylesheet" />
        
        <style type="text/css">
            body{
                  margin-left: 10%;
                   margin-right: 10%;
            }
        </style>
    </head>
    <body>
        <div>
            <button onclick="window.location.href='CriarPost.php'" class="">Criar Posts</button>
          <?php 
            
            $post->ViewMiniPost();
          
            ?>
        </div>
    </body>
</html>


