<?php

//Links the css and js files

function alpha_setup(){
    //stylesheets
    wp_enqueue_style('google-fonts',"https://fonts.googleapis.com/css?family=Montserrat:300,300i,500,500i,600&display=swap");
    wp_enqueue_style('boostrap-css',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, "1.0",'all');

     //javascript
    wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js");
    wp_enqueue_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js");
    wp_enqueue_script('boostrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js");
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), NULL, "1.0", true);

}

// add_theme_support('menus');
// add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts', 'alpha_setup');

//Adds title tag and post-thumbnails functionality to theme
function alpha_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

}

add_action('after_setup_theme','alpha_init');

//Used to create a new carousel item

function carousel_item(){
    register_post_type('carousel',
    array(
        'rewrite' => array('slug'=>'carousel'),
        'labels' => array(
            'name' => 'Carousel Items',
            'singular_name' => 'Carousel Item',
            'add_new_item' => 'Add New Carousel Item',
            'edit_item' => 'Edit Carousel Item'
        ),
        'menu-icon' => 'dashicons-format-image',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title','thumbnail','editor'
        ) 
    ));
}

add_action('init', 'carousel_item');

function facility_carousel_items(){
    register_post_type('facility',
    array(
        'rewrite' => array('slug'=>'facility_carousel_items'),
        'labels' => array(
            'name' => 'Facility Carousel Items',
            'singular_name' => 'Facility Carousel Item',
            'add_new_item' => 'Add New Facility',
            'edit_item' => 'Edit Facility'
        ),
        'menu-icon' => 'dashicons-format-image',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title','thumbnail','editor'
        ) 
    ));
}


add_action('init','facility_carousel_items');