<footer>
<div class="container-fluid">
<div class="footerstyle row">
    <div class="col-md-6 col-sm-12 col-xm-12">
        <ul>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#facility">FACILITY</a></li>
            <li><a href="#gear">GEAR</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">FILMOGRAPHY</a></li>
        </ul>
    </div>
    <div class="col-md-2 col-sm-12 col-xm-12 vl ">
    <img class="container d-flex flex-cloumn align-items-center justify-content-centre" src=<?php  echo get_template_directory_uri().'/images/Image2.png' ?>  alt="">
    <p>AUDIO STUDIOS</p>
    </div>
    <div class="col-md-4 col-sm-12 address">
        <h5>AuO2 Audio Studio</h5>
        <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. NON EST ISTA, INQUAM, PISO, MAGNA DISSENSIO. NON EST ISTA, INQUAM, PISO, MAGNA DISSENSIO</p>
    </div>
</div>
</div>
</footer>
<h2><?php _e( 'Recent news from Some-Other Blog:', 'my-text-domain' ); ?></h2>

<?php // Get RSS Feed(s)
include_once( ABSPATH . WPINC . '/feed.php' );

// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed( 'http://auo2studio.com/feed/' );

$maxitems = 0;

if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity( 5 ); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items( 0, $maxitems );

endif;
?>

<ul>
    <?php if ( $maxitems == 0 ) : ?>
        <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
    <?php else : ?>
        <?php // Loop through each feed item and display each item as a hyperlink. ?>
        <?php foreach ( $rss_items as $item ) : ?>
            <li>
                <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                    title="<?php printf( __( 'Posted %s', 'my-text-domain' ), $item->get_date('j F Y | g:i a') ); ?>">
                    <?php echo esc_html( $item->get_title() ); ?>
                </a>
            </li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
<?php wp_footer(); ?>
</body>

    <script>
    var $jq = jQuery.noConflict()
$jq(document).ready(function(){
  // Add scrollspy to <body>
  $jq('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $jq("#navbarText a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $jq('html, body').animate({
        scrollTop: $jq(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
</html>