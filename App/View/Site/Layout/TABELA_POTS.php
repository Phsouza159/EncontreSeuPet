<?php
include_once '../../../Controller/ErroController.php';
include_once '../../../Controller/GetConfigApp.php';
include_once '../../../Model/Infra/CollectionsQuerys.php';
include_once '../../../Model/Infra/DbContextoDAO.php';
include_once '../../../Model/Conexao.php';
include_once '../../../Model/PostDAO.php';

include_once '../../../NucleoClass/PostDTO.php';


include_once '../../../Controller/FormController.php';



$con = new Conexao();
$POST = PostDAO::getPostALL($con->getCon());
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="../../Contents/plugins/bootstrap/css/bootstrap.css">
        <style>
            table td{
                font-size: 12px;
                border-bottom: 1px solid gray;
            }    
            table th {
                background-color: black;
                color: white;
            }
            
            input {
                border: 0px;
                border-bottom: 1px;
                border-bottom-color: blue;
            }
        </style>
        <script>
                    
            
            function ativarEdicao(){
                var elemento = document.getElementsByClassName('input-crud');
                    elemento.dislabed = false;
            };
        </script>   
    </head>
    <body>
        <?php
        
          if($POST == null)
          {
              echo "sem registros";
          }
          else   
          {
            $linhas = count($POST);
            $ColunasNomes = array_keys($POST['0']);

            echo "<table class='table table-responsive-lg text-center'>";
            echo "<tr>";

            foreach ($ColunasNomes as $th) {
                echo "<th>" . $th . "</th>";
            }
            echo "<td colspan='3'>Ações</td>";
       
            echo "</tr>";
            foreach ($POST as $Celula) {
                echo "<tr>";
           
                foreach ($Celula as $td) {
                    $td = is_null($td) ? " - " : $td;

                    echo "<td><input disabled class='grup controler-grup input-crud'type='texto' value='" . $td . "'/></td>";
                }
                    echo "<td><a href='./TABELA_POTS.php?ACAO_FORM=EDITAR_POST&editarId=".$Celula['ID']."'>Editar</td>";
                    echo "<td><a href='./TABELA_POTS.php?ACAO_FORM=EXCLUIR_POST&excluirId=".$Celula['ID']."'>Excluir</td>";
                    echo "<td><a href='#' onclick='ativarEdicao()'>Editar input</a></td>";
                echo "</tr>";
            }

            echo "</table>";
          }
        ?>
 
    </body>
</html>
