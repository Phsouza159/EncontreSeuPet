<?php
require_once '../Controle/GerenciadorLogin.php';
$gererenciadorLogin = new GerenciadorLogin();
$gererenciadorLogin->verificarAcessoPerfil("CLIENTE");
if(session_id()==""){
    session_start();
}
$end = $_SESSION["endereco"];
$nome =  $_SESSION["nome"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Entrada de Cliente</title>
    </head>
    <body>
        <h1>Bem vindo Cliente<?=$nome?> seu endereço de entrega é <?=$end?> </h1>
        <br><br>
        <a href="../Controle/controladorLogin.php?acao=logout">Logout</a>
        <br><br>
        
    </body>
</html>
