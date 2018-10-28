<?php
         
 require_once '../View.php';
 include_once './Layout/MenuNav.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SUA PREFERENCIA</title>
                <!--Chamar folha css (LESS) -->
                <link rel="stylesheet/less" type="text/css" href="../Contents/css/Visitante.less?v=1.0.11" />
				<link rel="stylesheet/less" type="text/css" href="../Contents/css/footer.less?v=1.0.10" />

        <!-- Chamar biblioteca (LESS)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
        <!-- include bootstrap --> 
        <!-- <link rel="stylesheet" type="text/css" href="../Contents/css/bootstrap.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    </head>
    <body> 
  
         <?php 
        MenuNav::menu(); 
        ?>
        
        <header>
            <div class="div-box-01">
                

                <center> 
                Deseja adotar um animal de estimação?<br> 
                Em "Adoção" daremos a opção de posts<br>
                de animais que estão para adoção<br><br>
               
                Encontre um Pet em adoção<br> 
 
                
                <button tupe='button' class="btn btn-light" onclick="window.location.href = './Visitante.php'">Adoção</button>
            </center>
            </div>
            
            <div class="div-box-02">
                <center> 
                Deseja adotar um animal de estimação?<br> 
                Em "Adoção" daremos a opção de posts<br>
                de animais que estão para adoção<br><br>
               
                Encontre um Pet em adoção<br>
                <button type="button" class="btn btn-light" onclick="window.location.href = './Visitante.php'">Desaparecidos</button>
            </center>
            </div>
			


        </header>
		
		<footer style='clear: both'>
 		<?php 
           MenuNav::footer(); 
         ?>
		</footer>
		

        <!-- Chamar dependencias javascript -->
        <script src="../Contents/js/jquery3.3.1.js"></script>
        <script src="../Contents/js/bootstrap.min.js"></script>
    </body>
</html>

