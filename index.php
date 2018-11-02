<?php
include_once './App/NucleoClass/Pessoa.php';
include_once './App/Controller/FormController.php';
?>
<html>
    <head>
        <title>Login</title>
        <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="App /View/Contents/css/Home.less" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="./App/View/Contents/plugins/less/dist/less.js" ></script>
        <!-- Chamar biblioteca (BOOSTSTRAP)-->
        <link rel="stylesheet" type="text/css" href="./App/View/Contents/plugins/bootstrap/css/bootstrap.css">
        
        <style type="text/css">
            body{
              background-color: rgb(65 , 64 , 65);
            }
            
            .img-logo{
                filter: invert(75%);
                background-image: url('./App/View/Contents/img/giphy.webp');
                background-repeat: no-repeat;
                background-size: 450px;
                min-height: 450px;
                min-width: 450px;
                
                margin-left: 30%;
                margin-top: 50px;
            }
        </style>
        <script type="text/javascript">
            
            var tempo = 1;

            function CarregarProgress()
            {
                var e = tempo;
                
                var element = document.getElementById("PORC");
                //element.innerHTML = e + "%";
                
                element = document.getElementById("bar-prog");
                element.style.width = e + "%";
               
        
                if(e >= 100)
                {
                    //setTimeout("self.location.href='./App/View/Site/Home.php';", 1999);
                    return;
                }
                
                tempo++;
            }
            
            
setTimeout( CarregarProgress(), 2999);
            function tempo() {
               // setTimeout("self.location.href='./App/View/Site/Home.php';", 4999);
            }
            //onLoad= tempo()
        </script>

    </script> 
</head>
<body class="grid-container" onLoad="CarregarProgress()">
    <div class="img-logo"></div>
 
    <div class="progress">
        <div class="progress-bar" id="bar-prog"role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span id="PORC"></span></div>
</div>
    <!--
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
-->
    <script src="App/View/Contents/js/jquery3.3.1.js"></script>
   
</body>
</html>
