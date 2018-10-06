<?php
if (isset($_GET['acao'])){
    $acao = $_GET['acao'];

    switch ($acao) {
        case 'pesquisar':
            require_once __DIR__. '/../Model/UsuarioDTO.php';
            require_once __DIR__.'/../Model/DAO/UsuarioDAO.php';
            $usuarioDao = new UsuarioDAO();
            $listaUsuarios = $usuarioDao->listarTodos();
            
            
            require_once '../Visao/pesquisaUsuarioDTO.php';

            break;
        
    }
}
?>



        