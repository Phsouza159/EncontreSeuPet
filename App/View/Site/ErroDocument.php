<?php
    /**
     * pagina de controle de erros na parte do servidor
     */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          switch($_SERVER["REDIRECT_STATUS"])
          {
              case "302":
                  echo "<h1>Acesso Requer Login</h1>";
                  break;
              case "403":
                  echo "<h1>Solicitaçao ao arquivo negada</h1>";
                  break;
              case "404":
                  echo "<h1>Pagina nao encontrada</h1>";
                  break;
              default:
                  break;
          }
          echo "<pre>";
            print_r($_SERVER);
          echo "</pre>";
        ?>
    </body>
</html>
