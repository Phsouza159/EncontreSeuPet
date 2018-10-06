<?php
 
 require_once '../View.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SUA PREFERENCIA</title>
                <!--Chamar folha css (LESS) -->
                <link rel="stylesheet/less" type="text/css" href="../Contents/css/Login.less?v=1.0.8" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
        <!-- include bootstrap --> 
        <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css">
    </head>
    <body>
       
        <header>
        
            <div class="div-box-01">
                Ja possui cadastro?
                <button type="button" onclick="window.location.href = './Visitante.php'">Cadastro</button>
            </div>
            
            <div class="div-box-02">
                Visitante ?
                <button type="button" onclick="window.location.href = './Visitante.php'>Home</button>
            </div>
            
        </header>

        <!-- Chamar dependencias javascript -->
        <script src="../Contents/js/jquery3.3.1.js"></script>
        <script src="../Contents/js/bootstrap.min.js"></script>
    </body>
</html>

