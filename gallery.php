 <h2 class="facility-head" id="gallery">Gallery</h2>
<div class="container">
	<div class="row">
        <div class="col-md-12">
		<p class="blog_description">A behind the scenes collage of what we love doing, and why we do it.</p>
        </div>
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


