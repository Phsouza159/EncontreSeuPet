<?php
include_once '../../Site/Layout/MenuNav.php';

include_once '../../../Controller/ErroController.php';
include_once '../../../Controller/PaginacaoPots.php';
include_once '../../../Controller/GetConfigApp.php';
include_once '../../../Model/Infra/CollectionsQuerys.php';
include_once '../../../Model/Infra/DbContextoDAO.php';
include_once '../../../Model/Conexao.php';
include_once '../../../Model/AnimalDAO.php';
include_once '../../../Model/PostDAO.php';

include_once '../../../NucleoClass/Post.php';
include_once '../../../NucleoClass/PerdidoPOST.php';

$con = new Conexao();
$ANIMAL = AnimalDAO::getAnimalALL($con->getCon());
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
        </style>
    </head>

    <body>
        <?php
        $linhas = count($RESULT);
        $ColunasNomes = array_keys($RESULT['0']);
        $qntDeColunas = count($ColunasNomes);

        echo "<table class='table table-responsive-lg text-center'>";
        echo "<tr>";

        foreach ($ColunasNomes as $th) {
            echo "<th>" . $th . "</th>";
        }
        echo "</tr>";
        foreach ($RESULT as $Chave) {
            echo "<tr>";
            foreach ($Chave as $td) {
                $td = is_null($td) ? " - " : $td;

                echo "<td>" . $td . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </body>
</html>
