<?php
include_once '../../Controller/ErroController.php';

include_once "../../Model/Infra/DbContextoDAO.php";
include_once "../../Model/Conexao.php";
include_once "../../Model/Infra/CollectionsQuerys.php";
include_once "../../Model/PostDAO.php";
include_once "../../Model/AnimalDAO.php";

include_once '../../NucleoClass/PostDTO.php';

include_once '../../Controller/GetConfigApp.php';
include_once '../../Controller/GerarPaginaWebPost.php';

include_once '../../Controller/FormController.php';

include_once './Layout/MenuNav.php';







$dadosPostDoacao = isset($_REQUEST['Reload-Post']) ? $_REQUEST['Reload-Post'] : NULL;

if (!is_null($dadosPostDoacao)) {
    $dadosPostDoacao = $_REQUEST['DESCRICAO-POST-DOACAO'];
    $DadosCriarPosts = $dadosPostDoacao;
} else {
    $DadosCriarPosts = "Crie seu post aqui!";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link rel="stylesheet" type="text/css" href="../Contents/plugins/bootstrap/css/bootstrap.css">
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/CriarPots.less?v=1" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/footer.less?v=1" />

        <link rel="stylesheet" href="./Layout/post/dist/summernote-lite.css">

        <title>Criar Posts</title>

        <script src="../Contents/plugins/less/dist/less.js"></script> 

        <title>Criar Posts</title>



        <style>
            .container-body
            {
                margin: 10%; 
            }
        </style>
    </head>

    <body onload="esconderFormularioPrincipal()">

        <?php
        MenuNav::menu();
        ?>
        
        <div id="opcaoPet" class="opcaoes-pet row">
            
                <section class='card col'>
                
                </section>
                <section class='card col'>
                
                </section>
            
        </div>
        
        <div id="formularioPrincipal" class="container-body">

            <form method="get" action="CriarPost.php">
                
                <input type="hidden" name="ACAO_FORM" value="CADASTRO-POST">
                
                <section class="row"> 

                    <label class="col-sm-2 col-form-label">Insira o Titulo:</label>

                    <section class="form-group col m-2">     
                        <input type="text"
                               name="POTS-TITULO"
                               class="input-tam form form-control"
                               placeholder="Insira o Titulo"
                               required="true">
                    </section> 
                </section>
                <section class="row"> 

                    <label class="col-sm-2 col-form-label">Nome do Pet:</label>

                    <section class="col m-2">     
                        <input type="text"
                               name="POTS-NOME-PET"
                               class="input-tam  form form-control"
                               placeholder="Nome Animal"
                               required="true">
                    </section>


                    <label class="col-sm-2 col-form-label">Raça Animal:</label>

                    <section class="col m-2">  

                        <input type="text"
                               name="POTS-RACA-PET"
                               class="input-tam  form form-control"
                               placeholder="Raça Animal"
                               required="true">

                    </section>
                </section>

                <section class="row">     


                    <label class="col-sm-2 col-form-label">Cor Animal:</label>

                    <section class="col m-2">     
                        <input type="text"
                               name="POTS-COR-ANIMAL"
                               class="input-tam  form form-control"
                               placeholder="Cor Animal"
                               required="true">
                    </section>



                    <label class="col-sm-2 col-form-label">Sexo do Animal:</label>

                    <select class="input-tam form-control m-2" 
                            name="POTS-SEXO-PET">
                        <option value="0" checked>Macho</option>>
                        <option value="1">Fêmea</option>
                    </select>
                </section>

                <section class="row">     
                    <label class="col-sm-2 col-form-label">Peso do Animal:</label> 

                    <section class="col m-2">     
                        <input type="text"
                               name="POTS-PESO-ANIMAL"
                               class="input-tam form-control"
                               placeholder="Peso Animal"
                               required="true">
                    </section>

                    <label class="col-sm-2 col-form-label">Idade do Animal:</label>

                    <section class="col m-2">     
                        <input type="text"
                               name="POTS-IDADE-PET"
                               class="input-tam  form-control"
                               placeholder="Idade Animal"
                               required="true">
                    </section>

                </section>
                <section class="row"> 
                    <section class="col m-2"> 
                        <h6> <i class="note-icon-summernote"></i> Summernote
                            <span class="label label-info">Bootstrap v3.3.7</span>
                            <span class="label label-success">with Summernote Icons</span>
                        </h6>
                    </section>
                </section>
                <section class="row"> 
                    <section class="col m-2"> 
                        <textarea id="summernote" 
                                  name="POTS-DESCRICAO-POST"><p>Crie seu pots aqui!</p></textarea>

                        <button class="btn btn-primary"  type="submit">Criar</button>

                        </form>
                        <button class="btn btn-primary" onclick="window.location.href = 'posts.php'" >Voltar Galeria</button>
                    </section>
                    
                    <section class="col m-2">
                        
                        <label class="col-sm-2 col-form-label">Idade do Animal:</label>
                        
                        <section class="col m-2">     
                        <input type="File"
                               name=""
                               class="input-tam  form-control"
                               placeholder=""
                               required="true">
                    </section>
                    </section>
                    
                </section>
        </div>
        <?php
        //GerarPaginaWebPost::main();
        MenuNav::footer()
        ?>
        <script src="../Contents/js/jquery3.3.1.js"></script> 
        <script type="text/javascript">
                //$('#summernote').summernote();
                $(document).ready(function () {
                    $('#summernote').summernote({
                        widht: 400,
                        height: 400,
                        tabsize: 2
                    });
                });
                
                function esconderFormularioPrincipal()
                {
                    var elemento = document.getElementById('formularioPrincipal');
                    elemento.hidden = !elemento.hidden; 
                }

        </script>

        <script src="../Contents/plugins/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="./Layout/post/dist/summernote-lite.js"></script>
        <script src="./Layout/post/dist/lang/summernote-pt-BR.min.js"></script>
    </body>

</html>
