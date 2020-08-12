<?php
    get_header();
?>


        <div class="page_heading">

            <h1 class="title">Blog Posts</h1>
            <hr>
            
        </div>


        <div class="posts_grid">
            
            <?php

                if( have_posts() ){

                    while( have_posts() ){

                        the_post();
                        
                        get_template_part( 'template-parts/content', 'archive');
                    }
                }
            ?>

            


        </div>

        <div class="pagination">

            <?php 
                the_posts_pagination()
            ?>

        </div>


        



<?php
    get_footer();
?> 