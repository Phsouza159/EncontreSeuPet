<?php
require_once './GerenciadorLogin.php';
$gerenciadorLogin = new GerenciadorLogin();



if (isset($_GET['acao'])){
    $acao = $_GET['acao'];

    switch ($acao) {
        case 'logar':

            $login = $_POST["login"];
            $senha = $_POST["senha"];

            $usuario = $gerenciadorLogin->efetuarLogin($login, $senha);
            
            break;
            
        case 'logout':
            
            $gerenciadorLogin->efetuarLogOut();
            
            break;            
        default:
            break;
    }
}

?>
