<?php
    include_once './App/NucleoClass/Pessoa.php';
    include_once './App/Controller/FormController.php';
    



?>
<html>
    <head>
        <title>Login</title>
        <!--Chamar folha css (LESS) - ->
        <link rel="stylesheet/less" type="text/css" href="App /View/Contents/css/Home.less" />
        <!-- Chamar biblioteca (LESS)- ->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
       -->
       <style type="text/css">
           body{
             background-image: url('./App/View/Contents/img/giphy.webp');
             background-repeat: no-repeat;
             background-size: 450px;
             background-position-x: center;
             background-position-y: center;
           }
        </style>
        <script type="text/javascript">
            
      

         function tempo() {setTimeout("self.location.href='./App/View/Site/Home.php';",2999);}
          //onLoad= tempo()
      </script>
          
        </script> 
    </head>
    <body>
        <form action="index.php" method="POST">
            <lable>Usuário:</lable>
            
            <input type='hidden' value='login' name='ACAO_FORM' />
            
            <input name="user_log" value='' type="text" required='true'/>
                </br>
            <label>Senha:</label>
            <input name="pass_log" value='' type="password" required='true'/>
                </br>
            <input type="submit" value='Login' name="Enviar" />
       </form>
        
         <script src="App/View/Contents/js/jquery3.3.1.js"></script>
        
    </body>
</html>
