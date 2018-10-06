<?php
require_once '../Controle/GerenciadorLogin.php';
$gererenciadorLogin = new GerenciadorLogin();
$gererenciadorLogin->verificarSessao();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <br><br>
        <a href="../Controle/controladorLogin.php?acao=logout">Logout</a>
        <br><br>
        
    </body>
</html>
