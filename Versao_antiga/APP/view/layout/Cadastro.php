<?php
    include_once "../lib/View.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            /* Corpo da pagina*/
            body{ 
               background-image: url("../../assets/img/div_4.jpg");  
               margin: 0px;
            }
            
            /* div que fica entre os formularios*/
            .div-group-principal-cadastro
            {
                
                width: 100%;
                height: 100vh;
                background-color: rgba(0,206,209 , 0.4);
                
            }           
                /* form em que esta c formulario*/
            .form-group-principal-cadastro
            {
                color:white ;
                padding-top: 7%;
                padding-left: 10%;
            }
            /* tabela em que fica organizados o formulario */
            .table-group-principal-cadastro 
            {
               padding: 100px;
                border: 1px solid grey;
            }
            .table-group-principal-cadastro td
            {
                padding-top: 15px;
            }
            /* inputs dentro do formularios */ 
            .input-principal-cadastro
            {

            }m 
            /* descricao do texto do input */
            .text-descricao-group-principal-cadastro , h1
            {
                 text-align: center;
                 color:white ;
                 text-align: left;
            }
            /* condifuracao para o calendario da data de nascimento*/
            .dtNasc-calendario-group-principal-cadastro
            {
            }
 
    </style>
    </head>
    <body>
   
        <?php 
        // funcao que chama a tela 
        echo View::getTelaCadastro();
        
        ?>
    </body>
</html>


