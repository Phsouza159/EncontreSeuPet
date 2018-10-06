<?php

include_once "Layout/FormularioCadastro.php";

class View {

    public static function getTelaCadastro()
    {
        echo CadastroTealas::telasCadastro();
    }
    
    public static function getTelaDoacao() 
    {
        echo CadastroTealas::telasDoacao();
    }

}
