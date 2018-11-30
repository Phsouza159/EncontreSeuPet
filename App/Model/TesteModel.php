<?php

include '../Controller/ErroController.php';
include '../Controller/GetConfigApp.php';
include 'Infra/DbContextoDAO.php';
include 'Infra/CollectionsQuerys.php';
include 'Conexao.php';
include 'PostDAO.php';

include '../NucleoClass/PessoaDTO.php';
include '../NucleoClass/Usuario.php';
$us = new Usuario();
$us->CadastrarUsuario($Con);



//PostDAO::salvePost($post, $con->getCon());
//print_r( PostDAO::quantidadePost($con->getCon()) );