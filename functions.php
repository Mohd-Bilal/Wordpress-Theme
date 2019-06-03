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


add_action('wp_enqueue_scripts', 'alpha_setup');

//Adds title tag and post-thumbnails functionality to theme
function alpha_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

}

add_action('after_setup_theme','alpha_init');

function load_dashicons_front_end() {
    wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );


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

//Microphones

function microphones(){
    register_post_type('microphone',
    array(
        'rewrite' => array('slug'=>'microphone'),
        'labels' => array(
            'name' => 'Microphones',
            'singular_name' => 'Microphone',
            'add_new_item' => 'Add New Microphone',
            'edit_item' => 'Edit Microphone'
        ),
        'menu-icon' => 'dashicons-dashboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title','thumbnail','editor'
        ) 
    ));
}


add_action('init','microphones');

//System

function systems(){
    register_post_type('system',
    array(
        'rewrite' => array('slug'=>'system'),
        'labels' => array(
            'name' => 'Systems',
            'singular_name' => 'System',
            'add_new_item' => 'Add New System',
            'edit_item' => 'Edit System'
        ),
        'menu-icon' => 'dashicons-format-image',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title','thumbnail','editor'
        ) 
    ));
}


add_action('init','systems');

//Headphones

function headphones(){
    register_post_type('headphone',
    array(
        'rewrite' => array('slug'=>'headphone'),
        'labels' => array(
            'name' => 'Headphones',
            'singular_name' => 'Headphone',
            'add_new_item' => 'Add Headphone',
            'edit_item' => 'Edit Headphone'
        ),
        'menu-icon' => 'dashicons-format-image',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title','thumbnail','editor'
        ) 
    ));
}


add_action('init','headphones');

