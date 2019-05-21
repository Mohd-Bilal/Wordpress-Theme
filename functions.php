<?php

//Links the css and js files

function alpha_setup(){
    wp_enqueue_style('google-fonts',"https://fonts.googleapis.com/css?family=Montserrat&display=swap");
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, "1.0",'all');
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), NULL, "1.0", true);

}

add_action('wp_enqueue_scripts', 'alpha_setup');