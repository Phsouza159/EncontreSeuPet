<?php

include_once "CadastroTealas.php";

class View {

    public static function getTelaCadastro(): string 
    {
        return CadastroTealas::telasCadastro();
    }
    
    public static function getTelaDoacao() : string
    {
        return CadastroTealas::telasDoacao();
    }

}