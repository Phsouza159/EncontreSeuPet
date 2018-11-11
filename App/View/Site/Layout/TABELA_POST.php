<?php
include_once '../../../Controller/ErroController.php';
include_once '../../../Controller/GetConfigApp.php';
include_once '../../../Model/Infra/CollectionsQuerys.php';
include_once '../../../Model/Infra/DbContextoDAO.php';
include_once '../../../Model/Conexao.php';
include_once '../../../Model/PostDAO.php';

include_once '../../../NucleoClass/PostDTO.php';


include_once '../../../Controller/FormController.php';
//echo "<pre>";
//    print_r($_REQUEST);
//echo "</pre>";
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
                background-color: rgba(0,0,0,0);
                border: 0px;
                border-bottom: 1px solid gray;
                color: black !important;
            }
           
        </style>
        <script>
                    
            
            function ativarEdicao(elemento){
               // var elemento = document.getElementsByClassName('input-crud');
               // for(var x = 0 ; x < elemento.count)
                var input = elemento.querySelectorAll('input');
                    input[0].autofocus = true;
                    input[0].style.borderBottom = "1px solid red";
                    input[0].disabled = false;
            };
            
            function submitF(id){
                
               // elemento = document.getElementsByClassName(id);
               // var e = elemento[0].querySelectorAll('form');
                //e.submit;
                document.getElementsByClassName("form1").submit();
//submit();
                //elemento.submit
                //
            };
        </script>   
    </head>
    <body >
        <?php
        
          if($POST == null)
          {
              echo "sem registros Ativos!";
          }
          else   
          {
            $linhas = count($POST);
            $ColunasNomes = array_keys($POST['0']);

            echo "<table class='table table-responsive-lg text-center'>\n";
            echo "<tr>";

            foreach ($ColunasNomes as $th) {
                echo "<th>" . $th . "</th>\n";
            }
            echo "<td colspan='3'>Ações</td>\n";
       
            echo "</tr>\n";
           
            foreach ($POST as $Celula) {
        
                $id = $Celula["ID"];
                $x = 0;
                
                echo "<tr>\n";
                echo "<form class='form".$id."' method='POST' action=''>\n";
                    echo "<input type='hidden' name='ACAO_FORM' value='ALTERACAO-POST-ADMIN'>";
                
                    foreach ($Celula as $td) {
                        $td = is_null($td) ? " - " : $td;

                            if($x != 0)
                            {
                              echo "<td onclick='ativarEdicao(this , \"form".$id."\")' >\n"
                                    . "<input name='".$ColunasNomes[$x]."'  class='grup controler-grup input-crud'type='texto' value='" . $td . "'/>"
                                    . "\n</td>\n";  
                            }
                            else
                            {
                                echo "<input type='hidden' name='".$ColunasNomes[$x]."' value='".$td."'/>";
                                echo "<td>".$td."</td>";
                            }
                    $x++;
                }
                    echo "<td><a><input type='submit' value='Salvar' style='border: 0px; color: blue'></input></a></td>";
                    //echo "<td><a href='#' onclick='submitF(\"form".$id."\")'>Editar</a></td>\n";
                    echo "</form>\n";
                    echo "<td><a href='./TABELA_POTS.php?ACAO_FORM=EXCLUIR_POST&excluirId=".$Celula['ID']."'>Excluir</td>\n";
                    
                echo "</tr>\n";
                
                
            }

            echo "</table>";
          }
        ?>
 
    </body>
</html>
