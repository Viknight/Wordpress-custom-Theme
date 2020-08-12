<?php

function varun_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','varun_theme_support');




function varun_menus(){

    $locations = array(
        'primary' => "Desktop primary top navbar",
        'footer' => "Footer menu Items"
    );
    register_nav_menus($locations);
}

add_action('init','varun_menus');






function varun_load_stylesheet(){

    $version = wp_get_theme()->get( 'Version' );
    if ( is_front_page() ) {
        wp_enqueue_style('front-page-style', get_template_directory_uri() . "/style.css", array('varun-fontawesome'), $version, 'all');
        wp_enqueue_style('varun-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '5.13.0', 'all');
    }
    elseif ( is_single() ) {
        wp_enqueue_style('single-page-style', get_template_directory_uri() . "/style_blog_post.css", array('varun-fontawesome'), $version, 'all');
        wp_enqueue_style('varun-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '5.13.0', 'all');
    }
    elseif ( is_home() ){
        wp_enqueue_style('index-page-style', get_template_directory_uri() . "/style_blog_archive.css", array('varun-fontawesome'), $version, 'all');
        wp_enqueue_style('varun-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '5.13.0', 'all');
    }
    elseif ( is_page( 'About' ) ) {
        wp_enqueue_style('about-page-style', get_template_directory_uri() . "/style_about_page.css", array('varun-fontawesome'), $version, 'all');
        wp_enqueue_style('varun-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '5.13.0', 'all');
    }
    elseif ( is_search() ) {
        wp_enqueue_style('index-page-style', get_template_directory_uri() . "/style_blog_archive.css", array('varun-fontawesome'), $version, 'all');
        wp_enqueue_style('varun-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '5.13.0', 'all');
    }
    elseif ( is_archive() ){
        wp_enqueue_style('index-page-style', get_template_directory_uri() . "/style_blog_archive.css", array('varun-fontawesome'), $version, 'all');
        wp_enqueue_style('varun-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '5.13.0', 'all');
    }
    else {
        wp_enqueue_style('general-page-style', get_template_directory_uri() . "/style_general_page.css", array('varun-fontawesome'), $version, 'all');
        wp_enqueue_style('varun-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '5.13.0', 'all');
    }
    }

add_action( 'wp_enqueue_scripts', 'varun_load_stylesheet');




function varun_register_scripts() {

    wp_enqueue_script('javascript-test','https://www.w3schools.com/js/myScript.js',array(),'3.4.1');

}

add_action( 'wp_enqueue_scripts','varun_register_scripts' );





function varun_widget_areas() {

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="header_left_inner_widget">',
            'after_widget' => '</div>',
            'name' => '⏉ Header_social_media',
            'id' => 'sidebar-1',
            'description' => 'Header Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="footer_right_inner_widget">',
            'after_widget' => '</div>',
            'name' => '☎ Footer_social_media',
            'id' => 'sidebar-2',
            'description' => 'Footer Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="home_page_post_image">',
            'after_widget' => '</div>',
            'name' => '⚡ ⇖ Home_post_image_top_left',
            'id' => 'sidebar-3',
            'description' => 'post image on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="home_page_post_title">',
            'after_widget' => '</div>',
            'name' => '⚓ ⇖ Home_post_title_top_left',
            'id' => 'sidebar-4',
            'description' => 'post title on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="home_page_post_image">',
            'after_widget' => '</div>',
            'name' => '⚡ ⇗ Home_post_image_top_right',
            'id' => 'sidebar-5',
            'description' => 'post image on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="home_page_post_title">',
            'after_widget' => '</div>',
            'name' => '⚓ ⇗ Home_post_title_top_right',
            'id' => 'sidebar-6',
            'description' => 'post title on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="home_page_post_image">',
            'after_widget' => '</div>',
            'name' => '⚡ ⇙ Home_post_image_bottom_left',
            'id' => 'sidebar-7',
            'description' => 'post image on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="home_page_post_title">',
            'after_widget' => '</div>',
            'name' => '⚓ ⇙ Home_post_title_bottom_left',
            'id' => 'sidebar-8',
            'description' => 'post title on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="home_page_post_image">',
            'after_widget' => '</div>',
            'name' => '⚡ ⇗ Home_post_image_bottom_right',
            'id' => 'sidebar-9',
            'description' => 'post image on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="home_page_post_title">',
            'after_widget' => '</div>',
            'name' => '⚓ ⇗ Home_post_title_bottom_right',
            'id' => 'sidebar-10',
            'description' => 'post title on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="home_page_post_image">',
            'after_widget' => '</div>',
            'name' => '⚡ ⇳ Home_post_image_center',
            'id' => 'sidebar-11',
            'description' => 'post image on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="home_page_post_title">',
            'after_widget' => '</div>',
            'name' => '⚓ ⇳ Home_post_title_center',
            'id' => 'sidebar-12',
            'description' => 'post title on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="header_right_name">',
            'after_widget' => '</div>',
            'name' => '☊ Header right Name',
            'id' => 'sidebar-13',
            'description' => 'post title on home page'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="footer_left">',
            'after_widget' => '</div>',
            'name' => '⚿ Footer left',
            'id' => 'sidebar-14',
            'description' => 'post title on home page'
        )
    );
    

}

add_action( 'widgets_init', 'varun_widget_areas');


?>