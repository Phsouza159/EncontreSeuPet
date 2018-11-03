<?php

$RESULT = null;

include_once '../../Site/Layout/MenuNav.php';

include_once '../../../Controller/ErroController.php';
include_once '../../../Controller/GetConfigApp.php';

include_once '../../../Model/Infra/CollectionsQuerys.php';
include_once '../../../Model/Infra/DbContextoDAO.php';
include_once '../../../Model/Conexao.php';



include_once '../../../Model/AdminDAO.php';
include_once '../../../Model/AnimalDAO.php';
include_once '../../../Model/AnimalDAO.php';
include_once '../../../Model/PostDAO.php';

include_once '../../../NucleoClass/Post.php';
include_once '../../../NucleoClass/PerdidoPOST.php';

include_once '../../../Controller/FormController.php';

$SQL = isset($_REQUEST['SCRIPT_TEXTO']) ? $_REQUEST['SCRIPT_TEXTO'] : "";

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="../../Contents/plugins/bootstrap/css/bootstrap.css">
        <script src="../../Contents/js/jquery3.3.1.js"></script>
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
 <div class="form-group">
     <form action="CONTROLE_SCRIPTS.php" method="post">
         <input type="hidden" name="ACAO_FORM" value="ATUALIZAR_SCRIPT">
       <label for="comment">Comment:</label>
       <textarea class="form-control" rows="5" id="comment" name="SCRIPT_TEXTO"><?php echo $SQL ?></textarea>
       <input type="submit"></input>
     </form>
</div>
      <?php
      
        if($RESULT != null && is_array($RESULT)){
            
           $linhas       = count($RESULT);
           $ColunasNomes = array_keys($RESULT['0']);
           $qntDeColunas = count($ColunasNomes);
           
           echo "<table class='table table-responsive-lg text-center'>";
               echo "<tr>";
                foreach ($ColunasNomes as $th)
                {
                    echo "<th>".$th."</th>";
                }
               echo "</tr>";
               foreach ($RESULT as $Chave)
               {
                 echo "<tr>";
                  foreach ($Chave as $td)
                  {
                    $td = is_null($td) ? "NULL": $td ;
                    
                    echo "<td>".$td."</td>";
                  }
                 echo "</tr>";
                }
               
           echo "</table>";
           
          // echo "<pre>";
          //   print_r($RESULT);
          // echo "</pre>";
        }
        else if(is_string($RESULT) && !is_null($RESULT) )
        {
            echo $RESULT;
        }
        
      ?>  
        
        
    </body>
</html>
