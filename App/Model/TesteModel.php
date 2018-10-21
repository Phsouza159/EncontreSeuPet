<?php

include '../Controller/ErroController.php';

include 'Infra/DbContextoDAO.php';
include 'Infra/CollectionsQuerys.php';
include 'Conexao.php';
Include '../NucleoClass/Animal.php';
Include '../NucleoClass/Pessoa.php';
Include '../NucleoClass/Post.php';

include 'PostDAO.php';

$con  = new Conexao();
$post = new Post(); 

$post->setTitulo("Post Teste");
$post->setDescricao("Post Teste - Descricao");

//PostDAO::salvePost($post, $con->getCon());
print_r( PostDAO::quantidadePost($con->getCon()) );