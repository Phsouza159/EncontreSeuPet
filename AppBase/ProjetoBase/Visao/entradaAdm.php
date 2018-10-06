<?php
require_once '../Controle/GerenciadorLogin.php';
$gererenciadorLogin = new GerenciadorLogin();
$gererenciadorLogin->verificarAcessoPerfil("ADMINISTRADOR");
if(session_id()==""){
    session_start();
}
$matricula = $_SESSION["matricula"];
$nome =  $_SESSION["nome"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tela de Entrada do Administrador</title>
    </head>
    <body>
        <h1>Bem vindo Administrador <?=$nome?> de matrícula <?=$matricula?></h1>
        <br><br>
        <a href="../Controle/controladorLogin.php?acao=logout">Logout</a>
        <br><br>
        
    </body>
</html>
