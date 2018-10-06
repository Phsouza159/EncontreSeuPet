<?php
require_once '../Controle/GerenciadorLogin.php';
$gererenciadorLogin = new GerenciadorLogin();
$gererenciadorLogin->verificarAcessoPerfil("administrador");

$nome = "";
$login = "";
$senha = "";
$perfil = "";
$id = "";
$acao = "inserir";
$msg = "";
if(isset($usuario)){
    $id = $usuario->getId();
    $nome = $usuario->getNome();
    $login = $usuario->getLogin();
    $senha = $usuario->getSenha();
    $perfil = $usuario->getPerfil();
    $acao = "atualizar";
}

if(isset($_GET["msg"])){
    $msg = $_GET["msg"];
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Usuário</title>
    </head>
    <body>
    <center><?=$msg?></center>
            <form id="formUsuario"
                  name="formUsuario"
                  method="POST"
                  action="../Controle/controladorUsuario.php?acao=<?=$acao?>">
                <fieldset>
                    <legend>Cliente</legend>                 
                    <input class="id" name="id"
                           type="hidden"
                           value="<?=$id?>"><br /><br />

                    <label for="nome">Nome:</label>
                    <input class="nome" name="nome"
                           type="text"
                           value="<?=$nome?>"><br /><br />
                    <label for="login">Login:</label>
                    <input class="login" name="login"
                           type="text"
                           value="<?=$login?>"><br /><br />                    
                    <label for="perfil">Perfil:</label>
                    <input class="perfil" name="perfil"
                           type="text"
                           value="<?=$perfil?>"><br /><br />
                   
                    <label for="senha">Senha:</label>            
                    <input class="senha" name="senha"
                           type="password"
                           value="<?=$senha?>"><br /><br />

                    <input class="submit" name="submit"
                           type="submit"
                           value="Cadastrar">
                </fieldset>

            </form>
        </div>
        <a href="/projetoBase/visao/entrada.php">Entrada</a>
    </body>
</html>
