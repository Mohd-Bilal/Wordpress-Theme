<hr >
<h2 class="facility-head">Facility</h2>
<div class="bd-example ">
  <div id="facilityCarousel" class="carousel slide" style="margin: 0 auto;" data-ride="carousel">
    <ol class="carousel-indicators" style="bottom:5wh">
      <li data-target="#facilityCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#facilityCarousel" data-slide-to="1"></li>
      <li data-target="#facilityCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner facility-carousel-item">
    <?php
      $args = array('post_type'=>'facility','post_status'=>'publish','posts_per_page'=>3);
      $loop = new WP_Query($args);
      if($loop->have_posts()):
        $flag = True;
      while($loop->have_posts()) : $loop->the_post(); ?>
      <?php 
      if($flag) :
          echo '<div class="carousel-item active facility_carousel">';
      else :
        echo '<div class="carousel-item facility_carousel">';
      endif;
      $flag = False;
      ?>
      <div class="carousel-caption facility-description text-left">
          <h2><?php the_title() ?></h2>
          <br>
          <p><?php the_excerpt() ?></p>
          <!-- <a class='learn' href="<?php the_permalink(); ?>">Learn more >></a> -->
        </div>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="facility_carousel_image " alt="...">

    </div>
        
      <?php endwhile;
 
    else :
         echo '<p>There are no posts!</p>';
  
    endif;

    ?>

    </div>
    <a class="carousel-control-prev" href="#facilityCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#facilityCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>