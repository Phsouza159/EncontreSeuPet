<?php

include_once 'PessoaDAO.php';
include_once '../NucleoClass/Pessoa.php';
include_once 'Conexao.php';

$a = new Conexao();
$p = new Pessoa();

$p->setNome('souza');
        
PessoaDAO::SetNovoUsuario($p , $a->getCon());

$aux = PessoaDAO::GetUsuarios($a->getCon());

echo '<pre>';
  echo print_r($aux);
echo '</pre>';
