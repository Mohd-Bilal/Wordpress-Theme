<?php

//Links the css and js files

function alpha_setup(){
    //stylesheets
    wp_enqueue_style('google-fonts',"https://fonts.googleapis.com/css?family=Montserrat&display=swap");
    wp_enqueue_style('boostrap-css',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, "1.0",'all');

     //javascript
    wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js");
    wp_enqueue_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js");
    wp_enqueue_script('boostrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js");
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), NULL, "1.0", true);

}

add_action('wp_enqueue_scripts', 'alpha_setup');