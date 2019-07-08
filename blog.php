<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="blog_post_title" style="text-align: center;"id="facility">Blog</h2>
<p class="blog_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
</div>
</div>
<?php
$rss = fetch_feed( 'https://film-mixing.com/feed' );

$maxitems = 0;

if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity( 3 ); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items( 0, $maxitems );

endif;
?>
<div class="row">
    <?php if ( $maxitems == 0 ) : ?>
        <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
    <?php else : ?>
        <?php // Loop through each feed item and display each item as a hyperlink. ?>
        <?php foreach ( $rss_items as $item ) : ?>
            <div class="col-md-4" style="text-align:center;">
            <div class="card blog_card" >
              <div class="card-body blog_card_body">
                <h5 class="card-title blog_card_title" > <?php echo esc_html( $item->get_title() ); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted" ><?php printf( __( '%s', 'my-text-domain' ), $item->get_date('l,F Y '));?></h6>
                <br>
                <br>
                <a href="<?php echo esc_url( $item->get_permalink() ); ?>" class="card-link blog_card_link">Read More ></a>
              </div>
            </div>
            </div>

        <?php endforeach; ?>
    <?php endif; ?>
</div >
<div style="text-align:center;margin-top: 10%; ">
    <p style="color:white;">Like to read more articles ?</p>
    <a href="https://film-mixing.com" class="blog_card_link">Visit the blog now</a>
</div>
</div>