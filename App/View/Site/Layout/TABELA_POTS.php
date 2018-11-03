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
$POTS = PostDAO::getPostALL($con->getCon());
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
        <table class="table table-responsive-lg text-center">
            <tr>
                <th>id</th> 
                <th>id_Animal</th>        
                <th>ativo</th> 
                <th>caminho</th>  
                <th>titulo</th>  
                <th>descricao</th>  
                <th>dtCriacao</th>  
                <th>hrCriacao</th>  
            </tr>
                <?php
                foreach ($POTS as $value) {
                  echo "<tr>";
                    echo "<td>" . $value['id'] . "</td>";
                    echo "<td>" . $value['id_Animal'] . "</td>";
                    echo "<td>" . $value['ativo'] . "</td>";
                    echo "<td>" . $value['caminho'] . "</td>";
                    echo "<td>" . $value['titulo'] . "</td>";
                    echo "<td><pre>" . $value['descricao'] . "</pre></td>";
                    echo "<td>" . $value['dtCriacao'] . "</td>";
                    echo "<td>" . $value['hrCriacao'] . "</td>";
                  echo "</tr>";
                }
                ?>
        </table>
    </body>
</html>
