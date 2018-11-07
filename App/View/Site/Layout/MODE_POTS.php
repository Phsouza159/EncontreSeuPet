<?php
include_once '../Site/Layout/MenuNav.php';

include_once '../../Controller/ErroController.php';
include_once '../../Controller/GetConfigApp.php';
include_once '../../Model/Infra/CollectionsQuerys.php';
include_once '../../Model/Infra/DbContextoDAO.php';
include_once '../../Model/Conexao.php';
include_once '../../Model/AnimalDAO.php';
include_once '../../Model/PostDAO.php';
include_once '../../NucleoClass/Anuncios.php';
include_once '../../NucleoClass/Animal.php';
include_once '../../NucleoClass/Pessoa.php';
include_once '../../NucleoClass/Post.php';
include_once '../../NucleoClass/PerdidoPOST.php';


$con = new Conexao();
//AnimalDAO::GetAnimal(1 , $con->getCon());
$post = PostDAO::getPost($id_POST, $con->getCon());

if (is_null($post)) {
    ErroController::erroFatal("Erro ao carregar Post -- Post vazio :(");
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Encontre seu Pet</title>

        <meta name="viewport" content="width=device-width">
        <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Post.less?v=1.0.1" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/buttoes.less?v=1.0.1" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/footer.less?v=1.0.1" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Anuncios.less?v=1" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="../Contents/plugins/less/dist/less.js" ></script>
        <!-- include bootstrap --> 
        <!-- <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css"> -->
        <link rel="stylesheet" href="../Contents/plugins/bootstrap/css/bootstrap.css">
    </head>
    <body>
<?php
MenuNav::menu('../Site/');

if(is_null($post->getAnimal()))
{
    ErroController::erroFatal("Post sem Animal vinculado");
}

?>
        <div class="container">
            <!-- meto de saida java 
                 uso switch case
                 heranca 
                 modificadores de acesso
                 interface grafias 
                 array | Ilist 
                 polimorfismo
            -->

            <div class="row m-5">

                <section class="col-sm">
<?php //$post->getImage ?>
                    <section class='img-pet-pot ' style="background-image: url('https://static.wixstatic.com/media/913019_92f637ae488548e18ff7a4f755abd173~mv2_d_3760_3760_s_4_2.jpg/v1/fill/w_475,h_475,al_c,q_80,usm_0.66_1.00_0.01/913019_92f637ae488548e18ff7a4f755abd173~mv2_d_3760_3760_s_4_2.webp')">
                    </section>
                </section>

                <section class="col-sm justify-content-center">
                    <p class="h1 post-titulo text-info"><?php echo $post->getTitulo() ?></p>
                    
                    <p class="post-publicacao-text"><?php echo "Data de publicação: " . $post->getDtCriacao()?>
                                as: <?php echo $post->getHrCriacao()?></p>
                    <hr />
                    <ul class="descricao-pet">
                        <li>Nome do Pet: <?php echo $post->getAnimal()->getNomePet(); ?></li>
                        <li>Cor do Pet: <?php echo $post->getAnimal()->getPortePet(); ?></li>
                        <li>Raça do Pet: <?php echo $post->getAnimal()->getRacaPet(); ?></li>
                        <li>Cor do Pet: <?php echo $post->getAnimal()->getCorPet(); ?></li>
                        <li>Sexo Pet: <?php echo $post->getAnimal()->getSexoPet(); ?></li>
                        <li>Peso do Pet: <?php echo $post->getAnimal()->getPesoPet(); ?></li>
                        <li>idade Pet: <?php echo $post->getAnimal()->getIdadepet(); ?></li>
                        <li>Nome dono: <?php echo $post->getAnimal()->getNomeDono(); ?></li>
                        <li>Localização: <?php echo $post->getAnimal()->getLocalização(); ?></li>

                    </ul>
                    <section class="col m-2">
                        <button class="btn btn-primary">Entrar em contato</button>
                        <button class="btn btn-primary">Compartilhar</button>
                        <button class="btn btn-danger">Denunciar</button>
                    </section>
                </section>

            </div>
            <p class="h3 col">Descrição post:</p>
            <hr />
            <div class="row">
               
                <p class="">
<?php
echo $post->getDescricao();
echo "</p>";
//echo '<pre>';
//print_r($post);
//echo '</pre>';
?>      
</div>
        <div class="row">

            <section class="col-sm justify-content-center">
                    <p class="h1 post-titulo text-info">Dono do cachorro</p>
                    
                    <p class="post-publicacao-text"><?php echo "Data de publicação: " . $post->getDtCriacao()?>
                                as: <?php echo $post->getHrCriacao()?></p>
                    <hr />
                    <ul class="descricao-pet">
                        <li>Nome Dono: <?php echo $post->getAnimal()->getNomePet(); ?></li>
                        <li>Cor do Pet: <?php echo $post->getAnimal()->getPortePet(); ?></li>
                        <li>Raça do Pet: <?php echo $post->getAnimal()->getRacaPet(); ?></li>
                        <li>Cor do Pet: <?php echo $post->getAnimal()->getCorPet(); ?></li>
                        <li>Sexo Pet: <?php echo $post->getAnimal()->getSexoPet(); ?></li>
                        <li>Peso do Pet: <?php echo $post->getAnimal()->getPesoPet(); ?></li>
                        <li>idade Pet: <?php echo $post->getAnimal()->getIdadepet(); ?></li>
                        <li>Nome dono: <?php echo $post->getAnimal()->getNomeDono(); ?></li>
                        <li>Localização: <?php echo $post->getAnimal()->getLocalização(); ?></li>

                    </ul>
                </section>
                                            <section class="col-sm">
<?php //$post->getImage ?>
                    <section class='img-pet-pot ' style="background-image: url('../Contents/img/user.png')">
                        
                    </section>
                </section>
           </div>
                <div>
                    <button onclick="window.location.href = '../Site/CriarPost.php'" >Criar novo Posts</button>
                    <button onclick="window.location.href = '../Site/Posts.php'" >Voltar Galeria</button>
                </div>
<?php Anuncios::GerarAnuncio(); ?>
            
        </div>
                <?php
                MenuNav::footer();
                ?>
    </body>
</html>
