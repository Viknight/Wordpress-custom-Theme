<?php
    get_header();
?>


            <?php

            if ( is_page( 'About' ) ) {
                        
                get_template_part( 'template-parts/content', 'about');
                    
                    }

            else {

                get_template_part( 'template-parts/content', 'page');
            
            }        
                
            ?>

<?php
    get_footer();
?> 