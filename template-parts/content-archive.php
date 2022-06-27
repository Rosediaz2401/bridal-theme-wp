
        <div class="blog-section ">
            <a href="<?php the_permalink(); ?>">
            <div class="content-overlay-wrap">
                <div class="content-overlay"></div>
                    <img class="img-photos package-photos book-img" src="<?php the_post_thumbnail_url(); ?>" alt="wedding couple">
                </div>
                <h4 class="blog-names"><?php the_title(); ?></h4>
                <!-- <p class="photo-text booking-text blog-text"><?php the_excerpt(); ?></p> -->
                <p class="date-top-text"><?php the_date(); ?></p>
            </a>
        </div>
   


