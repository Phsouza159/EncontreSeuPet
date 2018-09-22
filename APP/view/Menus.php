<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {
                margin: 0 ;
                background-image: url("../img/bk.jpg");
                background-size: 100%;

            }

            p , h1 , h2 , h3 , h4 , h5 , h6 { color: white}

            .conteiner {
                margin:  5% ;
            }

            .text {
                text-align: justify;
                text-indent: 5%;
            }

            .menu-pags { list-style-type: none; }
            .menu-pags ul { border-radius: 10px 0 0 0;}
            .menu-pags li {
                display: inline;
                padding: 15px ;
                margin: -2px ;
                background-color: red;

            }

            .menu-pags li:hover
            {
                background: #fff;
                color: black;
            }
            .menu-pags a {text-decoration: none;}
            .menu-pags a:link ,
            a:visited ,
            a:active { color: #fff ;}

            /*.menu-pags a:hover , li:hover { color: black;}*/

            .mask{
                background-color: rgba( 0 , 0 , 0 , 0.6);
                margin-top: 0px;
                position: fixed;
                height: 100vh;
                width: 100%;
                z-index: -100
            }
        </style>

      


    </head>
    <body>

        <div>
            <ul class='menu-pags'>
                <a href='index.php'><li>Home</li></a>
                <a href='pags/tutorial.php'><li>CSS TUTORIAL</li></a>
                <a href='pags/layout.php'><li>CSS Layout</li></a>
                <a href='pags/links.php'><li>CSS Links</li></a>
                <a href='pags/menuCss.php'><li>CSS Menu</li></a>
                <a href='pags/print.php'><li>CSS Print</li></a>
                <a href='pags/contato.php'><li>Contato</li></a>
            </ul>
        </div>
    </body>
</html>
