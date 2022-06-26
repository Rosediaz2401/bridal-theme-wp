<?php

if(have_posts()):
    while(have_posts()):
        the_post();
        //echo'<p>Imprimiendo entrada</p>';
?>
    <article>
        <h2><?php the_title(); ?></h2>
        <a href="<?php the_permalink(); ?>"></a>
        <p><? the_excerpt()?></p>
    </article>
<?php
    endwhile;
else:
    echo'<p>No hay entradas</p>';
endif;
?>