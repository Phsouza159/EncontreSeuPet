<div class='m-5 col-sm'>
    <center>

        <section class='col-sm p-4 bg-info text-justify' >
            <?php
               $tipo = $post['TipoPost'] == 1 ? "Doacão" : "Perdido";
              echo "<h3 class='card-title'>".$post['Titulo']."</h2>";
              echo "<h3 class='card-title'>$tipo</h2>";
            ?>
            
            
             <section class='col-sm p-3 '>
                 <center><img src='../Contents/img/<?php echo $post['FotoPet'] ?>' height="250px" width="250px"></center>
        </section>

                <a class='btn btn-light' href='../Posts/<?php echo $post['CaminhoPost'] ?>'>Visualizar post</a> 

                <p class='card-text'>publicação: <?php echo $post['DtCriacao'] ?></p>
        </section>
        
        
    </center>
</div>