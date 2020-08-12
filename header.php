<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
            
        <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
        <?php
            wp_head();
        ?>
        
        </head>
    <body>
        <div id="site_wrap">

            <div class="header">
                <div class="header_left">
                <?php
                dynamic_sidebar('sidebar-1')
                ?>
                </div>
                <!-- do not remove... used for removing margin created by inline blocks

                --><div class="header_center">
                    <h1>My Health Project<span> making "healthy" a way of living<br></span></h1>
                    
                </div><!-- do not remove... used for removing margin created by inline blocks

                --><div class="header_right">
                    <?php
                    dynamic_sidebar('sidebar-13')
                    ?>
                    
                    <?php 
                        get_search_form();
                    ?>
                </div>
            </div>



            <div class="navbar">
                <hr>
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle"/>


                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="nav">%3$s</ul>'
                        )
                    );


                ?>



                
                <span></span><hr>
            </div>
