<?php
require_once './Controle/GerenciadorLogin.php';
$gererenciadorLogin = new GerenciadorLogin();

if($gererenciadorLogin->temUsuarioLogado()){
    header("location:visao/entrada.php");
}else{
    header("location:visao/telaLogin.php");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
