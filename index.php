<?php get_header() ?>
<!-- <img src=<?php  echo get_template_directory_uri().'/images/carousel_image_main.jpg' ?> > -->
<body>

<!-- posts -->
<!-- <?php
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
        <?php the_excerpt() ;?>
        <a href="<?php the_permalink(); ?>">Learn more</a>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
        
	<?php endwhile;
 
else :
	echo '<p>There are no posts!</p>';
 
endif;
 
?>  -->
<!--posts-->


<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <?php
      $args = array('post_type'=>'carousel','post_status'=>'publish','posts_per_page'=>3);
      $loop = new WP_Query($args);
      if($loop->have_posts()):
        $flag = True;
      while($loop->have_posts()) : $loop->the_post(); ?>
      <?php 
      if($flag) :
          echo '<div class="carousel-item active">';
      else :
        echo '<div class="carousel-item ">';
      endif;
      $flag = False;
      ?>
       <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="d-block w-100 " alt="...">
        <div class="carousel-caption  text-left car-overlay">
          <h1><?php the_title() ?></h1>
          <br>
          <p><?php the_excerpt() ?></p>
          <a class='learn' href="<?php the_permalink(); ?>">Learn more >></a>
        </div>
      </div>
      <?php endwhile;
 
    else :
         echo '<p>There are no posts!</p>';
  
    endif;

    ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
<?php get_footer() ?>