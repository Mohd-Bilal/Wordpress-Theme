<?php get_header() ?>




<div class="bd-example grey-overlay">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators" style="bottom:5wh">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
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
       <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="d-block carousel-resp " alt="...">
        <div class="carousel-caption  car-overlay">
          <h1><?php the_title() ?></h1>
          <br>
          <p><?php the_excerpt() ?></p>
          <a class="learn" style="color:white"href="<?php the_permalink(); ?>">LEARN MORE ></a>
          <button class="learn-more " href="<?php the_permalink(); ?>">LEARN MORE</button>

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
<?php include("about.php"); ?>
<?php include("facility.php") ?>
<?php include("gear.php"); ?>
<?php include("gallery.php"); ?>
<?php include("blog.php"); ?>
<?php get_footer() ?>