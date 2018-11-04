<!DOCTYPE html>
<?php
include_once '../Site/Layout/MenuNav.php';

include_once '../../Controller/ErroController.php';
include_once '../../Controller/PaginacaoPots.php';
include_once '../../Controller/GetConfigApp.php';
include_once '../../Model/Infra/CollectionsQuerys.php';
include_once '../../Model/Infra/DbContextoDAO.php';
include_once '../../Model/Conexao.php';
include_once '../../Model/AnimalDAO.php';
include_once '../../Model/PostDAO.php';

include_once '../../NucleoClass/Post.php';
include_once '../../NucleoClass/PerdidoPOST.php';

$con = new Conexao(); //conexão bando de dados

$qntPost = PostDAO::quantidadePost($con->getCon());
$qntAnimal = AnimalDAO::quantidadeAnimal($con->getCon());
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Dashbord</title>
        <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/PainelAdministrador.less" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Buttoes.less" />
        <!--  Chamar biblioteca (LESS)-->
        <script src="../Contents/plugins/less/dist/less.js" ></script>
        <!-- include bootstrap --> 

        <link rel="stylesheet" type="text/css" href="../Contents/plugins/bootstrap/css/bootstrap.css">

        <script src="../Contents/js/jquery3.3.1.js" ></script>

        <script>
        </script>
    </head>
    <body>

        <div class="body-elementos-painel">
            <p class="h1" style="">Elementos Diponiveis</p>
            <div class="body-elementos-painel-overflow">

                <table>
                    <tr>
                        <td>
                            <!--
                            
                            -->
                            <div class="float-card card card-sombra m-4" style="width: 18rem;">
                                <div class="exibicao-numero-card p-2">
                                    <p class="h6">Quantidade de pots registrados</p>
                                    <p class="h1"> <?php echo $qntPost ?></p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Pots</h5>
                                    <p class="card-text">...</p>
                                    <div class="div-button">
                                        <button class="d2" id="BT-VISULIZAR-POTS" 
                                                data-toggle="collapse" 
                                                href="#collapseExample" 
                                                role="button" 
                                                aria-expanded="false" 
                                                aria-controls="collapseExample">
                                            <span>visualizar Pots</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </td><td>
                            <!--
                            
                            -->
                            <div class="float-card card card-sombra m-4" style="width: 18rem;">
                                <div class="exibicao-numero-card p-2" style="background-color: greenyellow; color: black">
                                    <p class="h6">Quantidade de Animais registrados</p>
                                    <p class="h1"> <?php echo $qntAnimal ?></p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Animal</h5>
                                    <p class="card-text">...</p>
                                    <div>
                                        <button class="d2" id="BT-VISULIZAR-ANIMAIS" 
                                                data-toggle="collapse" 
                                                href="#collapseExample" 
                                                role="button" 
                                                aria-expanded="false" 
                                                aria-controls="collapseExample">
                                            <span>visualizar Animais</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </td><td>
                            <!--
                           
                            -->
                            <div class="float-card card card-sombra m-4" style="width: 18rem;">
                                <div class="exibicao-numero-card p-2" style="background-color: buttonface; color: black">
                                    <p class="h6">Controle Banco de Dados</p>
                                    <p class="h1">@</p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">atualizacao de scripts</h5>
                                    <p class="card-text">...</p>
                                    <div>
                                        <button class="d2" id="BT-VISULIZAR-BANCODADOSATUALIZAR" 
                                                data-toggle="collapse" 
                                                href="#collapseExample" 
                                                role="button" 
                                                aria-expanded="false" 
                                                aria-controls="collapseExample">
                                            <span>Visulizar Banco de Dados</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </td><td>               
                            <!--
                           
                            -->
                            <div class="float-card card card-sombra m-4" style="width: 18rem;">
                                <div class="exibicao-numero-card p-2" style="background-color: #117a8b; color: #fff">
                                    <p class="h6">Gerênciador de banco de Dados</p>
                                    <p class="h1">@</p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">ControleAvançado Banco de Dados</h5>
                                    <p class="card-text">...</p>
                                    <div>
                                        <button class="d2" id="BT-VISULIZAR-PHPMYADMIN" 
                                                data-toggle="collapse" 
                                                href="#collapseExample" 
                                                role="button" 
                                                aria-expanded="false" 
                                                aria-controls="collapseExample">
                                            <span>PhpMyAdmin</span>
                                        </button>
                                    </div>
                                </div>
                            </div>              
                            <!--
                           
                            -->
                        </td><td>
                            <div class="float-card card card-sombra m-4" style="width: 18rem;">
                                <div class="exibicao-numero-card" style="background-color: gray; color: black">
                                    <p class="h6">...</p>
                                    <p class="h1">...</p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">...</h5>
                                    <p class="card-text">...</p>
                                    <div>
                                        <button class="d2" id="" 
                                                data-toggle="collapse" 
                                                href="#collapseExample" 
                                                role="button" 
                                                aria-expanded="false" 
                                                aria-controls="collapseExample">
                                            <span>...</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--
            
                            -->
                        </td><td>
                            <div class="float-card card card-sombra m-4" style="width: 18rem;">
                                <div class="exibicao-numero-card" style="background-color: gray; color: black">
                                    <p class="h6">...</p>
                                    <p class="h1">...</p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">...</h5>
                                    <p class="card-text">...</p>
                                    <div>
                                        <button class="d2" id="" 
                                                data-toggle="collapse" 
                                                href="#collapseExample" 
                                                role="button" 
                                                aria-expanded="false" 
                                                aria-controls="collapseExample">
                                            <span>...</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <!--
        
                        -->
                    </tr>
                </table>>
            </div>
        </div>
        <?php
        // put your code here
        ?>

        <div class="justify-content-center">
            <button class="d2" onclick="window.location.href = 'home.php'"><span>home</span></button>
        </div>



        <div class="body-acaoes">

            <div class="collapse" id="collapseExample">
                <div class="card card-body iframe-controle">
                    <span id="POST-TABELA"></span>
                </div>
            </div>


        </div>
        <script src="../Contents/plugins/bootstrap/js/bootstrap.js"></script>
        <script>

        $(function () {

            var controle = false;


            $("#BT-VISULIZAR-POTS").click(function () {
                InserirIframe("TABELA_POTS");
            });

            $("#BT-VISULIZAR-ANIMAIS").click(function () {
                InserirIframe("TABELA_ANIMAL");
            });

            $("#BT-VISULIZAR-BANCODADOSATUALIZAR").click(function () {
                InserirIframe("CONTROLE_SCRIPTS");
            });

            $("#BT-VISULIZAR-PHPMYADMIN").click(function () {
                InserirIframe("http://127.0.0.1:8080/eds-modules/phpmyadmin470x180902201004/index.php", true);
            });


            function InserirIframe(FrameIclude, custom = false)
            {

                if (!controle && !custom)
                {
                    document.getElementById("POST-TABELA").innerHTML = "<iframe class='iframe-style' src='./Layout/" + FrameIclude + ".php' frameborder='0' allowfullscreen></iframe>";
                    controle = true;
                } else if (!custom)
                {
                    controle = false;
                } else
                {
                    document.getElementById("POST-TABELA").innerHTML = "<iframe class='iframe-style' src='" + FrameIclude + "' frameborder='0' allowfullscreen></iframe>";
                    controle = true;
            }
            }

        });
        </script>
    </body>
</html>
