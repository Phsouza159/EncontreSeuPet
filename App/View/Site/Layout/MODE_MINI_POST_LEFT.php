<div class='m-5 card espaco-pots'>
    <section class='row'>

        <section class='col-sm p-4 bg-info text-justify' >
            <h3 class='card-title'><?php echo $post['TipoPost'] ?></h2>

                <p class='card-text'>Tem que ter descricao !</p>
                <a class='btn btn-primary' href='../Posts/<?php echo $post['CaminhoPost'] ?>'>Visualizar post</a> 

                <p class='card-text'>publicação: <?php echo $post['DtCriacao'] ?></p>
        </section>
        
         <section class='col-sm p-4 '>
            <img src='#' height="250px" width="250px">
        </section>
    </section>
</div>