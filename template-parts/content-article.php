 <div class="page_heading">
            <h1 class="title"><?php the_title() ?></h1>
            <hr>
        </div>


        <div class="post_section">

            <div class="post_pic">
                
                <img src="<?php the_post_thumbnail_url('thumbnail') ?>" class="sticky" alt="post_pic">
                
            </div>



            <div class="post_content">

                <div class="meta mb-3">
                <span class="date"><?php the_date() ?></span>

                <?php
                    the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>','</span>');
                ?>

                <?php
                    the_category('<span class="tag"><i class="fa fa-tag"></i>', '<span class="tag"><i class="fa fa-tag"></i>', '</span');
                ?>


                



                </div>

                
                <p>
                <?php
                    the_content();
                ?>
                </p>
            </div>
            
        </div>



     <!--  <div class="comment_section">
             <p>Comments</p>
            <form action="/form/submit" method="POST">
                <textarea class="type_comment"> Type your comment here.</textarea>
                <br>
                <input type="submit" class="button" name="submit" value="Send">
            </form>

            

        </div>   -->
