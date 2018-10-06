<?php
require_once '../Controle/GerenciadorLogin.php';


if(!isset($msg)){
    $msg = " ";
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Pesquisar</title>
        <script>
            function remover(id, nome){
              decisao = confirm("Você realmente deseja remover o usuário "+nome+" ?");  
              
              if(decisao){
                  form = document.getElementById("formPesquisaUsuario");
                  form.action = "../Controle/controladorUsuario.php?acao=excluir&id="+id;
                  form.submit();
              }
            }
            function editar(id){
                  form = document.getElementById("formPesquisaUsuario");
                  form.action = "../Controle/controladorUsuario.php?acao=editar&id="+id;
                  form.submit();
            }

        </script>
    </head>
    <?=$msg?><br>
    <body> TELA PESQUISAR Usuários
        <form name="formPesquisaUsuario" id="formPesquisaUsuario" action="" method="POSt">
         <table border=1>
        <tr><td>Login</td><td>Nome</td><td>Perfil</td><td>Ações<tr>
        <?php    

                       foreach ($listaUsuarios as $usuario) {
                echo "<tr>";
                echo "<td>".$usuario->getLogin()."</td>";
                echo "<td>".$usuario->getNome()."</td>";
                echo "<td>".$usuario->getPerfil()."</td>";
                echo "<td><button onclick=\"javascript:remover(".$usuario->getId().",'".$usuario->getNome()."')\">"
                        . "Remover</button>"
                        . "<button onclick=\"javascript:editar(".$usuario->getId().")\">"
                        . "Editar</button></td>";
                echo "</tr>";
            } 
        ?>
           
        </table>
    
     </form>    
        
        <a href="/projetoBase/visao/entrada.php">Entrada</a>
    </body>
</html>
