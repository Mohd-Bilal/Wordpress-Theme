<div class="container">
	<div class="row">
		<h2 class="gallery_title">Gallery</h2>
	</div>
	<div class="row">
		<p class="gallery_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
	</div>	
	
</div>

<div class="owl-carousel">
<?php
    $args = array('post_type'=>'gallery','post_status'=>'publish');
    $loop = new WP_Query($args);
    if($loop->have_posts()):
    while($loop->have_posts()) : $loop->the_post(); 
?>
	<div class="gallery_item"> <img src=<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?> ></div>
	
<?php endwhile;
    else :
        echo '<p>There are no posts!</p>';
    endif;
?>
</div>


