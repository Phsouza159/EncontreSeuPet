<div class='m-5 card espaco-pots'>
    <section class='row'>
        
        <section class='col-sm p-4 '>
            <img src='#' height="250px" width="250px">
        </section>

        <section class='col-sm p-4 bg-info text-justify' >
            <h3 class='card-title'><?php echo $post['titulo'] ?></h2>

                <p class='card-text'><?php echo $post['descricao'] ?></p>
                <a class='btn btn-primary' href='../Posts/<?php echo $post['caminho'] ?>'>Visualizar post</a> 

                <p class='card-text'>publicação: <?php echo $post['dtCriacao'] ?></p>
        </section>
    </section>
</div>