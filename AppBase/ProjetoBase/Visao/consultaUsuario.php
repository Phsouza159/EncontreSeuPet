<?php
require_once '../Controle/GerenciadorLogin.php';
$gererenciadorLogin = new GerenciadorLogin();
$gererenciadorLogin->verificarAcessoPerfil("administrador");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="/projetoBase/Controle/controladorUsuario.php?acao=pesquisarNome" method="POST">
            <table>
                <tr>
                    <td><label>Nome:</label></td><td><input type="text" name="nome"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Enviar"/></td>
                </tr>
            </table>
            
        </form>
    </body>
</html>
