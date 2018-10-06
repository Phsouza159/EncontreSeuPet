<?php

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];

    switch ($acao) {
        case 'consultar':
            require_once __DIR__. '/../Model/Usuario.php';
            require_once __DIR__.'/../Model/DAO/UsuarioDAO.php';
            $nome=$_GET["nome"];
            $usuarioDao = new UsuarioDAO();
            $listaUsuarios = $usuarioDao->pesquisarPorNome($nome);
           
            echo "    <table border=1> ";
            echo " <tr><td>Login</td><td>Nome</td><td>Perfil</td><td>Ações<tr>";
        
            foreach ($listaUsuarios as $usuario) {
                echo "<tr>";
                echo "<td>".$usuario->getLogin()."</td>";
                echo "<td>".$usuario->getNome()."</td>";
                echo "<td>".$usuario->getPerfil()."</td>";
                echo "<td><button onclick=\"javascript:remover(".$usuario->getId().",'".$usuario->getNome()."')\">"
                        . "Remover</button></td>";
                echo "</tr>";
            } 
       
           
       echo " </table>";
            
            break;

        case 'excluir':
            require_once __DIR__. '/../Model/Usuario.php';
            require_once __DIR__.'/../Model/DAO/UsuarioDAO.php';
            
            $id   = $_GET["id"];
            
            $usuarioDao = new UsuarioDAO();

            $retorno = $usuarioDao->excluirUsuario($id);
            
            
            if($retorno){
                echo "Usuário excluído com sucesso !";
            }else{
                echo "Erro ao tentar excluir usuário!";
            }
            break;
            
        default:
            break;
    }
}
?>



        