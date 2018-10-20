<?php
    
?>
<html>
    <head>
        <title>Login</title>
        <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="App /View/Contents/css/Home.less" />
        <!-- Chamar biblioteca (LESS)-->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
       <script src="App/View/Contents/js/jquery3.3.1.js"></script>
       
       <style type="text/css">
           body{
             background-image: url('./App/View/Contents/img/index.gif');
             background-repeat: no-repeat;
             background-size: 100%;
           }
        </style>
        <script type="text/javascript">
            
       //  jQuery(window).load(function() {
        //    jQuery("#status").delay(3000).fadeOut();
       //     jQuery("#preloader").delay(3000).fadeOut("slow");
       //  })

         function tempo() {setTimeout("self.location.href='./App/View/Site/Home.php';",2999);}

      </script>
          
        </script> 
    </head>
    <body onLoad= tempo()>
            <div style="margin-left: auto;margin-right: auto; margin-top: 150px;">
        <h1>Encontre seu pet</h1>
        <h3>Carregando...</h3>
        </div>
        
    </body>
</html>
