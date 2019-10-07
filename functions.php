<?php

//Links the css and js files

function alpha_setup(){
    //stylesheets
    wp_enqueue_style('google-fonts',"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600&display=swap");
    wp_enqueue_style('boostrap-css',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_style('font-awesome',"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, "1.0",'all');
    wp_enqueue_style('owl-carousel-min-css',get_template_directory_uri().'/owlcarousel/owl.carousel.min.css',NULL,"1.0",'all');
    wp_enqueue_style('owl-carousel-css',get_template_directory_uri().'/owlcarousel/owl.theme.default.min.css',NULL,"1.0",'all');

     //javascript
    wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js");
    wp_enqueue_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js");
    wp_enqueue_script('boostrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js");
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), NULL, "1.0", true);
    wp_enqueue_script('owl.carousel',get_template_directory_uri().'/owlcarousel/owl.carousel.min.js');

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
            'name' => 'Facility Card Items',
            'singular_name' => 'Facility Card Item',
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
            'add_new_item' => 'Add New Headphone',
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

function gallery_carousel_item(){
    register_post_type('gallery',
    array(
        'rewrite' => array('slug'=>'gallery'),
        'labels' => array(
            'name' => 'Gallery',
            'singular_name' => 'Gallery',
            'add_new_item' => 'Add New Image',
            'edit_item' => 'Edit Image'
        ),
        'menu-icon' => 'dashicons-format-image',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title','thumbnail'
        ) 
    ));
}


add_action('init','gallery_carousel_item');

function team_carousel_items(){
    register_post_type('team',
    array(
        'rewrite' => array('slug'=>'team_carousel_items'),
        'labels' => array(
            'name' => 'Team Carousel Items',
            'singular_name' => 'Team Carousel Item',
            'add_new_item' => 'Add New Team Member',
            'edit_item' => 'Edit Team'
        ),
        'menu-icon' => 'dashicons-format-image',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title','thumbnail','editor'
        ) 
    ));
}
add_action('init','team_carousel_items'); 




function filmography_items() {
	$labels = array(
		'name'               => __( 'Films' ),
		'singular_name'      => __( 'Films' ),
		'add_new'            => __( 'Add New Film' ),
		'add_new_item'       => __( 'Add New Film' ),
		'edit_item'          => __( 'Edit Film' ),
		'new_item'           => __( 'Add New Film' ),
		'view_item'          => __( 'View Film' ),
		'search_items'       => __( 'Search Film' ),
		'not_found'          => __( 'No films found' ),
		'not_found_in_trash' => __( 'No filmd found in trash' )
	);
	$supports = array(
		'title',
		'thumbnail',
		'revisions',
	);
	$args = array(
		'labels'               => $labels,
		'supports'             => $supports,
		'public'               => true,
		'capability_type'      => 'post',
		'rewrite'              => array( 'slug' => 'films' ),
		'has_archive'          => true,
		'menu_position'        => 30,
		'register_meta_box_cb' => 'wpt_add_film_metaboxes',
	);
	register_post_type( 'films', $args );
}
add_action( 'init', 'filmography_items' );
/**
 * Adds a metabox to the right side of the screen under the “Publish” box
 */
function wpt_add_film_metaboxes() {
	add_meta_box(
		'wpt_films_date',
		'Film Date',
		'wpt_films_date',
		'films',
		'normal',
		'default'
	);
	add_meta_box(
		'wpt_films_link',
		'Film Link',
		'wpt_films_link',
		'films',
		'normal',
		'default'
    );
    add_meta_box(
		'wpt_films_ongoing',
		'Film Ongoing',
		'wpt_films_ongoing',
		'films',
		'normal',
		'default'
	);
}
/**
 * Output the HTML for the metabox.
 */
function wpt_films_link() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'film_fields' );
	// Get the link data if it's already been entered
	$link = get_post_meta( $post->ID, 'link', true );
	// Output the field
	echo '<input type="text" name="link" value="' . esc_textarea( $link )  . '" class="widefat">';
}

function wpt_films_date() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'film_fields' );
	// Get the link data if it's already been entered
	$link = get_post_meta( $post->ID, 'date', true );
	// Output the field
	echo '<input type="text" name="date" value="' . esc_textarea( $link )  . '" class="widefat">';
}
function wpt_films_ongoing() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'film_fields' );
	// Get the link data if it's already been entered
	$link = get_post_meta( $post->ID, 'ongoing', true );
	// Output the field
    $html = '<select  name="ongoing" class="widefat"><option value="yes"';
    if($link == "yes"){
        $html = $html.'selected>Yes</option><option value="no">No</option></select>';
    }else{
        $html = $html.'>Yes</option><option value="no" selected>No</option></select>';
    }
    echo $html;
}
/**
 * Save the metabox data
 */
function wpt_save_films_meta( $post_id, $post ) {
	// Return if the user doesn't have edit permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	// Verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times.
	if ( ! isset( $_POST['date'] ) || ! wp_verify_nonce( $_POST['film_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
    if ( ! isset( $_POST['link'] ) || ! wp_verify_nonce( $_POST['film_fields'], basename(__FILE__) ) ) {
		return $post_id;
    }
    if ( ! isset( $_POST['ongoing'] ) || ! wp_verify_nonce( $_POST['film_fields'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// Now that we're authenticated, time to save the data.
	// This sanitizes the data from the field and saves it into an array $films_meta.
    $films_meta['date'] = esc_textarea( $_POST['date'] );
    $films_meta['link'] = esc_textarea( $_POST['link'] );
    $films_meta['ongoing'] = esc_textarea($_POST['ongoing']);
	// Cycle through the $films_meta array.
	// Note, in this example we just have one item, but this is helpful if you have multiple.

	foreach ( $films_meta as $key => $value ) :
		// Don't store custom data twice
		if ( 'revision' === $post->post_type ) {
			return;
		}
		if ( get_post_meta( $post_id, $key, false ) ) {
			// If the custom field already has a value, update it.
			update_post_meta( $post_id, $key, $value );
		} else {
			// If the custom field doesn't have a value, add it.
			add_post_meta( $post_id, $key, $value);

		}
		if ( ! $value ) {
			// Delete the meta key if there's no value
			delete_post_meta( $post_id, $key );
		}
	endforeach;
}
add_action( 'save_post', 'wpt_save_films_meta', 1, 2 );


add_filter( 'excerpt_length', function($length) {
    return 65;
} );