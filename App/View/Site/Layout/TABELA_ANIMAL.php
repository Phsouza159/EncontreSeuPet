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
        <table class="table table-responsive-lg text-center">
            <tr>
                <th>id</th> 
                <th>id_dono</th>        
                <th>NomePet</th> 
                <th>PortePet</th>  
                <th>RacaPet</th>  
                <th>CorPet</th>  
                <th>SexoPet</th>  
                <th>PesoPet</th>  
                <th>Idadepet</th>
                <th> NomeDono</th>
                <th> Localizacao</th>
                 <th>FotoPet</th>
            </tr>
                <?php
                foreach ($ANIMAL as $value) {
                  echo "<tr>";
                    echo "<td>" . $value['id'] . "</td>";
                    echo "<td>" . $value['id_dono'] . "</td>";
                    echo "<td>" . $value['NomePet'] . "</td>";
                    echo "<td>" . $value['PortePet'] . "</td>";
                    echo "<td>" . $value['RacaPet'] . "</td>";
                    echo "<td><pre>" . $value['CorPet'] . "</pre></td>";
                    echo "<td>" . $value['SexoPet'] . "</td>";
                    echo "<td>" . $value['PesoPet'] . "</td>";
                    echo "<td>" . $value['Idadepet'] . "</td>";
                    echo "<td>" . $value['NomeDono'] . "</td>";
                    echo "<td>" . $value['Localizacao'] . "</td>";
                    echo "<td>" . $value['FotoPet'] . "</td>";
                  echo "</tr>";
                }
                ?>
        </table>
    </body>
</html>
