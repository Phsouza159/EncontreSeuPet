<?php
if(isset($_GET["msg"])){
    echo "Mensagem : ".$_GET["msg"];
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Formulário Login</p>
        <form id="formLogin" name="formLogin"
              method="POST" action="../Controle/controladorLogin.php?acao=logar">
            <label for="login">Login:</label>  
            <input id="login" name="login" type="text" value=""><br/><br/>
            <label for="senha">Senha:</label>  
            <input id="senha" name="senha"
                   type="password"
                   value=""><br /><br />
            <input id="submit" name="submit"
                   type="submit"
                   value="Fazer Login" >            
                    
            
        </form>
    </body>
</html>