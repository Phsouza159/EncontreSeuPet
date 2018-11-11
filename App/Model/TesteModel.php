<?php

include '../Controller/ErroController.php';
include '../Controller/GetConfigApp.php';
include 'Infra/DbContextoDAO.php';
include 'Infra/CollectionsQuerys.php';
include 'Conexao.php';
include 'PostDAO.php';
include '../NucleoClass/PostDTO.php';

$con  = new Conexao();
$post = new PostDAO(); 


$post->editarPost(  3 , $con->getCon());



echo "<pre>";
    print_r($post->getPost(  3 , $con->getCon()));
echo "</pre>";

//PostDAO::salvePost($post, $con->getCon());
//print_r( PostDAO::quantidadePost($con->getCon()) );